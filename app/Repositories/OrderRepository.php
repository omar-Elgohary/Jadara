<?php
namespace App\Repositories;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Interfaces\OrderRepositoryInterface;

class OrderRepository implements OrderRepositoryInterface
{
    public function createOrder()
    {
        return Order::create([
            'user_id' => auth()->user()->id,
            'product_id' => request('product_id'),
            'product_quantity' => request('product_quantity'),
        ]);
    }

    public function getAllOrders()
    {
        return Order::get();
    }

    public function getUserOrders($user_id)
    {
        return Order::where('user_id', auth()->user()->id)->get();
    }

    public function removeOrder($order_id)
    {
        return Order::find($order_id)->delete();
    }

}
