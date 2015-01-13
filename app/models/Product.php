<?php

class Product extends Eloquent
{

    protected $fillable = array('codigo', 'marca', 'modelo', 'cantidad');

    public function detail()
    {
        return $this->hasMany('Detail');
    }

} 