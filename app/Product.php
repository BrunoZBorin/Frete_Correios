<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    public $timestamps = false;
    protected $fillable = ['name','code','weight','length','width','height'];
    public function order()
    {
        return $this->hasOne(Order::class);
    }
}
