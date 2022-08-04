<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart_items extends Model
{
    use HasFactory;

    protected $table = 'cart_items';
    protected $primaryKey = 'id';
    protected $fillable = ['user_id',
                        'product_id',
                        'quantity',
                        'created_at'];
    public $timestamps = false;                    
}
