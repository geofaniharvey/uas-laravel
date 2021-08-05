<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil;

class ProfilController extends Controller
{
    public function index()
    {
        $profils = Profil::all();

        return view('index', compact('profils'));
    }
    
    public function store(Request $request)
    {
        
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'telp' => 'required|numeric',
            'pendidikan' => 'required',
            'kerja' => 'required',
            'kontak' => 'required',
            'lahir' => 'required'
            
        ]);

        $profils = new Profil;

        $profils->nama = $request->nama;
        $profils->alamat = $request->alamat;
        $profils->telp = $request->telp;
        $profils->pendidikan = $request->pendidikan;
        $profils->kerja = $request->kerja;
        $profils->kontak = $request->kontak;
        $profils->lahir = $request->lahir;


        $profils->save();

        return redirect('/');
    }

    public function edit($id)
    {
        $profil = Profil::where('id', $id)->first();
       
        return view('profils.edit', ['profil' => $profil]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'telp' => 'required|numeric',
            'pendidikan' => 'required',
            'kerja' => 'required',
            'kontak' => 'required',
            'lahir' => 'required' 
        ]);

        Profil::find($id)->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'telp' => $request->telp,
            'pendidikan' => $request->pendidikan,
            'kerja' => $request->kerja,
            'kontak' => $request->kontak,
            'lahir' => $request->lahir
        ]);

        return redirect('/');
    }
}
