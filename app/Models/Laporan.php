<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;
    //memberikan akses data apa saja yang bisa dilihat
    protected $visible =['id_data','id_pinjem','id_kembali'];
    //memberikan akses data apa saja yang bisa diisi
    protected $fillable =['id_data','id_pinjem','id_kembali'];
    //mencatat waktu pembuatan dan update data otomatis
    public $timestamps = true;

    public function data_barang(){

        return $this->belongsTo('App\Models\databarang','id_data');

    }

    public function pinjam(){

        return $this->belongsTo('App\Models\pinjam','id_pinjem');

    }

    public function pengembalian(){

        return $this->belongsTo('App\Models\Pengembalian','id_kembali');

    }
}
