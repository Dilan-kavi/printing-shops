<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Customer;
use App\Models\Print_detail;
use Illuminate\Http\Request;
use Illuminate\Support\Arr; 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class FcustomerController extends Controller
{
    public function create()
    {
        $pdetails = Print_detail::join('orders', 'orders.id', '=', 'print_details.orders_id')
        ->select('orders.*', 'print_details.*');

        $orders=Order::get();
        return view('frontcustomer.createorder');
    }
    public function store(Request $request)
    {
        request()->validate([
            'page_size' => 'required',
            'color' => 'required',
            'orientation'=>'required',
        ]);

        $orders=Order::create($id);
        Print_detail::create($request->all());
        return redirect()->route('pdetails.index')
                        ->with('success','Order created successfully.');
    }

    public function myorders()
    {
        return view('frontcustomer.myorders');
    }

}   