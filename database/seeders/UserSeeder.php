<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Taruna;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'role_id' => '1',
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Syaibani Al Hakim',
            'email' => 'syaibani4@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'role_id' => '2',
            'remember_token' => Str::random(10),
        ]);

        Taruna::create([
            'user_id'=>'2',
            'nama_lengkap'=>'Muhammad Syaibani Al Hakim',
            'npm' => '2019101638',
            'kelas_id' => '4',
            'unit_id' => '3',
            'nomor_kamar' => 'B506',
            'jenis_kelamin' => 'laki-laki'
        ]);

        User::create([
            'name' => 'Kurniawan Dwi Wicaksono',
            'email' => 'kurniawan.dwi@student.poltekssn.ac.id',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'role_id' => '2',
            'remember_token' => Str::random(10),
        ]);

        Taruna::create([
            'user_id'=>'3',
            'nama_lengkap'=>'Kurniawan Dwi Wicaksono',
            'npm' => '2120101719',
            'kelas_id' => '8',
            'unit_id' => '6',
            'nomor_kamar' => 'B209',
            'jenis_kelamin' => 'laki-laki'
        ]);

        User::create([
            'name' => 'Neshya F.B Sibarani',
            'email' => 'neshya.sibarani@student.poltekssn.ac.id',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'role_id' => '2',
            'remember_token' => Str::random(10),
        ]);

        Taruna::create([
            'user_id'=>'4',
            'nama_lengkap'=>'Neshya F.B Sibarani',
            'npm' => '2120101735',
            'kelas_id' => '7',
            'unit_id' => '8',
            'nomor_kamar' => 'E311',
            'jenis_kelamin' => 'perempuan'
        ]);
        User::create([
            'name' => 'Ditya Ardiyansyah',
            'email' => 'ditya.ardiansyah@student.poltekssn.ac.id',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'role_id' => '2',
            'remember_token' => Str::random(10),
        ]);

        Taruna::create([
            'user_id'=>'5',
            'nama_lengkap'=>'Ditya Ardiyansyah',
            'npm' => '2221101784',
            'kelas_id' => '13',
            'unit_id' => '9',
            'nomor_kamar' => 'C208',
            'jenis_kelamin' => 'laki-laki'
        ]);
        User::create([
            'name' => 'Dery Prasetya',
            'email' => 'dery.prasetya@student.poltekssn.ac.id',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'role_id' => '2',
            'remember_token' => Str::random(10),
        ]);

        Taruna::create([
            'user_id'=>'6',
            'nama_lengkap'=>'Dery Prasetya',
            'npm' => '2221101781',
            'kelas_id' => '14',
            'unit_id' => '10',
            'nomor_kamar' => 'A504',
            'jenis_kelamin' => 'laki-laki'
        ]);
        User::create([
            'name' => 'Faris Abyaz Nabeel',
            'email' => 'fariz.abyaz@student.poltekssn.ac.id',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'role_id' => '2',
            'remember_token' => Str::random(10),
        ]);

        Taruna::create([
            'user_id'=>'7',
            'nama_lengkap'=>'Faris Abyaz Nabeel',
            'npm' => '2221101787',
            'kelas_id' => '14',
            'unit_id' => '11',
            'nomor_kamar' => 'B318',
            'jenis_kelamin' => 'laki-laki'
        ]);
        User::create([
            'name' => 'Adellia Fatma',
            'email' => 'adellia.fatma@student.poltekssn.ac.id',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'role_id' => '2',
            'remember_token' => Str::random(10),
        ]);

        Taruna::create([
            'user_id'=>'8',
            'nama_lengkap'=>'Adellia Fatma',
            'npm' => '2221101767',
            'kelas_id' => '13',
            'unit_id' => '12',
            'nomor_kamar' => 'E314',
            'jenis_kelamin' => 'perempuan'
        ]);
        User::create([
            'name' => 'Rani Nataline S.',
            'email' => 'rani.nataline@student.poltekssn.ac.id',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'role_id' => '2',
            'remember_token' => Str::random(10),
        ]);

        Taruna::create([
            'user_id'=>'9',
            'nama_lengkap'=>'Rani Nataline S.',
            'npm' => '2221101844',
            'kelas_id' => '15',
            'unit_id' => '12',
            'nomor_kamar' => 'F106',
            'jenis_kelamin' => 'perempuan'
        ]);
        // User::factory(5)->create();
    }
}
