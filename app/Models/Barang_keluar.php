<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang_keluar extends Model
{
    use HasFactory;
    protected $visible =['id_data','qty','tgl_keluar'];
    protected $fillable =['id_data','qty','tgl_keluar'];
    public $timestamps = true;

    public function data_barang(){

        return $this->belongsTo('App\Models\databarang','id_data');

    }
}
