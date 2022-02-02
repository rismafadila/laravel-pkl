<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
     //memberikan akses data apa saja yang bisa dilihat
     protected $visible =['nama_barang','qty','tgl_masuk','jurusan'];
     //memberikan akses data apa saja yang bisa diisi
     protected $fillable =['nama_barang','qty','tgl_masuk','jurusan'];
     //mencatat waktu pembuatan dan update data otomatis
     public $timestamps = true;


}
