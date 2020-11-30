<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CerfTypes extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'cerf_types';
    public $timestamps = true;
    protected $fillable = [
        'name',
        'period_date'
    ];
    public function certification()
    {
        return $this->hasMany('App\Models\Certification');
    }
}
