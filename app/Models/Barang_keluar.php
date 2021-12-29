<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang_keluar extends Model
{
    use HasFactory;
    protected $visible =['id_barang','qty','tgl_keluar'];
    protected $fillable =['id_barang','qty','tgl_keluar'];
    public $timestamps = true;

    public function barang(){

        return $this->belongsTo('App\Models\Barang','id_barang');

    }
}
