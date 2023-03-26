@extends('app')

@section('content')

    <h1>Halaman Trash Karyawan</h1> <hr>

    <div class="container">

        <div class="btn d-flex gap-3">
            <button type="button" class="btn btn-primary float-start mb-3">
                <a href="/karyawan/kembalikan_semua" class="text-white text-decoration-none">Kembalikan Semua</a>
            </button>
            <button type="button" class="btn btn-danger float-start mb-3">
                <a href="/karyawan/hapus_semua" class="text-white text-decoration-none">Hapus Permanen Semua</a>
            </button>
        </div>
      
    
        <table class="table table-striped">
            <thead>
                <tr class="bg-warning">
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($karyawan as $k)
                    <tr>
                        <td>{{ $k->nama }}</td>
                        <td>{{ $k->email }}</td>
                        <td>{{ $k->alamat }}</td>
                        <td>
                            <button type="button" class="btn btn-sm btn-warning me-2">
                                <a class="text-black text-decoration-none" href="/karyawan/kembalikan/{{ $k->id }}">Kembalikan</a>
                            </button>
                             
                             <button type="button" class="btn btn-sm btn-danger">
                                <a class="text-white text-decoration-none" href="/karyawan/hapus_permanen/{{ $k->id }}">Hapus Permanen</a>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
  

@endsection