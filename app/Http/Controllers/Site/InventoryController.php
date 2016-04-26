<?php

namespace App\Http\Controllers\Site;

use App\Http\Requests\CreatOrderRequest;
use App\Orders;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Inventory;
use Illuminate\Support\Facades\Response;
use Session;
use Illuminate\Support\Facades\Mail;

class InventoryController extends Controller
{
    //
    public function index()
    {
        $invents = Inventory::orderBy('created_at', 'DESC')->get();
        $page_name = 'inventory';
        return view('site.inventory.enventory', compact('invents', 'page_name'));
    }

    public function order($id)
    {
        $tool = Inventory::find($id);
        return view('site.inventory.order', compact('tool'));
    }

    public function saveOrder(CreatOrderRequest $request)
    {
        $order = new Orders();
        $order->product_id = $request->input('product_id');
        $order->count = $request->input('count');
        $order->email = $request->input('email');
        $order->name = $request->input('name');
        $order->phone = $request->input('phone');
        $order->company = $request->input('company');
        $order->save();
        Mail::send('email.index', array('order'=>$order), function ($message) {
            $message->to('ahmed29329@gmail.com', 'Ali beader')->subject('Welcome!');
        });

        Session::flash('order_new', 'order has sent successfully');
        return Response::json(['success' => true]);
    }
}
