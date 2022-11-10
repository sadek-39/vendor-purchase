<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_name',
        'item_quantity',
        'unit_price',
        'total_price',
        'vendor_id'
    ];

    public function vendor()
    {
        return $this->belongsTo(Vendor::class,'vendor_id','id');
    }
}
