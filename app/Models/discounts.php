<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class discounts extends Model
{
    use HasFactory;

    protected $table = 'discounts';
    protected $primaryKey = 'id';
    protected $fillable = ['name',
                        'description',
                        'discount_percent',
                        'active'];
    public $timestamps = false;
}
