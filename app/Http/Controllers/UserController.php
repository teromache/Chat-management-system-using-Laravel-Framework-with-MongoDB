<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserController extends Controller
{
    public function create()
    {
        return view('super_admin.form');
    }

    public function store(Request $request)
    {
        $user=new User();
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $role = $request->get('role');
        $user->role = $role;
        $user->is_admin = 0;
        $user->phone = $request->get('phone');
        $user->address = $request->get('address');
        $user->picture = null;

        if($role == "Super Admin")
        {{ $user->is_admin = 1; }}
        else
        {{ $user->is_admin = 0; }}

        $password = $request->get('password');
        $hashed = Hash::make($password);
        $user->password = ($hashed);      
        $user->save();
        return redirect('adminlist_superAdmin')->with('success', 'Admin has been successfully added');
    }

    public function index_superAdmin()
    {
        $user=User::all();
        return view('super_admin.admin',compact('user'));
    }

    public function index_admin()
    {
        $user=User::all();
        return view('admin.admin_list',compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('super_admin.edit',compact('user','id'));
    }

    public function update(Request $request, $id)
    {
        $user= User::find($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $role = $request->get('role');
        $user->role = $role;
        $user->is_admin = 0;

        if($role == "Super Admin")
        {{ $user->is_admin = 1; }}
        else
        {{ $user->is_admin = 0; }}     
        $user->save();
        return redirect('adminlist_superAdmin')->with('success', 'User has been successfully update');
    }

    public function delete($_id){
        $data = User::destroy($_id);
        if($data){
            return redirect('adminlist_superAdmin')->with('delete','User has been deleted');    
        }else{
            dd('Error cannot delete this post');
        }
    }

    public function profile_superAdmin()
    {
            return view('super_admin.profiles');
        
    }

    public function profile_admin()
    {
            return view('admin.profiles');
        
    }

    function updateInfo(Request $request)
    {
             $query = User::find(Auth::user()->id);
             $query->name = $request->get('name');
             $query->email = $request->get('email');
             $query->position = $request->get('position');
             $query->phone_number = $request->get('phone');
             $query->save();
                  

             if(!$query){
                 return response()->json(['status'=>0,'msg'=>'Something went wrong.']);
             }else{
                return response()->json(['status'=>1,'msg'=>'Your profile info has been update successfuly.']);
             }
    }
    

    function changePassword(Request $request)
    {
        //Validate form
        $validator = \Validator::make($request->all(),[
            'oldpassword'=>[
                'required', function($attribute, $value, $fail){
                    if( !\Hash::check($value, Auth::user()->password) ){
                        return $fail(__('The current password is incorrect'));
                    }
                },  
             ],
             'newpassword'=>'required|min:8|max:30',
             'cnewpassword'=>'required|same:newpassword'
         ],[
             'oldpassword.required'=>'Enter your current password',
             'newpassword.required'=>'Enter new password',
             'newpassword.min'=>'New password must have atleast 8 characters',
             'newpassword.max'=>'New password must not be greater than 30 characters',
             'cnewpassword.required'=>'ReEnter your new password',
             'cnewpassword.same'=>'New password and Confirm new password must match'
         ]);

        if( !$validator->passes() ){
            return response()->json(['status'=>0,'error'=>$validator->errors()->toArray()]);
        }else{
             
         $update = User::find(Auth::user()->id)->update(['password'=>\Hash::make($request->newpassword)]);

         if( !$update ){
             return response()->json(['status'=>0,'msg'=>'Something went wrong, Failed to update password in db']);
         }else{
             return response()->json(['status'=>1,'msg'=>'Your password has been changed successfully']);
         }
        }
    }

    function updatePicture(Request $request){
        $path = 'users/images/';
        $file = $request->file('admin_image');
        $new_name = 'UIMG_'.date('Ymd').uniqid().'.jpg';

        //Upload new image
        $upload = $file->move(public_path($path), $new_name);
        
        if( !$upload ){
            return response()->json(['status'=>0,'msg'=>'Something went wrong, upload new picture failed.']);
        }else{
            //Get Old picture
            $oldPicture = User::find(Auth::user()->id)->getAttributes()['picture'];

            if( $oldPicture != '' ){
                if( \File::exists(public_path($path.$oldPicture))){
                    \File::delete(public_path($path.$oldPicture));
                }
            }

            //Update DB
            $update = User::find(Auth::user()->id)->update(['picture'=>$new_name]);

            if( !$upload ){
                return response()->json(['status'=>0,'msg'=>'Something went wrong, updating picture in db failed.']);
            }else{
                return response()->json(['status'=>1,'msg'=>'Your profile picture has been updated successfully']);
            }
        }
    }

    public function showForgotForm()
    {
        return view('auth.passwords.forgot');
    }

    public function sendResetLink(Request $request){
        $request->validate([
            'email'=>'required|email|exists:admin,email'
        ]);

        $token = \Str::random(64);
        \DB::table('password_resets')->insert([
              'email'=>$request->email,
              'token'=>$token,
              'created_at'=>Carbon::now(),
        ]);
        
        $action_link = route('reset.password.form',['token'=>$token,'email'=>$request->email]);
        $body = "We are received a request to reset the password for <b>Virtual Buddy App </b> account associated with ".$request->email.". You can reset your password by clicking the link below";

       \Mail::send('layouts.email-forgot',['action_link'=>$action_link,'body'=>$body], function($message) use ($request){
             $message->from('virtualmanagement2022@gmail.com','Virtual Buddy App');
             $message->to($request->email,'Your name')
                     ->subject('Reset Password');
       });

       return back()->with('success', 'We have e-mailed your password reset link!');
   }

   public function showResetForm(Request $request, $token = null){
    return view('auth.passwords.reset')->with(['token'=>$token,'email'=>$request->email]);
}

public function resetPassword(Request $request){
    $request->validate([
        'email'=>'required|email|exists:admin,email',
        'password'=>'required|min:5|confirmed',
        'password_confirmation'=>'required',
    ]);

    $check_token = \DB::table('password_resets')->where([
        'email'=>$request->email,
        'token'=>$request->token,
    ])->first();

    if(!$check_token){
        return back()->withInput()->with('fail', 'Invalid token');
    }else{

        User::where('email', $request->email)->update([
            'password'=>\Hash::make($request->password)
        ]);

        \DB::table('password_resets')->where([
            'email'=>$request->email
        ])->delete();

        return redirect()->route('login')->with('info', 'Your password has been changed! You can login with new password')->with('verifiedEmail', $request->email);
    }
}

    
}