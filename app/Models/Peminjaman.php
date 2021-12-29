<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    protected $visible =['nama','id_barang','telp','qty','tgl_pinjam'];
    protected $fillable =['nama','id_barang','telp','qty','tgl_pinjam'];
    public $timestamps = true;

    public function barang(){

        return $this->belongsTo('App\Models\Barang','id_barang');

    }
}
