<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class databarang extends Model
{
    use HasFactory;
    protected $visible =['nama_barang','stok','jurusan'];
    protected $fillable =['nama_barang','stok','jurusan'];
    public $timestamps = true;

    public function barang(){

        return $this->belongsTo('App\Models\Barang','id_barang');

    }
    public function barang_keluar(){
        return $this->belongsTo('App\Models\Barang_keluar','id_data');
}

public function pinjam(){
    return $this->belongsTo('App\Models\pinjam','id_data');
}
}
