<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class coordinate1 extends Model
{
     protected $table = 'coordinate1s';
    protected $fillable = ['coordinate_id','coordinate_fname','coordinate_lname','username','password','email','phone','dof','address','country','gender','biography','status','image'];
}
