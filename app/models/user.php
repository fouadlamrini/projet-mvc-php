<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    // Spécifier la table associée au modèle
    protected $table = 'users';

    // Indiquer les champs pouvant être assignés en masse
    protected $fillable = ['username', 'email', 'password', 'role'];

    // Désactiver la gestion automatique des timestamps si vous ne les utilisez pas
    public $timestamps = false;
}

