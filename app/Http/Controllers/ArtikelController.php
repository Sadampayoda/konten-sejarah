<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Artikel::all();

        $data->map(function($data){
            $words = explode(' ', $data->content);
            $data->text = implode(' ', array_slice($words, 0, 5));
        });
        // dd($data);
        return view('admin.artikel.index',[
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.artikel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string|max:300',
            'image' => 'required|file|mimes:png,jpg,jpeg,gif|max:10240', 
        ]);
        
        $file = $request->file('image');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->move('image/artikel',$fileName);

        Artikel::create([
            'image' => $filePath,
            'title' => $request->title,
            'content' => $request->content
        ]);
        return redirect()->route('artikel.index')->with('success', 'Data Artikel berhasil ditambah.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Artikel $artikel)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artikel $artikel)
    {
        
        return view('admin.artikel.edit',[
            'data' => Artikel::find($artikel->id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artikel $artikel)
    {
        if($request->hasFile('image')){
            $validatedData = $request->validate([
                'title' => 'required|string',
                'content' => 'required|string|max:300',
                'image' => 'required|file|mimes:png,jpg,jpeg,gif|max:10240', 
            ]);

            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->move('image/artikel',$fileName);

            Artikel::where('id',$artikel->id)->update([
                'image' => $filePath,
                'title' => $request->title,
                'content' => $request->content
            ]);
            
        }else{
            $validatedData = $request->validate([
                'title' => 'required|string',
                'content' => 'required|string|max:100',
            ]);
            Artikel::where('id',$artikel->id)->update([
                'title' => $request->title,
                'content' => $request->content
            ]);
            
        }

        
        
        
     
        

       
        return redirect()->route('artikel.index')->with('success', 'Data Artikel berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artikel $artikel)
    {
        Artikel::where('id',$artikel->id)->delete();
        return redirect()->route('artikel.index')->with('success', 'Data Artikel berhasil dihapus.');
    }
}
