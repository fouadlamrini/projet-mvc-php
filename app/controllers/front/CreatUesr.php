<?php

namespace App\Controllers\Front;

use App\Models\User;

class CreatUser
{
    public function create()
    {

        User::create([
            'username' => 'nouvel_utilisateur',
            'email' => 'email@gmail.com',
            'password' => 'salam',
            'role' => 'client'
        ]);
    }
}
