<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

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
    $transactions=DB::table('transactions')->where('user_id',Auth::guard('users')->user()->id);
    
    $transactions=$transactions->orderBy('date','desc')->paginate(10);
    return view('users.transactions',[
        'trx' => $transactions
    ]);
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

    // password update
    public function PasswordUpdate(){
        return view('users.password');
    }

    // update transaction  pin
    public function UpdateTransactionPin(){
    return view('users.pin.transaction');
    }
    // profile update
    public function ProfileUpdate(){
        return view('users.profile',[
            'join_date' => Carbon::parse(Auth::guard('users')->user()->date)->format('M Y')
        ]);
    }
    // services
    public function Services(){
        return view('users.services');
    }
    // ussd 
    public function USSD(){
        return view('users.ussd');
    }
    // calculator
    public function Calculator(){
        return view('users.calculator');
    }
    // pricing
    public function Pricing(){
        // data plans
        $data=Http::withToken(env('CLUBKONNECT_API_KEY'))->get('https://www.nellobytesystems.com/APIDatabundlePlansV2.asp',[
            'UserID' => env('CLUBKONNECT_USER_ID')
        ]);
        if($data->successful()){
            $data_plans=$data->json();
        }
        // cable tv plans
        $cable=Http::withToken(env('CLUBKONNECT_API_KEY'))->get('https://www.nellobytesystems.com/APICableTVPackagesV2.asp',[
            'UserID' => env('CLUBKONNECT_USER_ID')
        ]);
        if($cable->successful()){
            $cable_plans=$cable->json();
        }
        // return $cable_plans;
    
        return view('users.pricing',[
            'data_plans' => $data,
            'cable_plans' => $cable_plans
        ]);
    }

}
