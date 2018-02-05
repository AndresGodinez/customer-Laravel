<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
	protected $fillable = [
		'patient_id',
		'estimation_id',
		'amount',
		'comment'
	];

	public function patient()
	{
		return $this->belongsTo('App\Patient');
	}
	public function estimation()
	{
		return $this->belongsTo('App\Estimation');
	}
}
