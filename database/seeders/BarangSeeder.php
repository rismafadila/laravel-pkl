<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Barang;
use App\Models\Barang_keluar;
use App\Models\Pinjam;
use App\Models\Pengembalian;
class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //membuat sample barang
        // $Barang1 = Barang::create(['nama_barang'=>'komputer','qty'=>5,'tgl_masuk'=>'2021-10-13','jurusan'=>'RPL']);
        // $Barang2 = Barang::create(['nama_barang'=>'pc','qty'=>8,'tgl_masuk'=>'2021-11-20','jurusan'=>'RPL']);
        // $Barang3 = Barang::create(['nama_barang'=>'mouse','qty'=>10,'tgl_masuk'=>'2021-12-15','jurusan'=>'RPL']);

        // //membuat sample barang_keluar
        // $Barang_keluar1 = Barang_keluar::create(['id_barang'=>$Barang1->id,'qty'=>2,'tgl_keluar'=>'2021-11-12']);
        // $Barang_keluar2 = Barang_keluar::create(['id_barang'=>$Barang2->id,'qty'=>4,'tgl_keluar'=>'2021-11-30']);
        // $Barang_keluar3 = Barang_keluar::create(['id_barang'=>$Barang3->id,'qty'=>5,'tgl_keluar'=>'2021-12-29']);

        // //membuat sample peminjaman
        // $pinjam1 = Pinjam::create(['id_barang'=>$Barang1->id,'nama'=>'Risma','telp'=>'085567489356','qty'=>3,'tgl_pinjam'=>'2021-11-12']);
        // $pinjam2 = Pinjam::create(['id_barang'=>$Barang2->id,'nama'=>'Fitra','telp'=>'085567876353','qty'=>2,'tgl_pinjam'=>'2021-12-15']);
        // $pinjam3 = Pinjam::create(['id_barang'=>$Barang3->id,'nama'=>'Rosyida','telp'=>'085563429389','qty'=>5,'tgl_pinjam'=>'2021-10-13']);

        // //membuat sample pengembalian
        // $pengembalian1 = pengembalian::create(['id_pinjem'=>$pinjam1->id,'qty'=>2,'tgl_kembali'=>'2021-11-12']);
        // $pengembalian2 = pengembalian::create(['id_pinjem'=>$pinjam2->id,'qty'=>4,'tgl_kembali'=>'2021-11-30']);
        // $pengembalian3 = pengembalian::create(['id_pinjem'=>$pinjam3->id,'qty'=>5,'tgl_kembali'=>'2021-12-29']);
    }
}
