<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use App\Http\Controllers\Chatroom;


class dummyUser extends Eloquent
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'dummyUser';
    protected $fillable = [
        '_id',
        'name',
        'program',
        'email',
        'semester',
        'faculty',
        'create_at'
    ];

    public function getAdmin()
    {
        return $this->belongsTo(Chatroom::class,"groupAdmin");
    }
}