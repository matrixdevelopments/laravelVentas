<?php

class Invoice extends Eloquent
{

	protected $fillable = array(
		'user_id',
		'delivery_address',
	);

	public function user()
	{
		return $this->belongsTo('User');
	}

	public function products()
	{
		return $this->belongsToMany('Products');
	}
} 