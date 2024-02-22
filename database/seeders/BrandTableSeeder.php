<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brand;
class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Brand::factory()->count(5)->create();
    }
}
