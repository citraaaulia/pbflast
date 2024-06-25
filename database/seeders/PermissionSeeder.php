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

        $permissions2 = Permission::updateOrCreate(
            ['name'=> 'view_disposisi'],
            ['name'=> 'view_disposisi']
        );

        $role_tatausaha->givePermissionTo($permissions);
        $role_rumahtangga->givePermissionTo($permissions2);

        $user = User::find(1);
        $user2 = User::find(2);
        $user->assignRole('tatausaha');
        $user2->assignRole('rumahtangga');

    }
}
