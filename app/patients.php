<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patients extends Model
{
    protected $fillable = ['patient_id','patient_fname','patient_lname','username','password','email','phone','dof','address','country','gender','status','image'];
}
