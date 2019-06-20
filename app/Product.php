<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'price', 'description', 'volume_id', 'category_id', 'brand_id', 'country_id', 'region_id', 'age','characteristics_id', 'alcohol_percentage_id', 'stock'
        ];

    public function volume(){
        return $this->belongsTo('App\Volume');
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function brand(){
        return $this->belongsTo('App\Brand');
    }

    public function country(){
        return $this->belongsTo('App\Country');
    }

    public function region(){
        return $this->belongsTo('App\Region');
    }

    public function photo(){
        return $this->belongsTo('App\Photo');
    }
}
