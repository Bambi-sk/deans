<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuperUsers extends Model
{
    use HasFactory;
    protected $table = 'super_users';
    public $timestamps = true;
    protected $fillable = [
        'login',
        'password',
        'firstname',
        'lastname',
        'deans_office_id'
    ];
}
