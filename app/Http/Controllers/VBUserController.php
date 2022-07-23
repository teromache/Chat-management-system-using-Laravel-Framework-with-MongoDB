<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VBUser;

class VBUserController extends Controller
{
    //

    public function index_admin(){
        $user = VBUser::all(); 
        return view('admin.vbuser',compact('user'));
    }

    public function index_superAdmin(){
        $user = VBUser::all();
        return view('super_admin.vbuser',compact('user'));
    }

    public function update_user(Request $request, $id){
        $user = VBUser::find($id);
        $user->role = $request->get('role');
        $user->save();
        return redirect('/VB_User_SuperAdmin');
    }

    //ban user for admin
    public function ban_user_admin($id){
        $user = VBUser::find($id);

        $user->isBan = 1;
        $user->save();
        return redirect('/VB_User_Admin');
    }
    
    //unban user for admin
    public function unban_user_admin($id){
        $user = VBUser::find($id);

        $user->isBan = 0;
        $user->save();
        return redirect('/VB_User_Admin');
    }

    public function update(Request $request, $id)
    {
        $user= VBUser::find($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');

        $role = $request->get('role');

        if( $role == 'Virtual Buddy')
        {
            $user->is_vb = true;
        }
        else
            $user->is_vb = false;
        
  
        $user->save();
        return redirect('/VB_User_SuperAdmin')->with('success', 'User has been successfully update');
    }

    public function update_user_admin(Request $request, $id)
    {
        $user= VBUser::find($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');

        $role = $request->get('role');

        if( $role == 'Virtual Buddy')
        {
            $user->is_vb = true;
        }
        else
            $user->is_vb = false;
        
  
        $user->save();
        return redirect('/VB_User_Admin')->with('success', 'User has been successfully update');
    }
}
