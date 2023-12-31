<?php
namespace Database\Seeders;

use App\Models\Discount;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiscountSeeder extends Seeder
{
    public function run(): void
    {
        Discount::create([
            'discount' => '90',
        ]);

        Discount::create([
            'discount' => '30',
        ]);

        Discount::create([
            'discount' => '60',
        ]);

        Discount::create([
            'discount' => '100',
        ]);
    }
}
