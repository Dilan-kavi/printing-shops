<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Print_detail;

class Print_detailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Print_detail::insert(
            [
                [
                'color'=> 'Black & White',
                'orientation'=>'Landscape',
                'page_size'=>'A4',
                ],
                [
                    'color'=> 'Black & White',
                    'orientation'=>'Landscape',
                    'page_size'=>'A4',
                ],

            ]
        );
    }    
}
