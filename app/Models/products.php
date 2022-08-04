<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = ['product_name',
                        'description',
                        'price',
                        'score',
                        'discount_id',
                        'category_id',
                        'stock',
                        'img'];
}
