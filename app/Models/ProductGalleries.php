<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductGalleries extends Model
{
    use HasFactory, SoftDeletes;


    protected $fillable = [
        'product_id', 'photo', 'is_default'
    ];

    protected $hidden = [];

    public function Galleries()
    {
        return $this->hasMany(ProductGalleries::class, 'product_id');
    }
}
