<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    protected $fillable=[
        'name',
        'lastname',
        'email',
        'phone',
        'address',
        'available',
        'labor_profile_id',
        'work_experience_id'
    ];
}
