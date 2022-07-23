<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class ChatroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('chatrooms')->insert([
        'chatroom_name'=>'Fun Room',
        'chatroom_desc'=>'Chit chat with fun',  
        'creator_name'=>'Syafiq',
        'date_created'=>'20.01.2021'
        ]);

        DB::table('chatrooms')->insert([
            'chatroom_name'=>'Gaming Room',
            'chatroom_desc'=>'Having fun with game',  
            'creator_name'=>'Putera',
            'date_created'=>'20.01.2021'
        ]);

        DB::table('chatrooms')->insert([
         'chatroom_name'=>'Chating Room',
         'chatroom_desc'=>'Talking-talking',  
         'creator_name'=>'Syafiq',
         'date_created'=>'20.01.2021'
         ]);
        
        DB::table('chatrooms')->insert([
         'chatroom_name'=>'Meeting Room',
         'chatroom_desc'=>'Just for meeting',  
         'creator_name'=>'Putera',
         'date_created'=>'20.01.2021'
        ]);
    }
}
