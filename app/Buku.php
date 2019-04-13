<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $fillable = [
    	'nama',
    	'penulis',
    	'genre',
    	'terbit',
    	'penerbit',
    	'stock',
    ];
}
