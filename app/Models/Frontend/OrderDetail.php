<?php

namespace App\Models\Frontend;

use App\Models\Admin\Product;
use App\Models\Frontend\Order;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $guarded = [];

    public function order() {
        return $this->belongsTo(Order::class);
    }

    public function product() {
        return $this->belongsTo(Product::class);
    }
}