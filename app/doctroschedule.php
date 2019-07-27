<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class doctroschedule extends Model
{
    protected $table = 'doctroschedule';
    protected $fillable = ['schedule_id','doctor_name','availble_days','start_time','end_time','message','status'];

}
