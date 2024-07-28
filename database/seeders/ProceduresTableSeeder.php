<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProceduresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $procedures = [
            ['name' => 'Dental bonding', 'price' => 5000],
            ['name' => 'Dental crowns', 'price' => 10000],
            ['name' => 'Bridgework', 'price' => 15000],
            ['name' => 'Cosmetic fillings', 'price' => 3000],
            ['name' => 'Root canal therapy', 'price' => 8000],
            ['name' => 'Invisalign', 'price' => 80000],
            ['name' => 'Dental veneers', 'price' => 12000],
            ['name' => 'Teeth cleanings', 'price' => 1500],
            ['name' => 'Dentures', 'price' => 20000],
            ['name' => 'Teeth whitening', 'price' => 6000],
            ['name' => 'Tooth extractions', 'price' => 2000]
        ];

        DB::table('procedures')->insert($procedures);
    }
}
