<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialities extends Model
{
    use HasFactory;
    protected $table = 'specialities';
    public $timestamps = true;
    protected $fillable = [
        'name',
        'code',
        'deans_office_id'
    ];
}
