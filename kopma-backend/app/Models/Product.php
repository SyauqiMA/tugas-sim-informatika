<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    protected $with = [
        'category', 'photos'
    ];

    public function category() {
        return $this->belongsTo(ProductCategory::class);
    }

    public function photos() {
        return $this->hasMany(ProductGallery::class, 'products_id');
    }
}
