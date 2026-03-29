<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    // register
    public function Register(){
        return view('users.auth.register');
    }
    // login
    public function Login(){
        return view('users.auth.login');
    }
    // dashboard
    public function Dashboard(){
        return view('users.dashboard',[
              'social_settings' => json_decode(DB::table('settings')->where('key','social_settings')->first()->value ?? '{}'),
        ]);
    }
    // transactions
   public function Transactions(){
    return view('users.transactions');
   }
     //  support
     public function Support(){
        return view('users.support',[
            'contact_settings' => json_decode(DB::table('settings')->where('key','contact_settings')->first()->value ?? '{}'),
            'social_settings' => json_decode(DB::table('settings')->where('key','social_settings')->first()->value ?? '{}'),

        ]);
     }

    //  settings
    public function Settings(){
        return view('users.settings',[
            'contact_settings' => json_decode(DB::table('settings')->where('key','contact_settings')->first()->value ?? '{}'),
        ]);
    }

    // logout
    public function Logout(){
    Auth::guard('users')->logout();
    return redirect('users/login');
    }


}
