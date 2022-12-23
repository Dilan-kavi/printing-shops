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
                    'cname'=>'slr',
                    'clocation'=>'Self Learning Area',
                ],
                [
                    'cname'=>'canteen',
                    'clocation'=>'SScience canteen',
                ],
                [
                    'cname'=>'lib',
                    'clocation'=>'Main Library',
                ],
            ]

        );
    }
}
