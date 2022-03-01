<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Alert;

class Barang extends Model
{
    use HasFactory;
     //memberikan akses data apa saja yang bisa dilihat
     protected $visible =['nama_barang','qty','tgl_masuk','jurusan'];
     //memberikan akses data apa saja yang bisa diisi
     protected $fillable =['nama_barang','qty','tgl_masuk','jurusan'];
     //mencatat waktu pembuatan dan update data otomatis
     public $timestamps = true;

     public function barangmasuk(){

        return $this->belongsTo('App\Models\Barang','id_barang');

    }

    // public static function boot()
    // {
    //     parent::boot();
    //     self::deleting(function ($barangmasuk) {
    //         if ($barangmasuk->barang_keluar->count() > 0) {
    //             Alert::error('Failed', 'Data not deleted');
    //             return false;
    //         }
    //     });
    // }
}
