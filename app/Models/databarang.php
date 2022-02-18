<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Alert;
class databarang extends Model
{
    use HasFactory;
    protected $visible =['id_barang','jurusan'];
    protected $fillable =['id_barang','jurusan'];
    public $timestamps = true;

    public function barangmasuk(){

        return $this->belongsTo('App\Models\Barang','id_barang');

    }
//     public function barang_keluar(){
//         return $this->belongsTo('App\Models\Barang_keluar','id_data');
// }

public function pinjam(){
    return $this->belongsTo('App\Models\pinjam','id_data');
}

public function laporan(){
    return $this->belongsTo('App\Models\Laporan','id_data');
}

public function barang_keluar()
    {
        return $this->hasMany('App\Models\Barang_Keluar', 'id_data');
    }

    public static function boot()
    {
        parent::boot();
        self::deleting(function ($data_barang) {
            if ($data_barang->barang_keluar->count() > 0) {
                Alert::error('Failed', 'Data not deleted');
                return false;
            }
        });
    }
}
