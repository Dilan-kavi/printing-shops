<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Customer;
use Illuminate\Support\Arr; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = DB::table('users')
            ->join('customers', 'users.id', '=', 'customers.user_id')
            ->select('users.*', 'customers.*')
            ->paginate(10);

            //dd($customers);
        // $customers = Customer::latest()->paginate(5);
        return view('customers.index',compact('customers'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.create');
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
            'index_no'=>'required',
            'fname'=>'required',
            'lname'=>'required',
            'email'=>'required',
            'faculty'=>'required',
            'contact_no'=>'required',
            
        ]);

        $user = new User;
 
        $user->name = $request->fname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        $customer = new Customer;
        $customer->index_no = $request->index_no;
        $customer->fname = $request->fname;
        $customer->lname = $request->lname;
        $customer->email = $request->email;
        $customer->faculty = $request->faculty;
        $customer->contact_no = $request->contact_no;

        $user->customer()->save($customer);

        $user->assignRole('Customer');

        // Customer::create($request->all());
        return redirect()->route('customers.index')
                        ->with('success','Customer created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer=Customer::find($id);
        $user=$customer->user;
        return view('customers.show',compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer=Customer::find($id);
        return view('customers.edit',compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            'index_no'=>'required',
            'fname'=>'required',
            'lname'=>'required',
            'email'=>'required',
            'faculty'=>'required',
            'contact_no'=>'required',
        ]);

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        
        if(!empty($request->password)){ 
            $user->password = Hash::make($request->password);
        }else{
            $user = Arr::except($user, ['password']);
        }

        $user->update();
        $customer = new Customer;
        $customer->index_no = $request->index_no;
        $customer->fname = $request->fname;
        $customer->lname = $request->lname;
        $customer->email = $request->email;
        $customer->faculty = $request->faculty;
        $customer->contact_no = $request->contact_no;
        $user->customer()->update($customer->toArray());

        // $customer->update($request->all());
        return redirect()->route('customers.index')
                        ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        //dd($user);
        $user->customer()->delete();
        $user->delete();
        // $customer->delete();
        return redirect()->route('customers.index')
                        ->with('success','Customer deleted successfully');
    }
}
