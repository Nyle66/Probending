<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use Notifiable;
    protected $fillable = [
        'users_id', 'games', 'win','fail','ratio','hitWin', 'hitFail',
    ];
}
