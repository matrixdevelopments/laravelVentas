<?php

class Role extends Eloquent
{

    protected $fillable = array('name', 'detail');

    public function users()
    {
        return $this->belongsToMany('User');
    }
} 