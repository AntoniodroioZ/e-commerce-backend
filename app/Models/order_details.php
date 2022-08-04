<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_details extends Model
{
    use HasFactory;
    
    protected $table = 'order_details';
    protected $primaryKey = 'id';
    protected $fillable = ['user_id',
                        'total',
                        'payment_id',
                        'created_at'];
}
