@extends('nav')

@section('title', 'Edit')

@section('content')
  <form action="/profils/{{ $profil['id'] }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="exampleInputEmail1">Nama</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="nama" aria-describedby="emailHelp" value="{{ old('nama') ? old('nama') : $profil['nama'] }}">
      @error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">No Telepon</label>
      <input type="text" class="form-control" name="telp" id="exampleInputPassword1" value="{{ old('telp') ? old('telp') : $profil['telp']  }}">
      @error('telp')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">alamat</label>
      <input type="text" class="form-control" name="alamat" id="exampleInputPassword1" value="{{ old('alamat') ? old('alamat') : $profil['alamat']  }}">
      @error('alamat')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">pendidikan</label>
      <input type="text" class="form-control" name="pendidikan" id="exampleInputPassword1" value="{{ old('pendidikan') ? old('pendidikan') : $profil['pendidikan']  }}">
      @error('pendidikan')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">kerja</label>
      <input type="text" class="form-control" name="kerja" id="exampleInputPassword1" value="{{ old('kerja') ? old('kerja') : $profil['kerja']  }}">
      @error('kerja')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">kontak</label>
      <input type="text" class="form-control" name="kontak" id="exampleInputPassword1" value="{{ old('kontak') ? old('kontak') : $profil['kontak']  }}">
      @error('kontak')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">lahir</label>
      <input type="text" class="form-control" name="lahir" id="exampleInputPassword1" value="{{ old('lahir') ? old('lahir') : $profil['lahir']  }}">
      @error('lahir')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>


@endsection
