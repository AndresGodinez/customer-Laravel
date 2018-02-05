<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expedient extends Model
{
    protected $fillable=[
    	'patient_id',
    	'photo'
    ];

    public function patient()
    {
    	return $this->belongsTo('App\Patient');
    }
}
