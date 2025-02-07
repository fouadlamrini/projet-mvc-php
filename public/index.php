<?php
session_start();

require __DIR__ . '/../vendor/autoload.php';
use App\Core\Router;
use App\Core\Database;

use App\Models\User;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

Database::init();

// User::create([
//     'username' => 'fouad',
//     'email' => 'iuihhiihi@gmail.com',
//     'password' => 'salam',
//     'role' => 'client'
// ]);

require __DIR__ . '/../config/routes.php';
