<?php

namespace App\Http\Controllers\Panel;


use App\Inventory;
use App\Notes;
use App\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class OrdersController extends Controller
{
    public function index()
    {
        $orders = Orders::all();
        $page_name = 'Orders';
        return view('admin.orders.index', compact('page_name', 'orders'));
    }

    public function show($id)
    {
        $order = Orders::find($id);
        $product_id = $order->product_id;
        $tool = Inventory::find($product_id);
        $page_name = $order->company;
        return view('admin.orders.single', compact('order', 'tool', 'page_name'));
    }

    public function delete($id)
    {
        $order = Orders::find($id);
        $order->delete();

        return redirect()->back();
    }
}
