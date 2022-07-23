<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Report extends Eloquent
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'user_report';

    protected $fillable = [
      'reporter_username',
      'offenders_username',
      'offenders_email',
      'isBan',
      'report_type'
    ];
}
