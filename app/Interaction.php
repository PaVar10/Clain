<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interaction extends Model
{
    protected $fillable = [
        'interaction', 'conduct', 'conversation_id'
    ];
}
