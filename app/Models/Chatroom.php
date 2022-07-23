<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use App\Http\Models\VBUser;

class Chatroom extends Eloquent
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'chats';
    
    protected $fillable = [
        'isGroupChat',
        'chatName', 
        'createdAt',
        'updatedAt'
    ];

    public function chatroom()
    {
        return $this->hasOne(VBUser::class,"groupAdmin");
    }
}
