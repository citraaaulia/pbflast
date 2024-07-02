<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Rumah Tangga',
            'email' => 'rumahtangga@gmail.com',
            'password' => Hash::make('rumahtangga'),
            'role' => 'rumahtangga',
        ]);

        User::create([
            'name' => 'Tata Usaha',
            'email' => 'tatausaha@gmail.com',
            'password' => Hash::make('tatausaha'),
            'role' => 'tatausaha',
        ]);
    }

}
