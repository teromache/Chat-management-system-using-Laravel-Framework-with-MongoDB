<?php

namespace App\Http\Controllers\profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile_superAdmin()
    {
            return view('super_admin.profiles');
        
    }

    public function profile_admin()
    {
            return view('admin.profile');
        
    }
}
