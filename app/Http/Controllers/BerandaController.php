<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Artikel, Galeri, Keanggotaan, Kontak, Medsos, Sejarah};
use Illuminate\Support\Facades\Auth;

class BerandaController extends Controller
{
    public function index()
    {
        $sejarah = Sejarah::all();
        $sejarah->map(function($sejarah){
            $words = str_word_count($sejarah->description, 2);
            $sejarah->text = $words[0];
            
        });

        $artikel = Artikel::limit(4)->get();
        $artikel->map(function($artikel){
            $words = str_word_count($artikel->content, 2);
            $artikel->text = $words[0];
        });

        $galery = Galeri::limit(4)->get();

        $galery->map(function($galery){
            $allowedImageExtensions = ['jpg', 'jpeg', 'png', 'gif'];
            $allowedVideoExtensions = ['mp4', 'mov', 'avi'];
            $fileExtension = pathinfo($galery->image_url, PATHINFO_EXTENSION);
            if (in_array($fileExtension, $allowedImageExtensions)) {
                $galery->fileType = 'image';
            } elseif (in_array($fileExtension, $allowedVideoExtensions)) {
                $galery->fileType = 'video';
            } else {
                $galery->fileType = null;
            }

        });

        // dd($galery);

        

        return view('component.navbar',[
            'sejarah' => $sejarah,
            'keanggotaan' => Keanggotaan::limit(6)->get(),
            'artikel' => $artikel,
            'galerry' => $galery,
            'kontak' => Kontak::limit(6)->get(),
            'medsos' => Medsos::all()
        ]);
    }

    public function sejarah($id)
    {
        return view('beranda.sejarah',[
            'data' => Sejarah::find($id),
            'rekomendasi' => Sejarah::inRandomOrder()->limit(6)->get()
        ]);
    }
    public function artikel($id)
    {
        return view('beranda.artikel',[
            'data' => Artikel::find($id),
            'rekomendasi' => Artikel::inRandomOrder()->limit(6)->get()
        ]);
    }
    public function Keanggotaan()
    {
        return view('beranda.keanggotaan',[
            'data' => Keanggotaan::all(),
            // 'rekomendasi' => Keanggotaan::inRandomOrder()->limit(6)->get()
        ]);
    }
    public function login()
    {
        return view('beranda.login');
    }

    public function validasilogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);


        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('user.index');
        }

        return redirect()->back()->with('error', 'Email dan Password anda salah');
    }

    public function logout(Request $request)
    {
        // Session::flush()
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        // return redirect();
        // return 'o';
        return redirect()->route('beranda.home');
    }
}
