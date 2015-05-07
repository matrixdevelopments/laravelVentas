<?php

class Detail extends Eloquent
{

	protected $fillable = array('product_id', 'serialNumber');

	public function product()
	{
		return $this->hasOne('Product');
	}
} 