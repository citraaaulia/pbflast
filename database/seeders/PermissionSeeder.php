<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_tatausaha = Role::updateOrCreate(
            [
            'name' => 'tatausaha'
            ],
            
            ['name' => 'tatausaha'] );

        $role_rumahtangga =  Role::updateOrCreate(
                [
                'name' => 'rumahtangga'
                ],
                
                ['name' => 'rumahtangga'] );
        
        $permissions = Permission::updateOrCreate(
            ['name'=> 'view_dashboard'],
            ['name'=> 'view_dashboard']
        );

        $role_tatausaha->givePermissionTo($permissions);
        
        $user = User::find(1);
        $user->assignRole('tatausaha');


    }
}
