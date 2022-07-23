<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('admin')->insert([
            'name'=>'Wan Putera',
            'email'=>'teromache99@gmail.com',
            'is_admin'=>'1',
            'phone_number'=>'01137982616',
            'position'=>'Lecturer',
            'role'=>'Super Admin',
            'password'=> bcrypt('123456'),
            'picture'=>'null',
        ]);

    }
}
