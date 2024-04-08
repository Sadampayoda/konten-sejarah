<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.kontak.index',[
            'data' => Kontak::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kontak.create');   
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        

        Kontak::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ]);
        return redirect()->route('kontak.index')->with('success', 'Data kontak berhasil ditambah.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kontak $kontak)
    {
        // return view('admin.keanggotaan.edit')
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kontak $kontak)
    {
        return view('admin.kontak.edit',[
            'data' => Kontak::find($kontak->id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kontak $kontak)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        

        Kontak::where('id',$kontak->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ]);
        return redirect()->route('kontak.index')->with('success', 'Data kontak berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kontak $kontak)
    {
        
        

        Kontak::where('id',$kontak->id)->delete();
        return redirect()->route('kontak.index')->with('success', 'Data kontak berhasil dihapus.');
    }
}
