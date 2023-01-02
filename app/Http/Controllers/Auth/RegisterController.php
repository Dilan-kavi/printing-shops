<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
       // dd($data);
        return Validator::make($data, [
            'fname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        // dd($data);
        // return User::create([
        //     'name' => $data['fname'],
        //     'email' => $data['email'],
        //     'password' => Hash::make($data['password']),
        // ]);

        
        // $customer = new Customer;
        // $customer->index_no = $data['index_no'];
        // $customer->fname = $data['index_no'];
        // $customer->lname = $data['index_no'];
        // $customer->email = $data['index_no'];
        // $customer->faculty = $data['index_no'];;
        // $customer->contact_no = $data['contact_no'];
        
        // $user->customer()->save($customer);

        // $user->assignRole('customer');
        $user = new User;
 
        $user->name = $data['fname'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);

        $user->save();

        $customer = new Customer;
        $customer->index_no =$data['index_no'];
        $customer->fname =$data['fname'];
        $customer->lname = $data['lname'];
        $customer->email = $data['email'];
        $customer->faculty = $data['faculty'];
        $customer->contact_no = $data['contact_no'];

        $user->customer()->save($customer);

        $user->assignRole('Customer');

        // return redirect()->route('/login')
        //     ->with('success','Registered successfully.');

    }
}
