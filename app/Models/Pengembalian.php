<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengembalian extends Model
{
    use HasFactory;
    protected $visible =['id_pinjem','id_data','qty','tgl_kembali'];
    protected $fillable =['id_pinjem','id_data','qty','tgl_kembali'];
    public $timestamps = true;

    public function pinjam(){

        return $this->belongsTo('App\Models\Pinjam','id_pinjem');

    }
    public function data_barang()
    {

        return $this->belongsTo('App\Models\databarang', 'id_data');

    }
}
