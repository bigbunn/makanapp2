<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Daftar tanggal (gunakan tanggal yang sesuai)
        $dates = ['2024-01-01', '2024-01-02', '2024-01-03', '2024-01-04', '2024-01-05', '2024-01-06', '2021-01-07', '2021-01-08', '2021-01-09', '2021-01-10'];

        // Daftar waktu makan
        $meals = ['pagi', 'siang', 'malam'];

        foreach ($dates as $date) {
            foreach ($meals as $meal) {
                Menu::create([
                    'tanggal' => $date,
                    'waktu_makan' => $meal,
                    'nasi' => 'nasi putih',
                    'lauk_satu' => 'ayam goreng',
                    'lauk_dua' => 'tempe',
                    'sayur' => 'buncis',
                    'buah' => 'semangka',
                    'komplemen' => 'kerupuk',
                ]);
            }
        }
    }
}
