<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    use HasFactory;

    protected $table = 'client';
    protected $primaryKey = 'id';
    protected $fillable = ['user_name',
                        'first_name',
                        'last_name',
                        'email',
                        'verified_at',
                        'password',
                        'age',
                        'session_token'];
     protected $hidden = [
        'password',
        'session_token'
    ];
    public $timestamps = false;

}
