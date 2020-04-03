<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questionnaire extends Model
{
    // turn mass protection off
    protected $guarded = [];

    public function user() 
    {
        return $this->belongsTo(User::class);
    }
}
