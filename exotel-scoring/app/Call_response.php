<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Call_response extends Model
{
	// we are using mass assignable attributes ...
    protected $fillable = array('id', 'call_id', 'question','entered_value','is_correct');
    protected $table = 'call_response';

    public function Call_details() {
        return $this->hasOne('Call_details');
    }
}
