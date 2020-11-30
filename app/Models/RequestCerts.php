<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestCerts extends Model
{
    use HasFactory;

    protected $table = 'request_certs';
    public $timestamps = true;
    protected $fillable = [
        'curr_date',
        'is_approved',
        'student_id',
        'cert_id'
    ];
}
