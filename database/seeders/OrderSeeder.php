<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::insert
        (
            [
                [
                    'id'=>'p1',
                    'otime'=>'17.30',
                    'odate'=>'23/Jun/2020',
                    'amount'=> 'RS 200',
                    'paytime'=>'18.50',
                    'paydate'=>'23/Jun/2020',
                    'pay_method'=>'cash',
                ],
                [
                    'id'=>'p2',
                    'otime'=>'10.30',
                    'odate'=>'24/Jun/2020',
                    'amount'=> 'RS 300',
                    'paytime'=>'12.50',
                    'paydate'=>'24/Jun/2020',
                    'pay_method'=>'Debit card',
                ],
                [
                    'id'=>'p3',
                    'otime'=>'9.30',
                    'odate'=>'24/Jan/2021',
                    'amount'=> 'RS 350',
                    'paytime'=>'10.50',
                    'paydate'=>'24/Jun/2021',
                    'pay_method'=>'Debit card',
                ],
                [
                    'id'=>'p4',
                    'otime'=>'11.30',
                    'odate'=>'25/Jun/2020',
                    'amount'=> 'RS 380',
                    'paytime'=>'11.50',
                    'paydate'=>'25/Jun/2020',
                    'pay_method'=>'Debit card',
                ],
                [
                    'id'=>'p5',
                    'otime'=>'2.30',
                    'odate'=>'12/Jun/2020',
                    'amount'=> 'RS 3870',
                    'paytime'=>'6.50',
                    'paydate'=>'21s/Jun/2020',
                    'pay_method'=>'Debit card',
                ],
            ]
        );
    }
}
