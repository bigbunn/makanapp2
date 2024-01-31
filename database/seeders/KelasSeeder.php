<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kelas;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kelas::create([
            'nama_kelas'=>'4 Rekayasa Keamanan Siber Blue'
        ]);
        Kelas::create([
            'nama_kelas'=>'4 Rekayasa Keamanan Siber Red'
        ]);
        Kelas::create([
            'nama_kelas'=>'4 Rekayasa Perangkat Keras Kriptografi'
        ]);
        Kelas::create([
            'nama_kelas'=>'4 Rekayasa Perangkat Lunak Kripto'
        ]);
        Kelas::create([
            'nama_kelas'=>'4 Rekayasa Sistem Kriptografi'
        ]);
        Kelas::create([
            'nama_kelas'=>'3 Rekayasa Keamanan Siber Echo'
        ]);
        Kelas::create([
            'nama_kelas'=>'3 Rekayasa Keamanan Siber Route'
        ]);
        Kelas::create([
            'nama_kelas'=>'3 Rekayasa Keamanan Siber Trace'
        ]);
        Kelas::create([
            'nama_kelas'=>'3 Rekayasa Perangkat Keras Kriptografi'
        ]);
        Kelas::create([
            'nama_kelas'=>'3 Rekayasa Perangkat Lunak Kripto'
        ]);
        Kelas::create([
            'nama_kelas'=>'3 Rekayasa Sistem Kriptografi'
        ]);
        Kelas::create([
            'nama_kelas'=>'2 Rekayasa Keamanan Siber A'
        ]);
        Kelas::create([
            'nama_kelas'=>'2 Rekayasa Keamanan Siber B'
        ]);
        Kelas::create([
            'nama_kelas'=>'2 Rekayasa Perangkat Keras Kriptografi'
        ]);
        Kelas::create([
            'nama_kelas'=>'2 Rekayasa Perangkat Lunak Kripto'
        ]);
        Kelas::create([
            'nama_kelas'=>'2 Rekayasa Sistem Kriptografi A'
        ]);
        Kelas::create([
            'nama_kelas'=>'2 Rekayasa Sistem Kriptografi B'
        ]);
        Kelas::create([
            'nama_kelas'=>'1 Rekayasa Keamanan Siber A'
        ]);
        Kelas::create([
            'nama_kelas'=>'1 Rekayasa Keamanan Siber B'
        ]);
        Kelas::create([
            'nama_kelas'=>'1 Rekayasa Keamanan Siber C'
        ]);
        Kelas::create([
            'nama_kelas'=>'1 Rekayasa Perangkat Keras Kriptografi'
        ]);
        Kelas::create([
            'nama_kelas'=>'1 Rekayasa Perangkat Lunak Kripto'
        ]);
        Kelas::create([
            'nama_kelas'=>'1 Rekayasa Sistem Kriptografi'
        ]);
    }
}
