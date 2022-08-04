<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment_details extends Model
{
    use HasFactory;

    protected $table = 'payment_details';
    protected $primaryKey = 'id';
    protected $fillable = ['order_id',
                        'amount',
                        'provider',
                        'status',
                        'created_at'];
    public $timestamps = false;
}
