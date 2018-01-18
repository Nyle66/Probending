<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use Notifiable;
    protected $fillable = [
        'users_id', 'avatar', 'sexe','age','victory_string','fail_string',
    ];
}
