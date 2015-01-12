<?php

class Role extends Eloquent
{

    protected $fillable = ['name', 'detail'];

    public function user()
    {
        return $this->belongsToMany('User');
    }
} 