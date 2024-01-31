<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Unit;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Unit::create([
            'nama_unit' => 'Unit A Satria'
        ]);
        Unit::create([
            'nama_unit' => 'Unit B Satria'
        ]);
        Unit::create([
            'nama_unit' => 'Unit C Satria'
        ]);
        Unit::create([
            'nama_unit' => 'Unit D Satria'
        ]);
        Unit::create([
            'nama_unit' => 'Unit A Madya'
        ]);
        Unit::create([
            'nama_unit' => 'Unit B Madya'
        ]);
        Unit::create([
            'nama_unit' => 'Unit C Madya'
        ]);
        Unit::create([
            'nama_unit' => 'Unit D Madya'
        ]);
        Unit::create([
            'nama_unit' => 'Unit A Muda'
        ]);
        Unit::create([
            'nama_unit' => 'Unit B Muda'
        ]);
        Unit::create([
            'nama_unit' => 'Unit C Muda'
        ]);
        Unit::create([
            'nama_unit' => 'Unit D Muda'
        ]);
        Unit::create([
            'nama_unit' => 'Unit A Pratama'
        ]);
        Unit::create([
            'nama_unit' => 'Unit B Pratama'
        ]);
        Unit::create([
            'nama_unit' => 'Unit C Pratama'
        ]);
        Unit::create([
            'nama_unit' => 'Unit D Pratama'
        ]);
        Unit::create([
            'nama_unit' => 'Unit E Pratama'
        ]);
    }
}
