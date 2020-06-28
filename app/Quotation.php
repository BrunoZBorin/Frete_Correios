<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    protected $table = 'quotations';
    protected $fillable = ['code','order_id'];
    public $timestamps = false;
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}