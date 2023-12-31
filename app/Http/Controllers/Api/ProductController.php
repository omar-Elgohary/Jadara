<?php
namespace App\Http\Controllers\Api;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\ProductRepository;
use App\Interfaces\ProductRepositoryInterface;

class ProductController extends Controller
{
    private ProductRepositoryInterface $productRepository;

    public function __construct()
    {
        $this->productRepository = new ProductRepository();
    }

    public function getAllProducts()
    {
        $products = $this->productRepository->getAllProducts();
        return response()->json(['products' => $products]);
    }

    public function getProduct($pro_id)
    {
        $product = $this->productRepository->getProduct($pro_id);
        return response()->json(['product' => $product]);
    }

    public function getCategoryProducts($cat_id)
    {
        $products = $this->productRepository->getCategoryProducts($cat_id);
        return response()->json(['products' => $products]);
    }

    public function productsHasDiscount()
    {
        $products = $this->productRepository->productsHasDiscount();
        return response()->json(['products' => $products]);
    }
}
