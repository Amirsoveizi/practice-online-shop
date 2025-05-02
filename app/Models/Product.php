<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'table_products';
    
    protected $fillable = ['name', 'slug', 'number', 'price', 'table_categories'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'table_categories');
    }
}
