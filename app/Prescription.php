<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    protected $fillable =[
    	'patient_id',
    	'body',
    ]; 

    public function patient()
    {
    	return $this->belongsTo('App\Patient');
    }
}
