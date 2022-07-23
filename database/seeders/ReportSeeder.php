<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('user_report')->insert([
            'reporter_username'=>'Arif Azmi',
            'offenders_name'=>'Wan Putera',
            'offenders_email'=>'wanputera17@gmail.com',
            'report_type'=>'Body Shamming',  
          ]);
  
          DB::table('user_report')->insert([
              'reporter_username'=>'Azri',
              'offenders_name'=>'Wan Putera',
              'offenders_email'=>'wanputera17@gmail.com',
              'report_type'=>'Fake News',  
            ]);

            DB::table('user_report')->insert([
              'reporter_username'=>'Ahmad Fahmi',
              'offenders_name'=>'Wan Putera',
              'offenders_email'=>'wanputera17@gmail.com',
              'report_type'=>'Abusive Word',  
            ]);
  
            DB::table('user_report')->insert([
              'reporter_username'=>'Hakim',
              'offenders_name'=>'Arif Azmi',
              'offenders_email'=>'teromache99@gmail.com',
              'report_type'=>'Abusive Word',  
            ]);

            DB::table('user_report')->insert([
              'reporter_username'=>'Azri Mustaqim',
              'offenders_name'=>'Ain Azira',
              'offenders_email'=>'teromache99@gmail.com',
              'report_type'=>'Fake News',  
            ]);
  
            DB::table('user_report')->insert([
              'reporter_username'=>'Wan Putera',
              'offenders_name'=>'Azri',
              'offenders_email'=>'azriklatey01@gmail.com',
              'report_type'=>'Abusive Word',  
            ]);

            DB::table('user_report')->insert([
              'reporter_username'=>'Hakim',
              'offenders_name'=>'Azri',
              'offenders_email'=>'azriklatey01@gmail.com',
              'report_type'=>'Body Shamming',  
            ]);
   

    }
}
