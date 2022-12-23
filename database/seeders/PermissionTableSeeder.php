<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $permissions = [
    
               'role-list',
               'role-create',  
               'role-edit',  
               'role-delete',   
               'customer-create',
               'customer-list',
               'customer-edit',
               'customer-delete',
               'skeeper-create',
               'skeeper-list',
               'skeeper-edit',
               'skeeper-delete',
               'pcenter-create',
               'pcenter-list',
               'pcenter-edit',
               'pcenter-delete',
               'notification-create',
               'notification-edit',
               'notification-delete',
               'order-create',
               'order-list',
               'order-edit',
               'order-delete',
               'print_detail-create',
               'print_detail-list',
               'print_detail-edit',
               'print_detail-delete',


    
            ];
    
         
    
            foreach ($permissions as $permission) {
    
                 Permission::create(['name' => $permission]);
    
            }
    
        
    }
}
