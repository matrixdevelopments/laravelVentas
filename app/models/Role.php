<?php

/**
 * Role
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\User[] $users 
 */
class Role extends Eloquent
{

	protected $fillable = array('name', 'detail');

	public function users()
	{
		return $this->belongsToMany('User');
	}
} 