<?php

namespace App\Http\Controllers;

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
        return view('frontskeeper.skeepershome');
    }
   
    public function  customerindex()
    {
        return view('frontcustomer.custhome');
    }
}
