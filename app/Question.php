<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['title', 'question', 'asked_name', 'answer', 'answered_name'];

}
