<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\VBUser;
use DB;

class UserReportController extends Controller
{
    public function index()
    {
        $report = Report::all();
        return view('super_admin.user_report',compact('report'));
    }

    public function index_admin()
    {
        $report = Report::all();
        return view('admin.user_report',compact('report'));
    }

    //ban user for super admin
    public function ban_user(Request $request)
    {

        $offender_email = $request->get('offender_email');
        $status = Report::where('offenders_email',$offender_email)->update(['status'=>true]);
        $count = Report::select('*')->where("offenders_email","=",$offender_email)->count();

        $report_type = Report::select('report_type')->where("offenders_email","=",$offender_email)->get();//array
       
        $user= VBUser::where('email',$offender_email)->update(['isBan'=>true]);

        $body = "";

        //send report email to user 
        $body .= "We are received <b>".$count." report</b> for account associated with ".$offender_email.". You will be ban from using the Virtual Buddy App for certain time because you have been reported for doing an inapropriate activity in the chat base on the list below. For more enquiries please email us at virtualmanagement2022@gmail.com or call us at <i>09-91939495.</i> <br><br> List of inapropriate activity <br>";//msg

        $no = 1;
        foreach($report_type as $data)
        {
            $body .= $no.".".$data->report_type ."<br>"; 
            $no++;
        }
        

        \Mail::send('layouts.email-ban',['body'=>$body], function($message) use($offender_email){
            $message->from('virtualmanagement2022@gmail.com','Virtual Buddy App');
            $message->to($offender_email)
                    ->subject('Ban Report');
        });

        return redirect('/user_report')->with('success','User has been succesfully ban');
    }

    //ban user for admin
    public function ban_user_admin(Request $request)
    {

        $offender_email = $request->get('offender_email');
        $status = Report::where('offenders_email',$offender_email)->update(['status'=>true]);
        $count = Report::select('*')->where("offenders_email","=",$offender_email)->count();

        $report_type = Report::select('report_type')->where("offenders_email","=",$offender_email)->get();//array
       
        $user= VBUser::where('email',$offender_email)->update(['isBan'=>true]);

        $body = "";

        //send report email to user 
        $body .= "We are received <b>".$count." report</b> for account associated with ".$offender_email.". You will be ban from using the Virtual Buddy App for certain time because you have been reported for doing an inapropriate activity in the chat base on the list below. For more enquiries please email us at virtualmanagement2022@gmail.com or call us at <i>09-91939495.</i> <br><br> List of inapropriate activity <br>";//msg

        $no = 1;
        foreach($report_type as $data)
        {
            $body .= $no.".".$data->report_type ."<br>"; 
            $no++;
        }
        

        \Mail::send('layouts.email-ban',['body'=>$body], function($message) use($offender_email){
            $message->from('virtualmanagement2022@gmail.com','Virtual Buddy App');
            $message->to($offender_email)
                    ->subject('Ban Report');
        });

        return redirect('/user_report_admin')->with('success','User has been succesfully ban');
    }

     //unban user for super admin
     public function unban_user(Request $request){

        $offender_email = $request->get('offender_email');
        $user= VBUser::where('email',$offender_email)->update(['isBan'=>false]);
        Report::where('offenders_email',$offender_email)->delete();


        //send unban email to user
        $body = "Your account ".$offender_email." has been unban and you are allowed to use the Virtual Buddy App again. Please be careful with your action in using Virtual Buddy App to avoid any problems in the near future. For more enquiries please contact us at virtualmanagement2022@gmail.com or call us at <i>09-91939495</i>.";
        

        \Mail::send('layouts.email-unban',['body'=>$body], function($message) use($offender_email){
            $message->from('virtualmanagement2022@gmail.com','Virtual Buddy App');
            $message->to($offender_email)
                    ->subject('Unban Report');
        });

        return redirect('/user_report')->with('success','User has been succesfully unban');
    }

     //unban user for admin
     public function unban_user_admin(Request $request){

        $offender_email = $request->get('offender_email');
        $user= VBUser::where('email',$offender_email)->update(['isBan'=>false]);
        Report::where('offenders_email',$offender_email)->delete();


        //send unban email to user
        $body = "Your account ".$offender_email." has been unban and you are allowed to use the Virtual Buddy App again. Please be careful with your action in using Virtual Buddy App to avoid any problems in the near future. For more enquiries please contact us at virtualmanagement2022@gmail.com or call us at <i>09-91939495</i>.";
        

        \Mail::send('layouts.email-unban',['body'=>$body], function($message) use($offender_email){
            $message->from('virtualmanagement2022@gmail.com','Virtual Buddy App');
            $message->to($offender_email)
                    ->subject('Unban Report');
        });

        return redirect('/user_report_admin')->with('success','User has been succesfully unban');
    }

    public function report_detail($email)
    {
        $offender_email = $email;
        $test = Report::where('offenders_email',$email)->get();
        return view('super_admin.report_detail',compact('test','offender_email'));
    }

    public function report_detail_admin($email)
    {
        $offender_email = $email;
        $test = Report::where('offenders_email',$email)->get();
        return view('admin.report_detail',compact('test','offender_email'));
    }
}
