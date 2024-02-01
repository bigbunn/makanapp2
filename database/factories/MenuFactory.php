<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Menu>
 */
class MenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // Mendapatkan tanggal sebelum 2024-04-02
        $tanggal = $faker->dateTimeBetween('2024-01-01', '2024-02-01')->format('Y-m-d');

        // Pilih waktu makan secara acak
        $waktuMakan = $faker->randomElement(['pagi', 'siang', 'malam']);

        // Pilih opsi untuk setiap atribut
        $nasi = $faker->randomElement(['nasi putih', 'nasi goreng', 'nasi uduk']);
        $laukSatu = $faker->randomElement(['ayam goreng', 'ayam opor', 'ayam bumbu taliwang', 'ayam filet', 'ikan fillet', 'cumi', 'telur', 'udang', 'daging']);
        $laukDua = $faker->randomElement(['tempe', 'tahu', 'toge', 'acar', 'bihun', 'mie goreng', 'perkedel']);
        $sayur = $faker->randomElement(['sop', 'mix vegetables', 'buncis', 'brokoli']);
        $buah = $faker->randomElement(['semangka', 'melon', 'jeruk', 'pisang']);
        $komplemen = $faker->optional()->randomElement(['kerupuk']);

        return [
            'tanggal' => $tanggal,
            'waktu_makan' => $waktuMakan,
            'nasi' => $nasi,
            'lauk_satu' => $laukSatu,
            'lauk_dua' => $laukDua,
            'sayur' => $sayur,
            'buah' => $buah,
            'komplemen' => $komplemen,
        ];
    }
}
