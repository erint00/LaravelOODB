<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Purchase;
class PurchaseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Purchase::factory()->count(10)->create();
    }
}
