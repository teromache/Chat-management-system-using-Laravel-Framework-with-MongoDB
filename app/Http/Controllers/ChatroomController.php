<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chatroom;
use App\Models\VBUser;
use DB;

class ChatroomController extends Controller
{
    //
    public function index_superAdmin()
    {
        $chatroom=Chatroom::all()->where('isGroupChat',true);
        return view('super_admin.chatroom',compact('chatroom'));
    }

    public function index_admin()
    {
        $chatroom=Chatroom::all()->where('isGroupChat',true);
        return view('admin.chatroom',compact('chatroom'));
    }

    public function test()
    {
        $photo = Chatroom::all()->getAdmin;
        dd($photo);
    }
}