<?php

namespace Database\Seeders;

use App\Models\Timeslot;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TimeslotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Timeslot::insert(
            [
                [
                    'pcenters_id'=>1,
                    'stime'=> '08:00:00',
                    'etime'=>'08:10:00',
                    'status' =>'0',
                ],
                [
                    'pcenters_id'=>1,
                    'stime'=> '08:10:00',
                    'etime'=>'08:20:00',
                    'status' =>'0',
                ],
                [
                    'pcenters_id'=>1,
                    'stime'=> '08:20:00',
                    'etime'=>'08:30:00',
                    'status' =>'0',
                ],
                [
                    'pcenters_id'=>1,
                    'stime'=> '08:30:00',
                    'etime'=>'08:40:00',
                    'status' =>'0',
                
                ],
                [
                    'pcenters_id'=>1,
                    'stime'=> '08:40:00',
                    'etime'=>'08:50:00',
                    'status' =>'0',
                ],
                [
                    'pcenters_id'=>1,
                    'stime'=> '08:50:00',
                    'etime'=>'09:00:00',
                    'status' =>'0',
                ],
                [
                    'pcenters_id'=>2,
                    'stime'=> '08:00:00',
                    'etime'=>'08:10:00',
                    'status' =>'0',
                ],
                [
                    'pcenters_id'=>2,
                    'stime'=> '08:10:00',
                    'etime'=>'08:20:00',
                    'status' =>'0',
                ],
                [
                    'pcenters_id'=>2,
                    'stime'=> '08:20:00',
                    'etime'=>'08:30:00',
                    'status' =>'0',
                ],
                [
                    'pcenters_id'=>2,
                    'stime'=> '08:30:00',
                    'etime'=>'08:40:00',
                    'status' =>'0',
                
                ],
                [
                    'pcenters_id'=>2,
                    'stime'=> '08:40:00',
                    'etime'=>'08:50:00',
                    'status' =>'0',
                ],
                [
                    'pcenters_id'=>2,
                    'stime'=> '08:50:00',
                    'etime'=>'09:00:00',
                    'status' =>'0',
                ],
                [
                    'pcenters_id'=>3,
                    'stime'=> '08:00:00',
                    'etime'=>'08:10:00',
                    'status' =>'0',
                ],
                [
                    'pcenters_id'=>3,
                    'stime'=> '08:10:00',
                    'etime'=>'08:20:00',
                    'status' =>'0',
                ],
                [
                    'pcenters_id'=>3,
                    'stime'=> '08:20:00',
                    'etime'=>'08:30:00',
                    'status' =>'0',
                ],
                [
                    'pcenters_id'=>3,
                    'stime'=> '08:30:00',
                    'etime'=>'08:40:00',
                    'status' =>'0',
                
                ],
                [
                    'pcenters_id'=>3,
                    'stime'=> '08:40:00',
                    'etime'=>'08:50:00',
                    'status' =>'0',
                ],
                [
                    'pcenters_id'=>3,
                    'stime'=> '08:50:00',
                    'etime'=>'09:00:00',
                    'status' =>'0',
                ]
            

            ]
        );
    }
}
