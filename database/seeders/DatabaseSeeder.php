<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('users')->insert([
            'name' => 'Administrasi',
            'id_petugas' => mt_rand(1000000000,9999999999),
            'email' => 'imam@gmail.com',
            'password' => Hash::make('admin'),
            'level' => 'administrasi',
        ]);
        DB::table('users')->insert([
            'name' => 'Petugas',
            'id_petugas' => mt_rand(1000000000,9999999999),
            'email' => 'petugas@gmail.com',
            'password' => Hash::make('petugas'),
            'level' => 'petugas',
        ]);
        DB::table('users')->insert([
            'name' => 'Masyarakat',
            'email' => 'mas@gmail.com',
            'password' => Hash::make('.'),
            'level' => 'masyarakat',
            'telp' => '085876221566 '
        ]);
    }
}
