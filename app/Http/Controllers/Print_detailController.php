<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Customer;
use App\Models\Print_detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Print_detailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pdetails = Print_detail::join('orders', 'orders.id', '=', 'print_details.orders_id')
                                ->select('orders.*', 'print_details.*')
                                ->paginate(5);
        // dd($pdetails);
        // $pdetails = Print_detail::latest()->paginate(5);
        return view('pdetails.index',compact('pdetails'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $orders=Order::get();
        return view('pdetails.create');
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
            'page_size' => 'required',
            'color' => 'required',
            'orientation'=>'required',
        ]);

        Print_detail::create($request->all());
        return redirect()->route('pdetails.index')
                        ->with('success','Printing detail Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Print_detail $pdetails)
    {
        $orders=Order::find($id);
        return view('pdetails.show',compact('pdetails'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Print_detail $pdetails)
    {
        $orders=Order::find($id);
        return view('pdetails.edit',compact('pdetails'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Print_detail $pdetails)
    {
        request()->validate(
            [
                'page_size' => 'required',
                'color' => 'required',
                'orientation'=>'required',
            ]
        );

        $pdetails->update($request->all());
        return redirect()->route('pdetails.index')
                        ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Print_detail $pdetails)
    {
        $pdetails->delete();
        return redirect()->route('pdetails.index')
                        ->with('success','print detail deleted successfully');
    }
}
