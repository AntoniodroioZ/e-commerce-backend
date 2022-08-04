<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client_address extends Model
{
    use HasFactory;
    protected $table = 'client_address';
    protected $primaryKey = 'id';
    protected $fillable = ['user_id',
                        'address_line1',
                        'address_line2',
                        'city',
                        'postal_code',
                        'country',
                        'mobile_number',
                        'secondary_number'];
    public $timestamps = false;
}
