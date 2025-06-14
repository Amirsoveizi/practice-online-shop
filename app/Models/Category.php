<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'table_categories';
    
    protected $fillable = ['name', 'slug'];

    public function products()
    {
        return $this->hasMany(Product::class, 'table_categories');
    }
}
