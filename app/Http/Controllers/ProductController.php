<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() 
    {
        $product = Product::paginate(10);

        return view('product.index', ['product' => $product]);
    }

    public function cari(Request $request) 
    {
        $cari = $request->cari;

        $product = Product::where('nama','like','%'.$cari.'%')
                            ->orWhere('kode','like','%'.$cari.'%')
                            ->paginate();

        return view('product.index', ['product' => $product]);
    }

    public function tambah()
    {
        return view('product.tambah');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'kode' => 'required',
            'nama' => 'required',
            'harga' => 'required',
            'desc' => 'required',
        ]);

        Product::create([
            'kode'  => $request->kode,
            'nama'  => $request->nama,
            'harga'  => $request->harga,
            'desc'  => $request->desc,
        ]);

        Session()->flash('success', 'Data Berhasil Ditambahkan');

        return redirect('/product');
    }

    public function edit($id)
    {
        $product = Product::find($id);

        return view('product.edit', ['product' => $product]);
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'harga' => 'required',
            'desc' => 'required',
        ]);

        $product = Product::find($id);

        $product->kode = $request->kode;
        $product->nama = $request->nama;
        $product->harga = $request->harga;
        $product->desc = $request->desc;

        $product->save();

        Session()->flash('success', 'Data Berhasil Diupdate');
        
        return redirect('/product');
    }

    public function hapus($id) 
    {
        $product = Product::find($id);
        $product->delete();

        return redirect('/product');
    }
}
