<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Learning extends Model
{
    protected $table = 'learnings';

    protected $fillable = ['name','slug','description','unit_id','vdo_youtube'];
}
