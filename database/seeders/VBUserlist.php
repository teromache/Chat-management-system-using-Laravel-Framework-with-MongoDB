<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VBUserlist extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        

        DB::table('vbuser')->insert([
            'name'=>'Ain Azira',
            'student_id'=>'2019123456',
            'course'=>'CS230',
            'email'=>'nurulain.azira99@gmail.com',
            'phone_number'=>'011-54312313',
            'created_at' => '04',
            'isBan' => ''
        
        ]);

        DB::table('vbuser')->insert([
            'name'=>'Kadoya Tsukasa',
            'student_id'=>'20203434343',
            'course'=>'CS230',
            'email'=>'teromache99@gmail.com',
            'phone_number'=>'013-87879900',
            'created_at' => '02',
            'isBan' => ''
        ]);

        DB::table('vbuser')->insert([
            'name'=>'Godai Yusuke',
            'student_id'=>'20209901010',
            'course'=>'CS230',
            'email'=>'vbamanagement2022@gmail.com',
            'phone_number'=>'014-12123434',
            'created_at' => '01',
            'isBan' => ''
        ]);

        DB::table('vbuser')->insert([
            'name'=>'Rononoa Zoro',
            'student_id'=>'202011111',
            'course'=>'CS230',
            'email'=>'wanputera17@gmail.com',
            'phone_number'=>'011-1233456',
            'created_at' => '03',
            'isBan' => ''
        ]);

        DB::table('vbuser')->insert([
            'name'=>'Saitama',
            'student_id'=>'2019123456',
            'course'=>'CS230',
            'email'=>'teromache99@gmail.com',
            'phone_number'=>'011-54312313',
            'created_at' => '11',
            'isBan' => ''
        ]);

        DB::table('vbuser')->insert([
            'name'=>'Gojo Satouru',
            'student_id'=>'20203434343',
            'course'=>'CS230',
            'email'=>'teromache99@gmail.com',
            'phone_number'=>'013-87879900',
            'created_at' => '09',
            'isBan' => ''
        ]);

        DB::table('vbuser')->insert([
            'name'=>'Sukuna',
            'student_id'=>'20209901010',
            'course'=>'CS230',
            'email'=>'teromache99@gmail.com',
            'phone_number'=>'014-12123434',
            'created_at' => '12',
            'isBan' => ''
        ]);

    }
}
