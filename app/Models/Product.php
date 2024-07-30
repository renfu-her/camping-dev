<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'content',
        'image',
        'sort',
        'status',
        'category_id',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

     // 定義與 Category 的關聯
     public function category()
     {
         return $this->belongsTo(Category::class);
     }

}
