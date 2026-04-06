<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class AdminsDashboardController extends Controller
{
    // login
    public function Login(){
        return view('admins.auth.login');
    }
    // dashboard
    public function DashBoard(){
        return view('admins.dashboard',[
            'total_users' => DB::table('users')->count(),
            'today_users' => DB::table('users')->whereDate('date',Carbon::now())->count(),
            'pending_withdrawals' => DB::table('transactions')->where('type','withdrawal')->where('class','debit')->where('status','pending')->sum('amount'),
            'successfull_withdrawals' => DB::table('transactions')->where('type','withdrawal')->where('class','debit')->where('status','success')->sum('amount'),
            'rejected_withdrawals' => DB::table('transactions')->where('type','withdrawal')->where('class','debit')->where('status','rejected')->sum('amount'),
            'pending_deposits' => DB::table('transactions')->where('type','deposit')->where('class','credit')->where('status','pending')->sum('amount'),
            'successfull_deposits' => DB::table('transactions')->where('type','deposit')->where('class','credit')->where('status','success')->sum('amount'),
            'rejected_deposits' => DB::table('transactions')->where('type','deposit')->where('class','credit')->where('status','rejected')->sum('amount'),


        ]);
    }
    // transactions
    public function Transactions(){
        // variables
        $transactions=DB::table('transactions');
         $total=DB::table('transactions');
       $today=DB::table('transactions')->whereDate('date',Carbon::today());
       $sum=DB::table('transactions');

       if(!request()->has('initiated')){
        $transactions=$transactions->whereNot('status','initiated');
        $total=$total->whereNot('status','initiated');
        $today=$today->whereNot('status','initiated');
        $sum=$sum->whereNot('status','initiated');
       }
// pending

        if(request()->has('type')){
            $transactions=$transactions->where('type',request('type'));
            $total=$total->where('type',request('type'));
            $today=$today->where('type',request('type'));
            $sum=$sum->where('type',request('type'));
        }
        if(request()->has('status')){
            $transactions=$transactions->where('status',request('status'));
            $total=$total->where('status',request('status'));
            $today=$today->where('status',request('status'));
            $sum=$sum->where('status',request('status'));
        }
        if(request()->has('user_id')){
            $transactions=$transactions->where('user_id',request('user_id'));
            $total=$total->where('user_id',request('user_id'));
            $today=$today->where('user_id',request('user_id'));
            $sum=$sum->where('user_id',request('user_id'));;
        }
        if(request()->has('json_type')){
            $transactions=$transactions->where('json->type',request('json_type'));
            $total=$total->where('json->type',request('json_type'));
            $today=$today->where('json->type',request('json_type'));
            $sum=$sum->where('json->type',request('json_type'));

        }
         if(request()->has('date')){
            $transactions=$transactions->where('date',Carbon::today());
            $total=$total->where('date',Carbon::today());
            $today=$today->where('date',Carbon::today());
            $sum=$sum->where('date',Carbon::today());

        }
        
       $transactions=$transactions->orderBy('date','desc')->paginate(10);
       $transactions->getCollection()->transform(function($each){
    $each->day=Carbon::parse($each->date)->format('M d, Y');
    $each->time=Carbon::parse($each->date)->format('H:i');
    return $each;
       });
      
       
        return view('admins.transactions',[
            'total' => $total->count(),
            'today' => $today->count(),
            'sum' => $sum->sum('amount'),
            'trx' => $transactions,
            'type' => request('type'),
            'status' => request('status') == 'success' ? 'successful' : request('status')
        ]);
    }
    // transaction receipt
    public function TransactionReceipt(){
        $trx=DB::table('transactions')->where('id',request('id'))->first();
        $trx->day=Carbon::parse($trx->date)->format('d M Y');
        $trx->time=Carbon::parse($trx->date)->format('H:i');
        $trx->user=DB::table('users')->where('id',$trx->user_id)->first();
        $trx->user->frame=Carbon::parse($trx->user->date)->diffForHumans();
        return view('admins.receipt',[
            'data' => $trx
        ]);
    }

    // all users
    public function AllUsers(){
      
        $users=DB::table('users');
        if(request()->has('status')){
            $users=$users->where('status',request('status'));
        }
        if(request()->has('type')){
            $users=$users->where('type',request('type'));
        }
         if(request()->has('date')){
            $users=$users->whereDate('date',Carbon::today());
        }
        $users=$users->orderBy('date','desc')->paginate(10);
        $users->getCollection()->transform(function($each){
    $each->date_format=Carbon::parse($each->date)->format('d M Y');
    $each->frame=Carbon::parse($each->date)->diffForHumans();
    return $each;
        });
        return view('admins.users',[
            'users' => $users,
            'status' => request()->has('status') ? request('status') : 'All',
            'total_users' => DB::table('users')->count(),
            'active_users' => DB::table('users')->where('status','active')->count(),
            'today_signups' => DB::table('users')->whereDate('date',Carbon::today())->count(),
        ]);
    }
    // user 
    public function User(){
        $user=DB::table('users')->where('id',request('id'))->first();
        $user->date_format=Carbon::parse($user->date)->format('d M Y');
    $user->frame=Carbon::parse($user->date)->diffForHumans();
        return view('admins.user',[
           'data' => $user
        ]);

    }
    // site settings
    public function SiteSettings(){
        return view('admins.settings',[
            'general_settings' => json_decode(DB::table('settings')->where('key','general_settings')->first()->value ?? '{}'),
            'social_settings' => json_decode(DB::table('settings')->where('key','social_settings')->first()->value ?? '{}'),
             'contact_settings' => json_decode(DB::table('settings')->where('key','contact_settings')->first()->value ?? '{}'),
             'finance_settings' => json_decode(DB::table('settings')->where('key','finance_settings')->first()->value ?? '{}'),


        ]);
    }
    // notifications
    public function Notifications(){
      
    $notifications=DB::table('notifications');
    $notifications=$notifications->orderBy('date','desc')->paginate(10);
    $notifications->getCollection()->transform(function($each){
        $each->frame=Carbon::parse($each->date)->diffForHumans();
        return $each;
    });
        return view('admins.notifications',[
        'total' => DB::table('notifications')->count(),
        'read' => DB::table('notifications')->where('status->admins','read')->count(),
        'unread' => DB::table('notifications')->where('status->admins','unread')->count(),
        'notifications' => $notifications
        ]);
    }

    // logout
    public function Logout(){
       Auth::guard('admins')->logout();
       return redirect('admins/login');
    }

    // api management
    public function APIManagement(){
    //    balance api
    $response=Http::withToken(env('CLUBKONNECT_API_KEY'))->get('https://www.nellobytesystems.com/APIWalletBalanceV1.asp',[
            'UserID' => env("CLUBKONNECT_USER_ID"),
            'APIKey' => env('CLUBKONNECT_API_KEY')

        ]);
        if($response->successful()){
            $data=$response->json();
           
        }

        // price list api
        $prices=Http::withToken(env('CLUBKONNECT_API_KEY'))->get('https://www.nellobytesystems.com/APIDatabundlePlansV2.asp',[
            'UserID' => env('CLUBKONNECT_USER_ID')
        ]);
        if($prices->successful()){
            $prices=$prices->json();
        }
        // cable tv plans
        $cable=Http::withToken(env('CLUBKONNECT_API_KEY'))->get('https://www.nellobytesystems.com/APICableTVPackagesV2.asp',[
            'UserID' => env('CLUBKONNECT_USER_ID')
        ]);
        if($cable->successful()){
            $cable_plans=$cable->json();
        }
        // return $cable_plans;
     
        return view('admins.api.manage',[
            'balance' => $data['balance'],
            'account_number' => env('CLUBKONNECT_ACCOUNT_NUMBER'),
            'account_bank' => env('CLUBKONNECT_ACCOUNT_BANK'),
            'account_name' => env('CLUBKONNECT_ACCOUNT_NAME'),
            'total' => DB::table('transactions')->where('json->type','vtu_transaction')->whereNot('status','rejected')->count(),
            'today' => DB::table('transactions')->where('json->type','vtu_transaction')->whereNot('status','rejected')->whereDate('date',Carbon::today())->count(),
            'api_settings' => json_decode(DB::table('settings')->where('key','api_settings')->first()->value ?? '{}'),
            'prices' => $prices,
             'cable_plans' => $cable_plans
        ]);
    }


   
}
