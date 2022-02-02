<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pinjam extends Model
{
    use HasFactory;
    protected $visible =['id_data','nama','telp','qty','tgl_pinjam'];
    protected $fillable =['id_data','nama','telp','qty','tgl_pinjam'];
    public $timestamps = true;

    public function data_barang(){

        return $this->belongsTo('App\Models\Databarang','id_data');

    }
    public function pengembalian(){

        return $this->belongsTo('App\Models\Pengembalian','id_pinjem');
}
}
