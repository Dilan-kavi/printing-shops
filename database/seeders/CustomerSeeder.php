<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::insert(
           [ [
            'user_id'=>'4',
            'index_no'=> 'Sc/2018/10532',
            'fname'=> 'Dilan', 
            'lname'=> 'Serasinghe',
            'email' => 'dilankavi7@gmail.com',
            'faculty' => 'Faculty of Science',
            'contact_no' => '0719504117',
            ],

            [
            'user_id'=>'5',
            'index_no'=> 'Sc/2018/10601',
            'fname'=> 'Kushan', 
            'lname'=> 'Samanchandra',
            'email' => 'kushanmaduranga@gmail.com',
            'faculty' => 'Faculty of Science',
            'contact_no' => '0719564867', 
            ],
            [
            'user_id'=>'6',
            'index_no'=> 'Sc/2018/10548',
            'fname'=> 'Kasun', 
            'lname'=> 'Gunathilaka',
            'email' => 'kasunguna@gmail.com',
            'faculty' => 'Faculty of Science',
            'contact_no' => '0716709741',
            ],
            [
            'user_id'=>'7',
            'index_no'=> 'Sc/2018/10525',
            'fname'=> 'Sandunika', 
            'lname'=> 'Dissanayaka',
            'email' => 'sadudis@gmail.com',
            'faculty' => 'Faculty of Science',
            'contact_no' => '0718709741',
            ],
            [
            'user_id'=>'8',
            'index_no'=> 'Sc/2018/10492',
            'fname'=> 'Amila', 
            'lname'=> 'Gunasena',
            'email' => 'amilaguna@gmail.com',
            'faculty' => 'Faculty of Science',
            'contact_no' => '0716799741',
            ]]
         );
    }
}
