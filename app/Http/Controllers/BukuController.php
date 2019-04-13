<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;

class BukuController extends Controller
{
    public function index()
    {
    	$bukus = Buku::all();

    	return view('bukus/index', compact('bukus'));
    }

    public function halcreate()
    {
    	return view('bukus/create');
    }

    public function create(Request $req)
    {
    	$buku = new Buku;
    	$buku->nama = $req->nama;
    	$buku->penulis = $req->penulis;
    	$buku->genre = $req->genre;
    	$buku->terbit = $req->terbit;
    	$buku->penerbit = $req->penerbit;
    	$buku->stock = $req->stock;
    	$buku->save();

    	return redirect('/buku/index');
    }

    public function haledit($id)
    {
    	$buku = Buku::find($id);

    	return view('bukus/edit', compact('buku'));
    }

    public function edit(Request $req)
    {
    	$buku = Buku::find($req->id);
    	$buku->nama = $req->nama;
    	$buku->penulis = $req->penulis;
    	$buku->genre = $req->genre;
    	$buku->terbit = $req->terbit;
    	$buku->penerbit = $req->penerbit;
    	$buku->stock = $req->stock;
    	$buku->save();

    	return redirect('/buku/index');
    }

    public function delete($id)
    {
    	$buku = Buku::find($id);
    	$buku->delete();

    	return redirect()->back();
    }
}
