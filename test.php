<?php 
require_once __DIR__ . "/../vendor/autoload.php";
use App\Models\User;

$user = new User;
$user->create([
    'username' => 'nouvel_utilisateur',
    'email' => '@gmail.com',
    'password' => 'salam',
    'role' => 'client'
]);

// $user->username = 'nouvel_utilisateur';
// $user->email = 'email@example.com';
// $user->password = password_hash('motdepasse', PASSWORD_BCRYPT); // Assurez-vous de hacher le mot de passe
// $user->role = 'client';
// $user->save();




