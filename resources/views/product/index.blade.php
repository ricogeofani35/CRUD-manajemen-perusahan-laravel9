@extends('app')

@section('content')

<h1>Halaman Data Product</h1> <hr>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <strong>{{ $message }}</strong>
    </div>
@endif

<div class="container">
    <div class="btn d-flex justify-content-between">
        <button type="button" class="btn btn-primary float-start mb-3">
            <a href="/product/tambah" class="text-white text-decoration-none">Tambah Data</a>
        </button>
        <form action="/product/cari" method="get">
            <input type="text" name="cari" placeholder="Cari Product....." class="px-5 py-1 border border-primary">
            <input type="submit" value="Cari" class="px-3 py-1 bg-primary text-white rounded border border-primary">
        </form>
    </div>
   
    <table class="table table-striped">
        <thead>
            <tr class="bg-warning">
                <th>Kode</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Desc</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($product as $p)
                <tr>
                    <td>{{ $p->kode }}</td>
                    <td>{{ $p->nama }}</td>
                    <td>{{ $p->harga }}</td>
                    <td>{{ $p->desc }}</td>
                    <td>
                        <button type="button" class="btn btn-sm btn-warning me-2">
                            <a class="text-black text-decoration-none" href="/product/edit/{{ $p->id }}">Edit</a>
                        </button>
                         
                         <button type="button" class="btn btn-sm btn-danger">
                            <a class="text-white text-decoration-none" href="/product/hapus/{{ $p->id }}">Hapus</a>
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    @if($product->hasPages())
    <div class="card-footer">
        {{ $product->links() }}
    </div>
    @endif
    
</div>


@endsection