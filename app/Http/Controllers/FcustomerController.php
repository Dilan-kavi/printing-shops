<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Customer;
use App\Models\Print_detail;
use Illuminate\Http\Request;
use Illuminate\Support\Arr; 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class FcustomerController extends Controller
{
    public function create(Request $request)
    {  
         //dd($request);
        $pdetails = Print_detail::join('orders', 'orders.id', '=', 'print_details.orders_id')
        ->select('orders.*', 'print_details.*');

        // $orders=Order::get();
        // Order::create($request->all());
        return view('frontcustomer.createorder',compact('request'));
    }

    public function store(Request $request)
    {  
// dd($request);
        request()->validate([
            'page_size' => 'required',
                'color' => 'required',
                'orientation'=>'required',
                'pp_sheet'=>'required',
        ]);
        
        $cus_id = DB::table('customers')
            ->where('user_id', '=', Auth::id())
            ->select('customers.id as id')
            ->get();


        $order = new Order;
        $order->timeslot = $request->stime;
        $order->customers_id = $cus_id[0]->id;
        $order->pcenters_id = $request->shopid;
        $order->save();

        $print = new Print_detail;
        $print->orders_id = $order->id;
        $print->page_size = $request->page_size;
        $print->orientation = $request->orientation;
        $print->color = $request->color;   
        $print->pp_sheet = $request->pp_sheet;
        $print->filename = time().'_'.$request->file->getClientOriginalName();
        $print->save();
     
        $fileName = time().'_'.$request->file->getClientOriginalName();
        $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');

        return redirect()->route('cushome')
                        ->with('success','Order created successfully.');
    }

    public function cselect(){
        return view('frontcustomer.selectcentaer');
    }

    public function editorder(){
//         $user=Auth::user();
//         $cus_id=User::join('users','users.id','=','customers.user_id')
//                         ->select('users.*','customers.*');
//                         // ->where('users.id','=',$user);
// dd($cus_id);
        $orders = Order::join('customers', 'customers.id', '=', 'orders.customers_id')
            ->join('pcenters','pcenters.id', '=' ,'orders.pcenters_id')
            ->select('customers.*', 'orders.*','orders.created_at','pcenters.cname')
            // ->where('orders.customers_id', '=', 'customers.id')
            ->orderBy('orders.id','desc')
            ->paginate(100);
            // dd($orders); 
            // $pdetails = Print_detail::join('orders', 'orders.id', '=', 'print_details.orders_id')
            // ->select('orders.*.', 'print_details.*');

        return view('frontcustomer\myorders',compact('orders'));
    }

    public function edit($id)
    {
        $pdetails = Print_detail::join('orders', 'orders.id', '=', 'print_details.orders_id')
                                ->select('orders.*', 'print_details.*')
                                ->where('print_details.orders_id','=',$id)
                                ->get();
                                // dd($pdetails);
        return view('frontcustomer.edit',compact('pdetails'));
    }

    public function update(Request $request, Print_detail $pdetails)
    {
        request()->validate(
            [
                'page_size' => 'required',
                'color' => 'required',
                'orientation'=>'required',
                'pp_sheet'=>'required',
            ]
        );

        $pdetails->update($request->all());
        return redirect()->route('cushome')
                        ->with('success','Print details updated successfully');
    }
    public function destroy(Order $orders)
    {
        $orders->delete();
        return redirect()->route('orders.index')
                        ->with('success','Order deleted successfully');
    }
    
    public function pview(Customer $customer){
        
        $user=Auth::user();
        // dd($user);
        $customer=Customer::join('customers','customer.user_id','=','users.id')
                            ->where('customers.user_id', '=', $user)
                            ->select('users.*','customers.*')
                            ->get();
        dd($customer);

        
        return view('frontcustomer.profile',compact('customer'));
    }
}   