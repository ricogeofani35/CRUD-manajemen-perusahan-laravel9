@extends('app')

@section('content')

    <h1>Halaman Input Data Karyawan</h1> <hr>
    <div class="container">
        <form action="/karyawan/store" method="post">
            @csrf

            <div class="mb-3">
              <label class="form-label">Nama</label>
              <input type="text" name="nama" class="form-control" >
            </div>
            <div class="mb-3">
              <label class="form-label">Email</label>
              <input type="email" name="email" class="form-control" >
            </div>
            <div class="mb-3">
              <label class="form-label">Alamat</label>
              <input  type="text" name="alamat" class="form-control" >
            </div>

            <button class="form-control bg-primary text-white" type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>

@endsection