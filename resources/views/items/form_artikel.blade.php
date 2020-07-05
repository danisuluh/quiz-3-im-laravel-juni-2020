@extends('layouts.master')

@section('content')
<div class="container text-center">
  <h1>Buat Artikel</h1>
</div>

<div class="container">
  <form action="{{url('/artikel')}}">
    @csrf
    <div class="card-body">
      <div class="form-group">
        <label for="judul">Judul Artikel</label>
        <input type="text" class="form-control" name="judul" id="judul">
      </div>
      <div class="form-group">
        <label for="isi">Isi Artikel</label>
        <textarea type="text" class="form-control" name="isi" id="isi"></textarea>
        <input hidden name="tanggal_dibuat" value="{{\Carbon\Carbon::now()}}">
        <input hidden name="tanggal_diperbarui" value="{{\Carbon\Carbon::now()}}">
      </div>
    </div>
    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
@endsection
