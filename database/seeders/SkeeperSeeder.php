<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Skeeper; 

class SkeeperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Skeeper::insert(
        [
            [
                'pcenters_id'=>1,
                'fname'=> 'Lahiru',
                'lname'=>'Kumara',
                'email' =>'lahirukuma@gmail.com',
                'contact_no'=>'0769586984',
            ],
            [
                'pcenters_id'=>2,
                'fname'=> 'Samadhi',
                'lname'=>'Kumari',
                'email' =>'samadhikumari@gmail.com',
                'contact_no'=>'076586984',
            ],
            [
                'pcenters_id'=>3,
                'fname'=> 'Janith',
                'lname'=>'Jayathilaka',
                'email' =>'janijaya@gmail.com',
                'contact_no'=>'0763586984',
            ],
            [
                'pcenters_id'=>1,
                'fname'=> 'Dimuthu',
                'lname'=>'Wijethunga',
                'email' =>'dimuwije@gmail.com',
                'contact_no'=>'0769596984',
            ]
        ]);
    }
}
