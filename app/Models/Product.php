<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'category_id',
        'flag_id',
        'name',
        'description'
    ];

    public function flag(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function product_images(): HasMany
    {
        return $this->hasMany(ProductImage::class);
    }

    public function variants(): HasMany
    {
        return $this->hasMany(Variant::class);
    }

    public function cart_items(): HasMany
    {
        return $this->hasMany(CartItem::class);
    }

    /**
     * Get all of the order_items for the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function order_items(): HasMany
    {
        return $this->hasMany(OrderItem::class, 'product_id', 'id');
    }
}
