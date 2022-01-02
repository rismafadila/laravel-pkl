<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
     //memberikan akses data apa saja yang bisa dilihat
     protected $visible =['nama_barang','qty','tgl_masuk'];
     //memberikan akses data apa saja yang bisa diisi
     protected $fillable =['nama_barang','qty','tgl_masuk'];
     //mencatat waktu pembuatan dan update data otomatis
     public $timestamps = true;

     public function barang_keluar(){
        return $this->belongsTo('App\Models\Barang_keluar','id_barang');
}

public function pinjam(){
    return $this->belongsTo('App\Models\pinjam','id_barang');
}
}
