<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BranchAdmin  extends Model
{

    protected $fillable = ['ba_id','ba_fname','ba_lname','username','password','email','phone','dof','branch','address','gender','biography','status','image'];
}
