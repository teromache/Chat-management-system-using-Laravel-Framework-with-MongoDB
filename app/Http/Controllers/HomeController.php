<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Report;
use App\Models\fav_keyword;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    
    public function superAdminHome(){

        //card view count
        $chatroom = DB::table('chats')->where('isGroupChat',true)->count();
        $user = DB::table('users')->count();
        $report = DB::table('reports')->count();
        $admin = DB::table('admin')->count();

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

        return view('super_admin.super_admin_home')
            ->with(compact('chatroom'))
            ->with(compact('user'))
            ->with(compact('report'))
            ->with(compact('admin'))
            ->with(compact('user'))
            ->with(compact('bs_count'))
            ->with(compact('fn_count'))
            ->with(compact('aw_count'))
            ->with(compact('study_count'))
            ->with(compact('game_count'))
            ->with(compact('lazy_count'))
            ->with(compact('talk_count'))
            ->with(compact('eat_count'))
            ->with(compact('sleep_count'))
            ->with(compact('discuss_count'));
        }

        public function adminHome(){

            //card view count
            $chatroom = DB::table('chats')->where('isGroupChat',true)->count();
            $user = DB::table('users')->count();
            $report = DB::table('reports')->count();
            $admin = DB::table('admin')->count();
    
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
    
            return view('admin.admin_home')
                ->with(compact('chatroom'))
                ->with(compact('user'))
                ->with(compact('report'))
                ->with(compact('admin'))
                ->with(compact('user'))
                ->with(compact('bs_count'))
                ->with(compact('fn_count'))
                ->with(compact('aw_count'))
                ->with(compact('study_count'))
                ->with(compact('game_count'))
                ->with(compact('lazy_count'))
                ->with(compact('talk_count'))
                ->with(compact('eat_count'))
                ->with(compact('sleep_count'))
                ->with(compact('discuss_count'));
            }
    }
        

