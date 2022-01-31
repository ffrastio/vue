<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name', 'slug', 'description', 'price', 'type', 'quantity', 'is_loan'
    ];

    protected $hidden = [];

    public function Galleries()
    {
        return $this->hasMany(ProductGalleries::class, 'product_id');
    }
}
