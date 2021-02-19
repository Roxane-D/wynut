<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps=false;

    protected $fillable =  [
        "name",
        "price",
        "stock",
        "description",
        "image",
        "weight",
        "category_id",
    ];

    public function category() {
        return $this->belongsTo('App\Category');
    }
}
