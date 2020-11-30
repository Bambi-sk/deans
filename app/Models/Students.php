<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;
    protected $table = 'students';
    public $timestamps = true;
    protected $fillable = [
        'firstname',
        'lastname',
        'address',
        'birthdate',
        'id_nation',
        'id_stream',
        'id_spec',
        'id_type_study'
    ];
}
