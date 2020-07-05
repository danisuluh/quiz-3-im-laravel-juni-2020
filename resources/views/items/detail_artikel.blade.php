@extends('layouts.master')

@section('content')
<div class="container text-center">
  <h1>Judul Artikel</h1>
</div>

<div class="container">
  <p>Isi Artikel</p>
</div>

<div class="card-footer text-center">
  <a href="{{url('/artikel')}}">
  <button type="submit" class="btn btn-primary">Kembali ke Daftar Artikel</button>
  </a>
</div>
    
@endsection