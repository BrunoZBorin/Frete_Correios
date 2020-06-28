<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = ['CEP_Origem','CEP_Destino','product_id'];
    public $timestamps = false;
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function quotation()
    {
        return $this->hasOne(Quotation::class);
    }
}
