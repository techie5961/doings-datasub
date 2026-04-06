<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserGetRequestController extends Controller
{
    // flutterwave callback
    public function FlutterWaveCallback(){
        $transaction_id=request('transaction_id');
        $ref=request('tx_ref');
    //  return DB::table('transactions')->where('wallet->from->ref',$ref)->where('status','initiated')->where('user_id',Auth::guard('users')->user()->id)->first();
        $response=Http::withToken(env('FLUTTERWAVE_SECRET_KEY'))->get('https://api.flutterwave.com/v3/transactions/'.$transaction_id.'/verify');
        if($response->successful()){
            $data=$response->json();
            if($data['status'] == 'success'){
                $trx=DB::table('transactions')->where('wallet->from->ref',$ref)->where('status','initiated')->where('user_id',Auth::guard('users')->user()->id);
            
                if($trx->exists()){
                    $id=$trx->first()->id;
             
                DB::table('users')->where('id',Auth::guard('users')->user()->id)->update([
                    json_decode($trx->first()->wallet)->to => DB::raw(''.json_decode($trx->first()->wallet)->to.' + '.$trx->first()->amount.''),
                    'updated' => Carbon::now()
                ]);
                $balance_after=json_decode($trx->first()->json)->balance->after + $trx->first()->amount;
                DB::table('transactions')->where('id',$id)->update([
                    'status' => 'success',
                    'json->balance->after' => $balance_after
                ]);
                return redirect('users/transaction/receipt?id='.$id.'');
               }

            }
        }

        return redirect('users/dashboard');
        
        
    }
}
