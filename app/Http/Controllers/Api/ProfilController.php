<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Profil;
use App\Http\Controllers\Controller;

class ProfilController extends Controller
{
    public function index()
    {
        $profils = Profil::all();

        return response()->json([
            'success' => true,
            'message' => 'profil',
            'data' => $profils
        ], 200);
    }
    
    public function edit($id)
    {
        $profil = Profil::where('id', $id)->first();
       
        return view('edit', ['profil' => $profil]);
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