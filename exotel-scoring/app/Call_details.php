<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Call_details extends Model
{
	// we are using mass assignable attributes ...
    protected $fillable = array('id', 'emp_id', 'start_time','end_time','_from','_to','quiz_name','call_id');
    protected $table = 'call_response';

    public function call_response() {
        return $this->hasMany('call_response');
    }
}