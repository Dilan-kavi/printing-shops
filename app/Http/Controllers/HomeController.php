<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Print_detail;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
        // if($user->hasRole('admin'))
        //     return redirect('home');
        // elseif($user->hasRole('shop keeper'))
        //     return redirect('/manage');
        // else return 
        //     redirect('/');

    }
    public function skeeperindex()
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
   
    public function  customerindex()
    {
        return view('frontcustomer.custhome');
    }
}
