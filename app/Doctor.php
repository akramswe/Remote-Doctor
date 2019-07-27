<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = ['doctor_id','doctor_fname','doctor_lname','username','password','email','phone','dof','dept_id','address','country','gender','specialist','state','postal_code','status','status','image'];
}
