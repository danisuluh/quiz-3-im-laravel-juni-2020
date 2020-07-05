@extends('layouts.master')

@section('content')
<div class="container text-center">
  <h1>Buat Artikel</h1>
</div>

<div class="container">
  <form action="{{url('/artikel')}}" method="POST">
    @csrf
    <div class="card-body">
      <div class="form-group">
        <label for="judul">Judul Artikel</label>
        <input type="text" class="form-control" name="judul" id="judul">
      </div>
      <?php
      $slug = '';
      if(isset($_POST["submit"])){
      $slug = preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($_POST["judul"])));
      }
      ?>

      <div class="form-group">
        <label for="isi">Isi Artikel</label>
        <textarea type="text" class="form-control" name="isi" id="isi"></textarea>
        <input hidden name="slug" value="tesslug">
        <input hidden name="tanggal_dibuat" value="{{\Carbon\Carbon::now()}}">
        <input hidden name="tanggal_diperbarui" value="{{\Carbon\Carbon::now()}}">
        <input hidden name="tag" value="initag">
      </div>
    </div>
    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
@endsection
