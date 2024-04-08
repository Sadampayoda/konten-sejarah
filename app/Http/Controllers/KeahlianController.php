<?php

namespace App\Http\Controllers;

use App\Models\Keahlian;
use Illuminate\Http\Request;

class KeahlianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('admin.keahlian.create',[
            'id' => $request->id,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_keahlian' => 'required|string',
            
        ]);
        
        
        Keahlian::create([
            'keanggotaan_id' => $request->id,
            'nama_keahlian' => $request->nama_keahlian
        ]);

        return redirect()->route('keanggotaan.index')->with('success', 'Data Keahlian berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.keahlian.edit',[
            'data' => Keahlian::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'nama_keahlian' => 'required|string',
            
        ]);
        $post = Keahlian::findOrFail($id);
        
        
        $post->update([
            'nama_keahlian' => $request->nama_keahlian
        ]);

        return redirect()->route('keanggotaan.index')->with('success', 'Data Keahlian berhasil diedit.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Keahlian::findOrFail($id);
        
        
        $post->delete();
        return redirect()->route('keanggotaan.index')->with('success', 'Data Keahlian berhasil dihapus.');

    }
}
