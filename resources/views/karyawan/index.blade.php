@extends('app')

@section('content')

    <h1>Halaman Karyawan</h1> <hr>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <strong>{{ $message }}</strong>
        </div>        
    @endif

    <div class="container">

        <div class="btn d-flex gap-3">
            <button type="button" class="btn btn-primary float-start mb-3">
                <a href="/karyawan/tambah" class="text-white text-decoration-none">Tambah Data</a>
            </button>
            <button type="button" class="btn btn-danger float-start mb-3">
                <a href="/karyawan/trash" class="text-white text-decoration-none">Tong Sampah</a>
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
                                <a class="text-black text-decoration-none" href="/karyawan/edit/{{ $k->id }}">Edit</a>
                            </button>
                             
                             <button type="button" class="btn btn-sm btn-danger">
                                <a class="text-white text-decoration-none" href="/karyawan/hapus/{{ $k->id }}">Hapus</a>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        @if($karyawan->hasPages())
        <div class="card-footer">
            {{ $karyawan->links() }}
        </div>
        @endif
    </div>
  

@endsection