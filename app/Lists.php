<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lists extends Model
{
    protected $fillable = [
        'task', 'user_id','type', 'description'
    ];
}
