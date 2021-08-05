@extends('nav')

@section('title', 'Profil')

@section('content')

@foreach ($profils as $profil)

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <a href="/profils/{{ $profil['id'] }}"class="card-title">{{ $profil['nama'] }}</a>
    <p class="card-text">{{ $profil['alamat'] }}.</p>
    <h6 class="card-subtitle mb-2 text-muted">{{ $profil['telp'] }}</h6>
    <h6 class="card-subtitle mb-2 text-muted">{{ $profil['lahir'] }}</h6>
    <h6 class="card-subtitle mb-2 text-muted">{{ $profil['pendidikan'] }}</h6>
    <h6 class="card-subtitle mb-2 text-muted">{{ $profil['kerja'] }}</h6>
    <h6 class="card-subtitle mb-2 text-muted">{{ $profil['kontak'] }}</h6>

    <a href="/profils/{{ $profil['id'] }}/edit" class="card-link btn-warning">Edit Data</a>
    <form action="/profils/{{ $profil['id']}}" method="POST">
    @csrf
    </form>
  </div>
</div>
  
@endforeach

@endsection