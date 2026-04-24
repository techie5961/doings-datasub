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
               'finance_settings' => json_decode(DB::table('settings')->where('key','finance_settings')->first()->value ?? '{}'),

        ]);
    }
    // transactions
   public function Transactions(){
    $transactions=DB::table('transactions')->where('user_id',Auth::guard('users')->user()->id)->whereNot('status','initiated');
    
    $transactions=$transactions->orderBy('date','desc')->paginate(10);
    $transactions->getCollection()->transform(function($each){
    $each->frame=Carbon::parse($each->date)->diffForHumans();
    return $each;
    });
    return view('users.transactions.index',[
        'transactions' => $transactions
    ]);
   }
    // transaction receipt
    public function TransactionReceipt(){
        $trx=DB::table('transactions')->where('id',request('id'))->first();
        $trx->frame=Carbon::parse($trx->date)->format('d M Y H:i');
        return view('users.transactions.receipt',[
            'data' => $trx
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

    // airtime topup
    public function AirtimeTopup(){
        return view('users.vtu.airtime');
    }

     // data topup
    public function DataTopup(){
         $data=Http::withToken(env('CLUBKONNECT_API_KEY'))->get('https://www.nellobytesystems.com/APIDatabundlePlansV2.asp',[
            'UserID' => env('CLUBKONNECT_USER_ID')
        ]);
        if($data->successful()){
            $data_plans=$data->json();
        }
        // return $data_plans;
        return view('users.vtu.data',[
            'data_plans' => $data_plans
        ]);
    }

    // index
    public function Index(){
        return view('layout.users.index');
    }
    
    // statistics
    public function Statistics(){
        
        return view('users.statistics',[
            'total_trx' => DB::table('transactions')->where('user_id',Auth::guard('users')->user()->id)->where('status','success')->count(),
            'this_week' => DB::table('transactions')->where('user_id',Auth::guard('users')->user()->id)->where('json->type','vtu_transaction')->where('status','success')->where('date',[
                Carbon::now()->startOfWeek(),
                Carbon::now()->endOfWeek()
            ])->sum('amount'),
            'this_month' => DB::table('transactions')->where('user_id',Auth::guard('users')->user()->id)->where('json->type','vtu_transaction')->whereMonth('status','success')->where('date',now()->month())->whereYear('date',now()->year())->sum('amount'),
             'total_spent' => DB::table('transactions')->where('user_id',Auth::guard('users')->user()->id)->where('json->type','vtu_transaction')->whereMonth('status','success')->sum('amount'),
             'total_funding' => DB::table('transactions')->where('status','success')->where('user_id',Auth::guard('users')->user()->id)->where('type','deposit')->sum('amount')
            
        ]);
    }

    // network status
    public function NetworkStatus(){
        return view('users.network');
    }

    // agent
    public function Agent(){
        return view('users.agent.index',[
            'settings' => json_decode(DB::table('settings')->where('key','cost_configuration')->first()->value ?? '{}')
        ]);
    }

    // vendor
    public function Vendor(){
        return view('users.vendor.index',[
            'settings' => json_decode(DB::table('settings')->where('key','cost_configuration')->first()->value ?? '{}')
        ]);
    }
    
    // faqs
    public function FAQs(){
        return view('users.faqs');
    }
    
    // chat
    public function Chat(){
        $chats=DB::table('chats')->where('user_id',Auth::guard('users')->user()->id)->limit(100)->orderBy('date','desc')->reorder('date','asc')->get();
        return view('users.chat',[
            'chats' => $chats
        ]);
    }

    // bills
    public function Bills(){
        $provider=Http::withToken(env('CLUBKONNECT_API_KEY'))->get('https://www.nellobytesystems.com/APIElectricityDiscosV2.asp',[
                    'UserID' => env('CLUBKONNECT_USER_ID')
        ]);
        return view('users.vtu.bills',[
            'providers' => $provider->json(),
            'settings' => json_decode(DB::table('settings')->where('key','api_settings')->first()->value)
        ]);
    }

    // cable tv
    public function CableTV(){
        // cable tv plans
        $cable=Http::withToken(env('CLUBKONNECT_API_KEY'))->get('https://www.nellobytesystems.com/APICableTVPackagesV2.asp',[
            'UserID' => env('CLUBKONNECT_USER_ID')
        ]);
        if($cable->successful()){
            $cable_plans=$cable->json();
        }
        // return $cable_plans['TV_ID']['GOtv'][0]['PRODUCT'][1];
            return view('users.vtu.tv',[
                'plans' => $cable_plans,
                'settings' => json_decode(DB::table('settings')->where('key','api_settings')->first()->value)
            ]);
    }

}
