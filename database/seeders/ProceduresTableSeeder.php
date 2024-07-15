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
            ['Name' => 'Dental bonding', 'Price' => 5000],
            ['Name' => 'Dental crowns', 'Price' => 10000],
            ['Name' => 'Bridgework', 'Price' => 15000],
            ['Name' => 'Cosmetic fillings', 'Price' => 3000],
            ['Name' => 'Root canal therapy', 'Price' => 8000],
            ['Name' => 'Invisalign', 'Price' => 80000],
            ['Name' => 'Dental veneers', 'Price' => 12000],
            ['Name' => 'Teeth cleanings', 'Price' => 1500],
            ['Name' => 'Dentures', 'Price' => 20000],
            ['Name' => 'Teeth whitening', 'Price' => 6000],
            ['Name' => 'Tooth extractions', 'Price' => 2000]
        ];

        DB::table('procedures')->insert($procedures);
    }
}
