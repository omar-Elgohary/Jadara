<?php
namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        // 1
        Product::create([
            'category_id' => '1',
            'name' => 'white shirt',
            'price' => '300',
            'discount_id' => '2',
            'price_after_discount' => 300 - 30,
        ]);

        // 2
        Product::create([
            'category_id' => '2',
            'name' => 'black shoes',
            'price' => '560',
            'discount_id' => '3',
            'price_after_discount' => 560 - 60,
        ]);

        // 3
        Product::create([
            'category_id' => '3',
            'name' => 'red jacket',
            'price' => '700',
            'discount_id' => '4',
            'price_after_discount' => 700 - 100,
        ]);

        // 4
        Product::create([
            'category_id' => '4',
            'name' => 'jeans pant',
            'price' => '380',
            'discount_id' => '1',
            'price_after_discount' => 380 - 90,
        ]);

        // 5
        Product::create([
            'category_id' => '1',
            'name' => 'black shirt',
            'price' => '400',
            'discount_id' => '3',
            'price_after_discount' => 400 - 60,
        ]);

        // 6
        Product::create([
            'category_id' => '2',
            'name' => 'brown shoes',
            'price' => '650',
            'price_after_discount' => 650 - 0,
        ]);

        // 7
        Product::create([
            'category_id' => '3',
            'name' => 'blue jacket',
            'price' => '800',
            'price_after_discount' => 800 - 0,
        ]);
    }
}
