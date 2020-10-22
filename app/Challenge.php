<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{
   protected $fillable = ['challenge_id','challenge_name','challenge_type','description','task_title','task_description'];
}
