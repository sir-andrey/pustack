<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
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
