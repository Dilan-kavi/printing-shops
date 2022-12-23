<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Pcenter;
use App\Models\Skeeper;
use App\Models\Print_detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class FrontskeeperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::join('customers', 'customers.id', '=', 'orders.customers_id')
            ->select('customers.*', 'orders.*')
            ->paginate(5);
           //dd($orders[0]); 
        $pdetails = Print_detail::join('orders', 'orders.id', '=', 'print_details.orders_id')
        ->select('orders.*', 'print_details.*');
        // dd($orders);
        // dd($pdetails);
        return view('frontskeeper.orderreq',compact('orders'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function show(Print_detail $pdetails)
    {   
        
        $orders=Order::get($pdetails);
        dd($orders);
        return view('frontskeeper.Viewpdetail',compact('pdetails'));
    }
   
}
