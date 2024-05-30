<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'title',
        'description'
    ];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    public function variants(): HasManyThrough
    {
        return $this->hasManyThrough(Variant::class, Product::class);
    }

    public function product_images(): HasManyThrough
    {
        return $this->hasManyThrough(ProductImage::class, Product::class);
    }
}
