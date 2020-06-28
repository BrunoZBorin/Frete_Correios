<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function quotation()
    {
        return $this->hasOne(Quotation::class);
    }
}
