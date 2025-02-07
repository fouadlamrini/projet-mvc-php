<?php
namespace App\Core;
use Illuminate\Database\Capsule\Manager as Capsule;

class Database{
    public static function init(){
        $capsule = new Capsule;

        $capsule->addConnection([
            //hado jaw mn fichier env
            'driver'    => $_ENV['DB_DRIVER'] ?? 'mysql',
            'host'      => $_ENV['DB_HOST'],
            'database'  => $_ENV['DB_NAME'],
            'username'  => $_ENV['DB_USER'],
            'password'  => $_ENV['DB_PASS'],
        ]);
        
        // Initialiser Eloquent
        $capsule->setAsGlobal();
        $capsule->bootEloquent();
    }
    
}