<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang_keluar extends Model
{
    use HasFactory;
    protected $visible =['id_data','qty','tgl_keluar','kondisi'];
    protected $fillable =['id_data','qty','tgl_keluar','kondisi'];
    public $timestamps = true;

    public function barangmasuk(){

        return $this->belongsTo('App\Models\barang','id_barang');

    }
}
