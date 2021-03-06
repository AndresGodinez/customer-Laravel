<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estimation extends Model
{
    protected $fillable = [
    	'patient_id',
    	'subtotal',
    	'balance',
    	'total'
    ];

    public function patient()
    {
    	return $this->belongsTo('App\Patient');
    	
    }
}
