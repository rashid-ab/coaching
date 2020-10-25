<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{
   protected $fillable = ['user_id','category_id','challenge_name','challenge_type','description','start_time','end_time','notification','status'];
}
