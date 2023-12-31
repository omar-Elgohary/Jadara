<?php
namespace App\Repositories;
use App\Models\Product;
use App\Interfaces\ProductRepositoryInterface;

class ProductRepository implements ProductRepositoryInterface
{
    public function getAllProducts()
    {
        return Product::with('category')->get();
    }

    public function getProduct($pro_id)
    {
        return Product::where('id', $pro_id)->with('category')->first();
    }

    public function getCategoryProducts($cat_id)
    {
        return Product::where('category_id', $cat_id)->with('category')->get();
    }

    public function productsHasDiscount()
    {
        return Product::where('discount_id', '!=', null)->with('category')->get();
    }
}
