<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class Post extends Eloquent
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $guarded = [];
    public $primarykey= 'id_post';


   // protected $fillable = [
        //'title',
       // 'content',
      //  'created_by',
   // ];
}
