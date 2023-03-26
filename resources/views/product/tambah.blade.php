@extends('app')

@section('content')
    <h1>halaman Tambah Data</h1> <hr>

    <div class="container">
        <form action="/product/store" method="post">
            @csrf
    
            <div class="mb-3">
                <input type="text" name="kode" placeholder="kode...." class="form-control">
                @if($errors->has('kode'))
                    <div class="alert alert-danger">
                        {{ $errors->first('kode') }}
                    </div>
                @endif
            </div>
    
            <div class="mb-3">
                <input type="text" name="nama" placeholder="nama...." class="form-control">
                @if($errors->has('nama'))
                    <div class="alert alert-danger">
                        {{ $errors->first('nama') }}
                    </div>
                @endif
            </div>
    
            <div class="mb-3">
                <input type="text" name="harga" placeholder="harga...." class="form-control">
                @if($errors->has('harga'))
                    <div class="alert alert-danger">
                        {{ $errors->first('harga') }}
                    </div>
                @endif
            </div>
    
            <div class="mb-3">
                <input type="text" name="desc" placeholder="desc...." class="form-control">
                @if($errors->has('desc'))
                    <div class="alert alert-danger">
                        {{ $errors->first('desc') }}
                    </div>
                @endif
            </div>
    
            <input class="form-control bg-primary" type="submit" value="Save">
        </form>
    </div>
   
@endsection