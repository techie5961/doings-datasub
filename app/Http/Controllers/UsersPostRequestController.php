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

    // update password
    public function UpdatePassword(){
        // ensure old password is same as current password
        if(!Hash::check(request('old_password'),Auth::guard('users')->user()->password)){
            return response()->json([
                'message' => 'Invalid old password',
                'status' => 'error'
            ]);
        }
        // ensure new password is different from current password
        if(Hash::check(request('new_password'),Auth::guard('users')->user()->password)){
            return response()->json([
                'message' => 'New password must be different from your current password',
                'status' => 'error'
            ]);
        }
        // ensure confirm password and new password is the same
        if(!Hash::check(request('confirm_password'),Hash::make(request('new_password')))){
    return response()->json([
        'message' => 'New password and confirm password must be the same',
        'status' => 'error'
    ]);
        }
    // insert into database
        DB::table('users')->where('id',Auth::guard('users')->user()->id)->update([
            'password' => Hash::make(request('new_password')),
            'updated' => Carbon::now()
        ]);
        return response()->json([
            'message' => 'Account password updated successfully',
            'status' => 'success'
        ]);
    }


      // update transaction pin
    public function UpdateTransactionPin(){
        // ensure old pin is same as current password
        if(!Hash::check(request('old_pin'),Auth::guard('users')->user()->pin)){
            return response()->json([
                'message' => 'Invalid old pin',
                'status' => 'error'
            ]);
        }
        // ensure new pin is different from current password
        if(Hash::check(request('new_pin'),Auth::guard('users')->user()->pin)){
            return response()->json([
                'message' => 'New pin must be different from your current pin',
                'status' => 'error'
            ]);
        }
        // ensure confirm pin and new pin is the same
        if(!Hash::check(request('confirm_pin'),Hash::make(request('new_pin')))){
    return response()->json([
        'message' => 'New pin and confirm pin must be the same',
        'status' => 'error'
    ]);
        }
    // insert into database
        DB::table('users')->where('id',Auth::guard('users')->user()->id)->update([
            'pin' => Hash::make(request('new_pin')),
            'updated' => Carbon::now()
        ]);
        return response()->json([
            'message' => 'Transaction pin updated successfully',
            'status' => 'success'
        ]);
    }
    // update profile photo
    public function UpdateProfilePhoto(){
        $photo=time().'.'.request()->file('photo')->getClientOriginalExtension();
        if(request()->file('photo')->move(public_path('photos/users'),$photo)){
            DB::table('users')->where('id',Auth::guard('users')->user()->id)->update([
                'photo' => $photo,
                'updated' => Carbon::now()
            ]);
            return response()->json([
                'message' => 'Profile photo updated successfully',
                'status' => 'success'
            ]);
        }
    }
}
