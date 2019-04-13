<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anggota;

class AnggotaController extends Controller
{
    public function index()
    {
    	$anggotas = Anggota::all();

    	return view('anggotas/index', compact('anggotas'));
    }

    public function create()
    {
    	return view('anggotas/create');
    }

    public function store(Request $req)
    {
    	$anggota = new Anggota;
    	$anggota->nama = $req->nama;
    	$anggota->jenis = $req->jenis;
    	$anggota->alamat = $req->alamat;
    	$anggota->agama = $req->agama;
    	$anggota->notelp = $req->notelp;
    	$anggota->save();

    	return redirect('/anggota/index');
    }

    public function edit($id)
    {
    	$anggota = Anggota::find($id);

    	return view('anggotas/edit', compact('anggota'));
    }

    public function update(Request $req)
    {
    	$anggota = Anggota::find($req->id);
    	$anggota->nama = $req->nama;
    	$anggota->jenis = $req->jenis;
    	$anggota->alamat = $req->alamat;
    	$anggota->agama = $req->agama;
    	$anggota->notelp = $req->notelp;
    	$anggota->status = $req->status;
    	$anggota->save();

    	return redirect('/anggota/index');
    }

    public function destroy($id)
    {
    	$anggota = Anggota::find($id);
    	$anggota->delete();

    	return redirect()->back();
    }
}
