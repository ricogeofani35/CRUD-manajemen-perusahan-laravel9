<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Session;

class KaryawanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // eleqount
        $karyawan = Karyawan::paginate(10);

        // $karyawan = DB::table('karyawans')->paginate(10); //query builder

        return view('karyawan.index', ['karyawan' => $karyawan]);
    }

    public function tambah()
    {
        return view('karyawan.tambah');
    }

    public function store(Request $request)
    {
        DB::table('karyawans')->insert([
            'nama'      => $request->nama,
            'email'     => $request->email,
            'alamat'   => $request->alamat
        ]);

        Session()->flash('success', 'Data Berhasil Ditambahkan');

        return redirect('/karyawan');
    }

    public function edit($id)
    {
        $karyawan = DB::table('karyawans')->where('id', $id)->get();

        return view('karyawan.edit', ['karyawan' => $karyawan]);
    }

    public function update(Request $request)
    {
        DB::table('karyawans')->where('id', $request->id)->update([
            'nama'      => $request->nama,
            'email'     => $request->email,
            'alamat'   => $request->alamat
        ]);

        Session()->flash('success', 'Data Berhasil Diupdate');

        return redirect('/karyawan');
    }

    public function hapus($id)
    {
        // eloqount
        $karyawan = Karyawan::find($id);
        $karyawan->delete();

        // DB::table('karyawans')->where('id', $id)->delete(); //query builder

        return redirect('/karyawan');
    }

    // soft delete
    public function trash()
    {
        $karyawan = Karyawan::onlyTrashed()->get();

        return view('karyawan.karyawan_trash', ['karyawan' => $karyawan]);
    }

    public function kembalikan($id)
    {
        $karyawan = Karyawan::onlyTrashed()->where('id',$id);
        $karyawan->restore();

        return redirect('/karyawan/trash');
    }

    public function kembalikan_semua()
    {
        $karyawan = Karyawan::onlyTrashed();
        $karyawan->restore();

        return redirect('/karyawan/trash');
    }

    public function hapus_permanen($id)
    {
        $karyawan = Karyawan::onlyTrashed()->where('id',$id);
        $karyawan->forceDelete();

        return redirect('/karyawan/trash');
    }

    public function hapus_semua()
    {
        $karyawan = Karyawan::onlyTrashed();
        $karyawan->forceDelete();

        return redirect('/karyawan/trash');
    }



}
