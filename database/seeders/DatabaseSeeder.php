<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Absensi;
use App\Models\Karyawan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'Nama_Lengkap' => 'Kanz Abdillah Hamada',
            'Username' => 'kanzhamada',
            'Password' => bcrypt('456'),
            'Is_Owner' => 0
        ]);

        User::create([
            'Nama_Lengkap' => 'Wildan 14 Pro',
            'Username' => 'wildanzx',
            'Password' => bcrypt('456'),
            'Is_Owner' => 0
        ]);

        User::create([
            'Nama_Lengkap' => 'Bryan Fernando',
            'Username' => 'bfernando',
            'Password' => bcrypt('456'),
            'Is_Owner' => 0
        ]);

        User::create([
            'Nama_Lengkap' => 'Aldo Arista',
            'Username' => 'aawpw',
            'Password' => bcrypt('456'),
            'Is_Owner' => 1
        ]);

        // Karyawan::factory(3)->create();

        Karyawan::create([
            'Id_User' => '1',
            'Alamat' => 'Jl. Jalan',
            'Telepon' => '+1234',
            'NoHP' => '081234567890',
            'Gaji' => 1500000
        ]);

        Karyawan::create([
            'Id_User' => '2',
            'Alamat' => 'Jl. Apa',
            'Telepon' => '+4321',
            'NoHP' => '081234567891',
            'Gaji' => 1600000
        ]);

        Karyawan::create([
            'Id_User' => '3',
            'Alamat' => 'Jl. Sehat',
            'Telepon' => '+2143',
            'NoHP' => '081234567892',
            'Gaji' => 1700000
        ]);

        Absensi::factory(20)->create();
        

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
