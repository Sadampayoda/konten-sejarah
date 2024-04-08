<?php

namespace App\Http\Controllers;

use App\Models\Sejarah;
use Illuminate\Http\Request;

class SejarahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Sejarah::all();

        $data->map(function($data){
            $words = str_word_count($data->description, 1);
            $data->text = $words[0];
            
        });
        
        return view('admin.sejarah.index',[
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.sejarah.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);
        Sejarah::create([
            'title' => $request->title,
            'description' => $request->description
        ]);
        return redirect()->route('sejarah.index')->with('success', 'Data sejarah berhasil ditambah.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sejarah $sejarah)
    {
        $data = Sejarah::find($sejarah->id);
        

    
        $data->deskripsi = implode("\n\n", str_split($data->description, 100));
        return view('admin.sejarah.show',[
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sejarah $sejarah)
    {
        return view('admin.sejarah.edit',[
            'data' => Sejarah::find($sejarah->id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sejarah $sejarah)
    {
        $validasi = $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        Sejarah::where('id',$sejarah->id)->update([
            'title' => $request->title,
            'description' => $request->description
        ]);
        return redirect()->route('sejarah.index')->with('success', 'Data sejarah berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sejarah $sejarah)
    {
        Sejarah::where('id',$sejarah->id)->delete();
        return redirect()->route('sejarah.index')->with('success', 'Data Sejarah berhasil dihapus.');
    }
}
