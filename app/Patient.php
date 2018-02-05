<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
	protected $fillable = [
		'name',
		'address',
		'telephone',
		'bloodType',
		'alergy'
	];
	// Relaciones

	public function estimations()
	{
		return $this->hasMany('App\Estimation');
	}

	public function expedient()
	{
		return $this->hasOne('App\Expedient');
	}

	public function prescriptions($value='')
	{
		return $this->hasMany('App\Prescription');
	}

	public function payments()
	{
		return $this->hasMany('App\Payment');
	}
}
