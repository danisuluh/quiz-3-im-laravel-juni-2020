@extends('layouts.master')

@section('content')
<div class="container">
  <h1 class="text-center">Daftar Artikel</h1>
</div>

<div class="container">
  <div class="card shadow mb-4">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No.</th>
              <th>Judul Artikel</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>No.</th>
              <th>Judul Artikel</th>
              <th>Aksi</th>
            </tr>
          </tfoot>
          <tbody>
            <tr>
              <td>1</td>
              <td>Judul Artikel sdgfnka</td>
              <td>Edinburgh</td>
            </tr>
            
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
    
<div class="card-footer">
  <a href="{{url('/artikel/create')}}">
    <button type="submit" class="btn btn-primary">Buat Artikel</button>
  </a>
</div>
@endsection

@push('scripts')
<script src="{{asset('sbadmin2/js/swal.min.js')}}"></script>
<script>
  Swal.fire({
      title: 'Berhasil!',
      text: 'Memasangkan script sweet alert',
      icon: 'success',
      confirmButtonText: 'Cool'
  })
</script>
@endpush