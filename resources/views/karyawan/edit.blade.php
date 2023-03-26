@extends('app')

@section('content')

    <h1>halaman Edit Data Karyawan</h1> <hr>

    <div class="container">
    @foreach ($karyawan as $k)
        <form action="/karyawan/update" method="post">
            @csrf

            <input type="hidden" name="id" value="{{ $k->id }}">
            <div class="mb-3">
              <label class="form-label">Nama</label>
              <input type="text" name="nama" class="form-control"  value="{{ $k->nama }}">
            </div>
            <div class="mb-3">
              <label class="form-label">Email</label>
              <input type="email" name="email" class="form-control"  value="{{ $k->email }}">
            </div>
            <div class="mb-3">
              <label class="form-label">Alamat</label>
              <input  type="text" name="alamat" class="form-control"  value="{{ $k->alamat }}">
            </div>

            <button class="form-control bg-primary text-white" type="submit" class="btn btn-primary">Update</button>
        </form>
    @endforeach
    </div>
    
@endsection