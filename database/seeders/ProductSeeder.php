<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::factory()->create([
            "state" => "Normal",
            "price" => "10$$",
            "description" =>"Description of the product Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed, id.",
        ]);

        Product::factory()->create([
            "state" => "Premium",
            "price" => "20$$",
            "description" =>"Description of the product Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed, id.",
        ]);
        Product::factory()->create([
            "state" => "VIP",
            "price" => "30$$",
            "description" =>"Description of the product Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed, id.",
        ]);
        Product::factory()->create([
            "state" => "VVIP",
            "price" => "45$$",
            "description" =>"Description of the product Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed, id.",
        ]);
    }
}
