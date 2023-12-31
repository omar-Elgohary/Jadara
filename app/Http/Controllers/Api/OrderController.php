<?php
namespace App\Http\Controllers\Api;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\OrderRepository;
use App\Interfaces\OrderRepositoryInterface;

class OrderController extends Controller
{
    private OrderRepositoryInterface $orderRepository;

    public function __construct()
    {
        $this->orderRepository = new OrderRepository();
    }

    public function createOrder()
    {
        $order = $this->orderRepository->createOrder();
        return response()->json(['order' => $order]);
    }

    public function getAllOrders()
    {
        $orders = $this->orderRepository->getAllOrders();
        return response()->json(['orders' => $orders]);
    }

    public function getUserOrders($user_id)
    {
        $orders = $this->orderRepository->getUserOrders($user_id);
        return response()->json(['orders' => $orders]);
    }

    public function removeOrder($order_id)
    {
        if(Order::find($order_id)){
            $order = $this->orderRepository->removeOrder($order_id);
            return response()->json(['order' => $order]);
        }else{
            return response()->json(['order' => 'Not Found']);
        }
    }
}
