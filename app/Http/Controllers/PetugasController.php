<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Petugas;

class PetugasController extends Controller
{
    public function index()
    {
    	$petugas = petugas::all();

    	return view('petugas/index', compact('petugas'));
    }

    public function halcreate()
    {
    	return view('petugas/create');
    }

    public function create(Request $req)
    {
    	$petugas = new petugas;
    	$petugas->nama = $req->nama;
    	$petugas->jenis = $req->jenis;
    	$petugas->alamat = $req->alamat;
    	$petugas->agama = $req->agama;
    	$petugas->notelp = $req->notelp;
    	$petugas->status = $req->status;
    	$petugas->save();

    	return redirect('/petugas/index');
    }

    public function haledit($id)
    {
    	$petugas = petugas::find($id);

    	return view('petugas/edit', compact('petugas'));
    }

    public function edit(Request $req)
    {
    	$petugas = petugas::find($req->id);
    	$petugas->nama = $req->nama;
    	$petugas->jenis = $req->jenis;
    	$petugas->alamat = $req->alamat;
    	$petugas->agama = $req->agama;
    	$petugas->notelp = $req->notelp;
    	$petugas->status = $req->status;
    	$petugas->save();

    	return redirect('/petugas/index');
    }

    public function delete($id)
    {
    	$petugas = petugas::find($id);
    	$petugas->delete();

    	return redirect()->back();
    }
}
