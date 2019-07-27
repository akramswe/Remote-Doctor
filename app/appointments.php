<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class appointments extends Model
{
    protected $fillable = ['apnt_id','doctor_id','patient_id','department_id','date','time','email','phone','message','status'];
}
