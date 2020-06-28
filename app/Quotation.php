<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}