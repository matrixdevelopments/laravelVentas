<?php

use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\UserTrait;

class User extends Eloquent implements UserInterface, RemindableInterface
{

    use UserTrait, RemindableTrait;

    protected $hidden = array('password', 'remember_token');

    protected $fillable = array('nombres', 'apellidos', 'direccion', 'telefono', 'email', 'password');

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }

    public function role()
    {
        return $this->belongsToMany('Role');
    }

    public function invoices()
    {
        return $this->hasMany('Invoice');
    }
}
