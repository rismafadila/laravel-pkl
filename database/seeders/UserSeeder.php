<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $user = new User();
        $user->name = 'Risma Fadila';
        $user->email = 'admin@gmail.com';
        $user->password = Hash::make('12345678');
        $user->save();

        $user = new User();
        $user->name = 'admin';
        $user->email = 'admin1@gmail.com';
        $user->password = Hash::make('22345678');
        $user->save();

        $user = new User();
        $user->name = 'admin';
        $user->email = 'admin2@gmail.com';
        $user->password = Hash::make('32345678');
        $user->save();

        // $user = new User();
        // $user->name = 'admin';
        // $user->email = 'admin3@gmail.com';
        // $user->password = Hash::make('42345678');
        // $user->save();

        // $user = new User();
        // $user->name = 'admin';
        // $user->email = 'admin4@gmail.com';
        // $user->password = Hash::make('52345678');
        // $user->save();

        // $user = new User();
        // $user->name = 'admin';
        // $user->email = 'admin5@gmail.com';
        // $user->password = Hash::make('62345678');
        // $user->save();
        // $admin = Role::create([
        //     'name' => 'admin',
        //     'display_name' => 'User Administrator'
        //     ]);

        //     // $pengguna = Role::create([
        //     // 'name' => 'pengguna',
        //     // 'display_name' => 'User Biasa'
        //     // ]);

        // $user = new User();
        // $user->name = 'Risma Fadila';
        // $user->email = 'admin@gmail.com';
        // $user->password = Hash::make('12345678');
        // $user->save();

        // // $pengunjung = new User();
        // // $pengunjung->name = 'pengunjung';
        // // $pengunjung->email = 'pengunjung@gmail.com';
        // // $pengunjung->password = Hash::make('12345678');
        // // $pengunjung->save();

        // $user->attachRole($admin);
        // $pengunjung->attachRole($pengguna);
    }
}
