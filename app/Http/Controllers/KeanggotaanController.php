<?php

namespace App\Http\Controllers;

use App\Models\Keahlian;
use App\Models\Keanggotaan;
use Illuminate\Http\Request;

class KeanggotaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.keanggotaan.index',[
            'keanggotaans' => Keanggotaan::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.keanggotaan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string',
            'nim' => 'required|string',
            'provinsi' => 'required',
            'profesi' => 'required|string',
            'asal_institusi' => 'required|string',
            'narasumber' => 'required|integer',
            'custom_jurnal' => 'required|integer',
            'supervisor' => 'required|integer',
            'photo' => 'required|file|mimes:png,jpg,jpeg,gif|max:10240', // maksimum 10MB
        ]);

        
        $file = $request->file('photo');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->move('image',$fileName);

        
        $keanggotaan = [
            'nama' => $validatedData['nama'],
            'nim' => $validatedData['nim'],
            'provinsi' => $validatedData['provinsi'],
            'profesi' => $validatedData['profesi'],
            'asal_institusi' => $validatedData['asal_institusi'],
            'narasumber' => $validatedData['narasumber'],
            'custom_jurnal' => $validatedData['custom_jurnal'],
            'supervisor' => $validatedData['supervisor'],
            'photo' => $filePath,

        ];
        Keanggotaan::create($keanggotaan);

        return redirect()->route('keanggotaan.index')->with('success', 'Data keanggotaan berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Keanggotaan $keanggotaan)
    {
        return view('admin.keanggotaan.show',[
            'data' => Keanggotaan::find($keanggotaan->id),
            'keahlian' => Keahlian::all(),
            
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Keanggotaan $keanggotaan)
    {
        return view('admin.keanggotaan.edit',[
            'keanggotaan' => Keanggotaan::find($keanggotaan->id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Keanggotaan $keanggotaan)
    {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'provinsi' => 'required',
            'profesi' => 'required',
            'asal_institusi' => 'required',
            'narasumber' => 'required|numeric',
            'custom_jurnal' => 'required|numeric',
            'supervisor' => 'required|numeric',
        ]);

        
        $keanggotaan = Keanggotaan::findOrFail($keanggotaan->id);
        

        
        $keanggotaan->update([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'provinsi' => $request->provinsi,
            'profesi' => $request->profesi,
            'asal_institusi' => $request->asal_institusi,
            'narasumber' => $request->narasumber,
            'custom_jurnal' => $request->custom_jurnal,
            'supervisor' => $request->supervisor,
        ]);

        if ($request->hasFile('photo')) {
            
            $file = $request->file('photo');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->move('image',$fileName);
            $keanggotaan->photo = $filePath;
            $keanggotaan->save();
        }
        return redirect()->route('keanggotaan.index')->with('success', 'Data Keahlian berhasil diedit.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Keanggotaan $keanggotaan)
    {
        $post = Keahlian::findOrFail($keanggotaan->id);
        
        
        $post->delete();
        return redirect()->route('keanggotaan.index')->with('success', 'Data Keahlian berhasil dihapus.');
    }
}
