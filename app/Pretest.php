<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pretest extends Model
{
    protected $table = 'pretests';

    protected $fillable = [
        'question','choice1','choice2','choice3','choice4','answer'
    ];


}
