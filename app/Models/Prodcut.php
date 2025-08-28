<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodcut extends Model
{
    use HasFactory;
    protected $fillable = [
        'oil_type_id',
        'oil_category_id',
        'grade_id', 
        'name',
        'size',
        'measurement_unit',
        'sell_price',
        'discount_price',
        'purchase_price',
        'description',
        'launch_date',
        'point',
    ];
}
