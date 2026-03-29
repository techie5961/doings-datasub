<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class UsersPostRequestController extends Controller
{
    // REGISTER
    public function Register(){
        $name=trim(request('first_name')).' '.trim(request('last_name'));
        $phone=Str::replaceFirst('+234','',request('phone'));
        $email=request('email');
        $state=request('state');
        $ref=request('ref');
        $password=request('password');
        $confirm_password=request('confirm_password');
        $pin=request('pin');
        
        // sanitize phone number
        if(str::startsWith($phone,'234')){
            $phone=Str::replaceFirst('234','',$phone);
        }
        if(str::startsWith($phone,'0')){
            $phone=Str::replaceFirst('0','',$phone);
        }
        $phone='0'.$phone;

        // make sure its valid phone number
        if(strlen($phone) != 11){
            return response()->json([
                'message' => 'Please enter a valid phone number',
                'status' => 'error'
            ]);
        }
        // make sure ref exists
        if($ref != '' && !DB::table('users')->where('phone',$ref)->exists()){
            return response()->json([
                'message' => 'Invalid referral phone number',
                'status' => 'error'
            ]);
        }
        // validate password
        if(!Hash::check($confirm_password,Hash::make($password))){
    return response()->json([
        'message' => 'Password and confirm password must be the same',
        'status' => 'error'
    ]);
        }
        // check if email exists
        if(DB::table('users')->where('email',$email)->exists()){
            return response()->json([
                'message' => 'Email address already exists',
                'status' => 'error'
            ]);
        }
        // check if phone number already exists
        if(DB::table('users')->where('phone',$phone)->exists()){
            return response()->json([
                'message' => 'Phone number already exists',
                'status' => 'error'
            ]);
        }
        // insert into database
        DB::table('users')->insert([
            'uniqid' => strtoupper(Str::random(12)),
            'username' => $phone,
            'phone' => $phone,
            'country' => 'Nigeria',
            'state' => $state,
            'name' => $name,
            'email' => $email,
            'ref' => $ref == '' ? '' : $ref,
            'password' => Hash::make($password),
            'pin' => Hash::make($pin),
            'updated' => Carbon::now(),
            'date' => Carbon::now()
        ]);
        return response()->json([
            'message' => 'Registration successfull,redirecting...',
            'status' => 'success'
        ]);

      
    }
    // login
    public function Login(){
          $phone=Str::replaceFirst('+234','',request('phone'));
           $password=request('password');
          // sanitize phone number
        if(str::startsWith($phone,'234')){
            $phone=Str::replaceFirst('234','',$phone);
        }
        if(str::startsWith($phone,'0')){
            $phone=Str::replaceFirst('0','',$phone);
        }
        $phone='0'.$phone;
         // make sure its valid phone number
        if(strlen($phone) != 11){
            return response()->json([
                'message' => 'Please enter a valid phone number',
                'status' => 'error'
            ]);
        }
        // verify if user exists
        if(!DB::table('users')->where('phone',$phone)->exists()){
            return response()->json([
                'message' => 'Phone number not found',
                'status' => 'error'
            ]);
        }
        // select user
        $user=DB::table('users')->where('phone',$phone)->first();
        if(!Hash::check($password,$user->password)){
    return response()->json([
        'message' => 'Invalid password',
        'status' => 'error'
    ]);

        }
        Auth::guard('users')->loginUsingId($user->id);
        return response()->json([
            'message' => 'Login successfull,redirecting...',
            'status' => 'success'
        ]);

    }
}
