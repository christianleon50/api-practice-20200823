<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work_experience extends Model
{
    protected $fillable=[
        'last_job',
        'activity',
        'start_date',
        'end_date'
    ];
}
