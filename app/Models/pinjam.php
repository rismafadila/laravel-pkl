<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pinjam extends Model
{
    use HasFactory;
    protected $visible =['id_barang','nama','telp','qty','tgl_pinjam'];
    protected $fillable =['id_barang','nama','telp','qty','tgl_pinjam'];
    public $timestamps = true;

    public function barang(){

        return $this->belongsTo('App\Models\Barang','id_barang');

    }
    public function pengembalian(){

        return $this->belongsTo('App\Models\Pengembalian','id_pinjem');
}
}
