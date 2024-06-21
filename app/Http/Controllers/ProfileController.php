<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show()
    {
        $user = [
            'first_name' => 'Briana',
            'last_name' => 'Firsta',
            'student_id' => '2111522024',
            'department' => 'Sistem Informasi',
            'password' => '123456'
        ];

        return view('profile', compact('user'));
    }
}
