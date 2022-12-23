<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Pcenter;
use App\Models\Skeeper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
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

        // dd($orders);
        
        // $orders = Order::latest()->paginate(5);
        return view('orders.index',compact('orders'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers=Customer::get();
        $skeepers=Skeeper::get();
        return view('Orders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'amount'=>'required',
            'paytime'=>'required',
            'paydate'=>'required',
            'pay_method'=>'required',
        ]);
        Order::create($request->all());
        return redirect()->route('orders.index')
                        ->with('success','Order created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Order $orders)
    {
        
        return view('orders.show',compact('orders'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $orders)
    {
        return view('orders.edit',compact('orders'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $orders)
    {
        request()->validate([
            'amount'=>'requited',
            'paytime'=>'required',
            'paydate'=>'required',
            'pay_method'=>'required',
        ]);

        $orders->update($request->all());
        return redirect()->route('orders.index')
                        ->with('success','Order updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $orders)
    {
        $orders->delete();
        return redirect()->route('orders.index')
                        ->with('success','Order deleted successfully');
    }
}