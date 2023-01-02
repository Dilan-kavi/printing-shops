<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Pcenter;
use App\Models\Skeeper;
use App\Models\Print_detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class FrontskeeperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders =Order::join('customers', 'customers.id', '=', 'orders.customers_id')
                        ->join('pcenters','pcenters.id','=','orders.pcenters_id')
                        // ->where('orders.pcenters_id','=','pcenters.id')
                        ->select('customers.*', 'orders.*')
                        ->orderBy('orders.id','desc')
                        ->get();
        // ddd($orders);
        return view('frontskeeper.orderreq',compact('orders'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function show($id)
    {   
        $pdetails = Print_detail::join('orders', 'orders.id', '=', 'print_details.orders_id')
                                ->select('orders.*', 'print_details.*')
                                ->where('print_details.orders_id','=',$id)
                                ->get();
        // dd($pdetails);
        return view('frontskeeper.Viewpdetail',compact('pdetails'));
    }
    public function download($id){
        $pdetails = Print_detail::find($id);
        return Storage::download('public/uploads/'.$pdetails->filename);
    }
   
}
