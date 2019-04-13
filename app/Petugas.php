<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    protected $fillable = [
    	'nama',
    	'jenis',
    	'alamat',
    	'agama',
    	'notelp',
    	'status',
    ];
}
