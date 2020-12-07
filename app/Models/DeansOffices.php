<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeansOffices extends Model
{
    use HasFactory;
    protected $table = 'deans_offices';
    public $timestamps = true;
    protected $fillable = [
        'dean_name',
        'stamp',
        'signature',
        'phone_number',
        'address',
        'code'
    ];
}
