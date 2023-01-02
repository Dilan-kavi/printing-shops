<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pcenter;

class PcenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pcenter::insert(
            [
                [
                    'cname'=>'Self Learning Area Book Shop',
                    'clocation'=>'Self Learning Area',
                ],
                [
                    'cname'=>'Main Library Book Shop',
                    'clocation'=>'Main Library',
                ],
                [
                    'cname'=>'Science canteen Book Shop',
                    'clocation'=>'Science canteen',
                ],
            ]

        );
    }
}
