<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'price', 'description', 'volume_id', 'category_id', 'brand_id', 'country_id', 'region_id', 'age_id','characteristics_id', 'alcohol_percentage_id', 'stock'
        ];
}
