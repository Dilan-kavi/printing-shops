<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::insert(
            [
                [
                    'name'=>'Customer',
                    'permission[]'=>[
                        'order-create',
                        'order-delete',
                        'order-create',
                        'print_detail-create',
                        'print_detail-edit',

                    ],
                ],
            ]
        );
    }
}
