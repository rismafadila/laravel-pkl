<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;
    protected $visible =['id_pinjam','status'];
    protected $fillable =['id_pinjam','status'];
    public $timestamps = true;
    public function peminjaman(){

        return $this->belongsTo('App\Models\pinjam','id_pinjam');
}
}
