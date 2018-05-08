<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posttest extends Model
{
    protected $table = 'posttests';
    protected $fillable = [
        'question','choice1','choice2','choice3','choice4','answer'
    ];

}
