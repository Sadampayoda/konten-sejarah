<?php

namespace App\Http\Controllers;

use App\Models\Medsos;
use Illuminate\Http\Request;

class MedsosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.medsos.index',[
            'data' => Medsos::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.medsos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'platform' => 'required|string',
            'username' => 'required|string',
        ]);

        

        Medsos::create([
            'platform' => $request->platform,
            'username' => $request->username,
        ]);
        return redirect()->route('medsos.index')->with('success', 'Data Medsos berhasil ditambah.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Medsos $medsos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        // dd($request->id);
        $data = Medsos::find($request->id);
        // dd($data);
        return view('admin.medsos.edit',[
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'platform' => 'required|string',
            'username' => 'required|string',
        ]);

        

        Medsos::where('id',$request->id)->update([
            'platform' => $request->platform,
            'username' => $request->username,
        ]);
        return redirect()->route('medsos.index')->with('success', 'Data Medsos berhasil diedit.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        // dd($request->id);
        Medsos::where('id',$request->id)->delete();
        return redirect()->route('medsos.index')->with('success', 'Data Medsos berhasil dihapus.');

    }
}
