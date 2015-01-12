<?php

class Invoice extends Eloquent
{

    protected $fillable = ['user_id', 'products', 'nombre'];

    public function user()
    {
        return $this->hasOne('User');
    }

    public function getProductsAttribute()
    {
        $products = json_decode($this->attributes['products']);
        $collection = new \Illuminate\Database\Eloquent\Collection();
        foreach ($products as $product) {
            $producto = Product::find($product->serial);
            $producto->cantidad = $product->cantidad;
            $collection->add($producto);
        }
        return $collection;
    }

    public function setProductsAttribute(array $value)
    {
        $this->attributes['products'] = json_encode($value);
    }
} 