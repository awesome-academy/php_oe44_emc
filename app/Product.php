<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'content', 
        'price', 
        'quantity', 
        'star',
    ];

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Categories::class);
    }

    public function product_images()
    {
        return $this->hasMany(Product_Image::class);
    }
}
