@extends('app')

@section('content')
    <h1>halaman Edit Data Product</h1> <hr>

    <form action="/product/update/{{ $product->id }}" method="post">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <input type="text" name="kode" value="{{ $product->kode }}" class="form-control" readonly>
            @if($errors->has('kode'))
                <div class="alert alert-danger">
                    {{ $errors->first('kode') }}
                </div>
            @endif
        </div>

        <div class="mb-3">
            <input type="text" name="nama" value="{{ $product->nama }}" class="form-control">
            @if($errors->has('nama'))
                <div class="alert alert-danger">
                    {{ $errors->first('nama') }}
                </div>
            @endif
        </div>

        <div class="mb-3">
            <input type="text" name="harga" value="{{ $product->harga }}" class="form-control">
            @if($errors->has('harga'))
                <div class="alert alert-danger">
                    {{ $errors->first('harga') }}
                </div>
            @endif
        </div>

        <div class="mb-3">
            <input type="text" name="desc" value="{{ $product->desc }}" class="form-control">
            @if($errors->has('desc'))
                <div class="alert alert-danger">
                    {{ $errors->first('desc') }}
                </div>
            @endif
        </div>

        <input class="form-control bg-primary text-white" type="submit" value="Update">
    </form>
@endsection