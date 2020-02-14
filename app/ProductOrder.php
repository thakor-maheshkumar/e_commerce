<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductOrder extends Model
{
    //
    protected $fillable = [
        'pname', 'price',
    ];

    public function order()
    {
    	return $this->belongsTo('App\Order');
    }
}
