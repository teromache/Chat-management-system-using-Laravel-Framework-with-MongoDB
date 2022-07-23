<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class UserReport extends Eloquent
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'report';

    protected $fillable = [
        'Reporter_username',
        'Offenders_username',
        'report_type'
    ];
}
