<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Labor_profile extends Model
{
    protected $fillable=[
        'education',
        'collage',
        'graduation_date'
    ];
}
