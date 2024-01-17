<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed data for admin
        DB::table('akun')->insert([
            'username' => 'admin',
            'password' => Hash::make('123'),
            'role' => 'admin',
        ]);

        // Seed data for pelanggan
        DB::table('akun')->insert([
            'username' => 'pelanggan1',
            'password' => Hash::make('123'),
            'role' => 'pelanggan',
        ]);

        // Seed data for pemilik mobil
        DB::table('akun')->insert([
            'username' => 'pemilikmobil1',
            'password' => Hash::make('123'),
            'role' => 'pemilik_mobil',
        ]);

        // Add more seed data as needed
    }
}
