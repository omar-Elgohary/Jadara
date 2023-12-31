<?php
namespace App\Interfaces;
use Illuminate\Http\Request;

interface OrderRepositoryInterface
{
    public function createOrder();

    public function getAllOrders();

    public function getUserOrders($user_id);

    public function removeOrder($order_id);
}
