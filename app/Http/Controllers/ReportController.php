<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\fav_keyword;
use App\Models\dummyUser;

class ReportController extends Controller
{
    //

    public function report()
    {
        //report type report
        $body_shamming = Report::where('report_type','Body Shamming')->get();
        $bs_count = count($body_shamming);
        $fake_news = Report::where('report_type','Fake News')->get();
        $fn_count = count($fake_news);
        $abusive_word = Report::where('report_type','Abusive Word')->get();
        $aw_count = count($abusive_word);



        //favourite keyword report
        $study = fav_keyword::where('fav_keyword','Study')->get();
        $study_count = count($study);

        $game = fav_keyword::where('fav_keyword','Game')->get();
        $game_count = count($game);

        $lazy= fav_keyword::where('fav_keyword','Lazy')->get();
        $lazy_count = count($lazy);

        $talk = fav_keyword::where('fav_keyword','Talk')->get();
        $talk_count = count($talk);

        $eat = fav_keyword::where('fav_keyword','Eat')->get();
        $eat_count = count($eat);

        $sleep = fav_keyword::where('fav_keyword','Sleep')->get();
        $sleep_count = count($sleep);

        $discuss = fav_keyword::where('fav_keyword','Discuss')->get();
        $discuss_count = count($discuss);
        


        //number of user by month report
        $jan = dummyUser::where('created_at','=','01')->get();
        $jan_count = count($jan);

        $feb = dummyUser::where('created_at','=','02')->get();
        $feb_count = count($feb);

        $mac = dummyUser::where('created_at','=','03')->get();
        $mac_count = count($mac);

        $apr = dummyUser::where('created_at','=','04')->get();
        $apr_count = count($apr);

        $may = dummyUser::where('created_at','=','05')->get();
        $may_count = count($may);

        $jun = dummyUser::where('created_at','=','06')->get();
        $jun_count = count($jun);

        $jul = dummyUser::where('created_at','=','07')->get();
        $jul_count = count($jul);

        $aug = dummyUser::where('created_at','=','08')->get();
        $aug_count = count($aug);

        $sep = dummyUser::where('created_at','=','09')->get();
        $sep_count = count($sep);

        $oct = dummyUser::where('created_at','=','10')->get();
        $oct_count = count($oct);

        $nov = dummyUser::where('created_at','=','11')->get();
        $nov_count = count($nov);

        $dec = dummyUser::where('created_at','=','12')->get();
        $dec_count = count($dec);

        return view('super_admin.report_analytic',compact('bs_count','fn_count','aw_count','study_count','game_count','lazy_count','talk_count','eat_count','sleep_count','discuss_count','jan_count','feb_count','mac_count','apr_count','may_count','jun_count','jul_count','aug_count','sep_count','oct_count','nov_count','dec_count'));

    }
    public function report_admin()
    {
        //report type report
        $body_shamming = Report::where('report_type','Body Shamming')->get();
        $bs_count = count($body_shamming);
        $fake_news = Report::where('report_type','Fake News')->get();
        $fn_count = count($fake_news);
        $abusive_word = Report::where('report_type','Abusive Word')->get();
        $aw_count = count($abusive_word);



        //favourite keyword report
        $study = fav_keyword::where('fav_keyword','Study')->get();
        $study_count = count($study);

        $game = fav_keyword::where('fav_keyword','Game')->get();
        $game_count = count($game);

        $lazy= fav_keyword::where('fav_keyword','Lazy')->get();
        $lazy_count = count($lazy);

        $talk = fav_keyword::where('fav_keyword','Talk')->get();
        $talk_count = count($talk);

        $eat = fav_keyword::where('fav_keyword','Eat')->get();
        $eat_count = count($eat);

        $sleep = fav_keyword::where('fav_keyword','Sleep')->get();
        $sleep_count = count($sleep);

        $discuss = fav_keyword::where('fav_keyword','Discuss')->get();
        $discuss_count = count($discuss);
        


        //number of user by month report
        $jan = dummyUser::where('created_at','=','01')->get();
        $jan_count = count($jan);

        $feb = dummyUser::where('created_at','=','02')->get();
        $feb_count = count($feb);

        $mac = dummyUser::where('created_at','=','03')->get();
        $mac_count = count($mac);

        $apr = dummyUser::where('created_at','=','04')->get();
        $apr_count = count($apr);

        $may = dummyUser::where('created_at','=','05')->get();
        $may_count = count($may);

        $jun = dummyUser::where('created_at','=','06')->get();
        $jun_count = count($jun);

        $jul = dummyUser::where('created_at','=','07')->get();
        $jul_count = count($jul);

        $aug = dummyUser::where('created_at','=','08')->get();
        $aug_count = count($aug);

        $sep = dummyUser::where('created_at','=','09')->get();
        $sep_count = count($sep);

        $oct = dummyUser::where('created_at','=','10')->get();
        $oct_count = count($oct);

        $nov = dummyUser::where('created_at','=','11')->get();
        $nov_count = count($nov);

        $dec = dummyUser::where('created_at','=','12')->get();
        $dec_count = count($dec);

        return view('admin.report_analytic',compact('bs_count','fn_count','aw_count','study_count','game_count','lazy_count','talk_count','eat_count','sleep_count','discuss_count','jan_count','feb_count','mac_count','apr_count','may_count','jun_count','jul_count','aug_count','sep_count','oct_count','nov_count','dec_count'));

    }

}
