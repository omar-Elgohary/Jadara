<?php
namespace App\Interfaces;

interface ProductRepositoryInterface
{
    public function getAllProducts();

    public function getProduct($pro_id);

    public function getCategoryProducts($cat_id);

    public function productsHasDiscount();
}
