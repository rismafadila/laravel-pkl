<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengembalian extends Model
{
    use HasFactory;
    protected $visible =['id_pinjam','qty','tgl_kembali'];
    protected $fillable =['id_pinjam','qty','tgl_kembali'];
    public $timestamps = true;

    public function peminjaman(){

        return $this->belongsTo('App\Models\Peminjaman','id_pinjam');

    }
}
