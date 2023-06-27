<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class staff extends Model
{
    use HasFactory;

    protected $table = 'staffs';
    protected $fillable = [
        'firstname',
        'lastname',
        'age',
        'email',
        'phoneNumber',
        'user_id',
    ];


}
