<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Taruna;

class TarunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Taruna::create([
            'user_id'=>'2',
            'nama_lengkap'=>'Muhammad Syaibani Al Hakim',
            'npm' => '2019101638',
            'kelas_id' => '4',
            'unit_id' => '3',
            'nomor_kamar' => 'B506',
            'jenis_kelamin' => 'laki-laki'
        ]);
    }
}
