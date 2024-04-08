<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Galeri::all();


        $data->map(function ($data) {
            $words = explode(' ', $data->description);
            $data->text = implode(' ', array_slice($words, 0, 5));
        });
        // dd($data);
        return view('admin.galeri.index', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.galeri.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string|max:100',
            'image' => 'required|file|mimes:png,mp4,jpg,jpeg,gif|max:10240',
        ]);

        $file = $request->file('image');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->move('image/galery', $fileName);

        Galeri::create([
            'image_url' => $filePath,
            'title' => $request->title,
            'description' => $request->description
        ]);
        return redirect()->route('galeri.index')->with('success', 'Data Galeri berhasil ditambah.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Galeri $galeri)
    {
        $data = Galeri::find($galeri->id);

        
        $allowedImageExtensions = ['jpg', 'jpeg', 'png', 'gif'];
        $allowedVideoExtensions = ['mp4', 'mov', 'avi'];
        $fileExtension = pathinfo($data->image_url, PATHINFO_EXTENSION);
        if (in_array($fileExtension, $allowedImageExtensions)) {
            $data->fileType = 'image';
        } elseif (in_array($fileExtension, $allowedVideoExtensions)) {
            $data->fileType = 'video';
        } else {
            $data->fileType = null;
        }

        // dd($data);

        return view('admin.galeri.show', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Galeri $galeri)
    {
        $data = Galeri::find($galeri->id);

        
        $allowedImageExtensions = ['jpg', 'jpeg', 'png', 'gif'];
        $allowedVideoExtensions = ['mp4', 'mov', 'avi'];
        $fileExtension = pathinfo($data->image_url, PATHINFO_EXTENSION);
        if (in_array($fileExtension, $allowedImageExtensions)) {
            $data->fileType = 'image';
        } elseif (in_array($fileExtension, $allowedVideoExtensions)) {
            $data->fileType = 'video';
        } else {
            $data->fileType = null;
        }
        // dd($data);
        return view('admin.galeri.edit', [
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Galeri $galeri)
    {
        if ($request->hasFile('image')) {
            $validatedData = $request->validate([
                'title' => 'required|string',
                'description' => 'required|string|max:100',
                'image' => 'required|file|mimes:png,mp4,jpg,jpeg,gif|max:10240',
            ]);

            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->move('image/galery', $fileName);

            Galeri::where('id', $galeri->id)->update([
                'image_url' => $filePath,
                'title' => $request->title,
                'description' => $request->description
            ]);
        } else {
            $validatedData = $request->validate([
                'title' => 'required|string',
                'description' => 'required|string|max:100',
            ]);
            Galeri::where('id', $galeri->id)->update([
                'title' => $request->title,
                'description' => $request->description
            ]);
        }
        return redirect()->route('galeri.index')->with('success', 'Data Galeri berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Galeri $galeri)
    {
        Galeri::where('id', $galeri->id)->delete();
        return redirect()->route('galeri.index')->with('success', 'Data Galeri berhasil dihapus.');
    }
}
