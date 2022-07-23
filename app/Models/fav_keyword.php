<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class fav_keyword extends Eloquent
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'fav_keyword';

    protected $fillable = [
        'fav_keyword'
    ];
}
