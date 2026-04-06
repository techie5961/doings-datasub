<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DBController extends Controller
{
    // db queries
   public function Queries(){
     if(!Schema::hasTable('chats')){
    Schema::create('chats',function($table){
    $table->id();
    $table->bigInteger('user_id')->nullable();
    $table->text('message')->nullable();
    $table->string('status')->default('success');
    $table->timestamp('updated')->useCurrent();
    $table->timestamp('date')->useCurrent();
    });   
    }

    if(!Schema::hasColumn('transactions','data')){
        Schema::table('transactions',function($table){
            $table->json('data')->after('json')->nullable();
        });
    }
    return response()->json([
        'message' => 'Queries ran successfull',
        'status' => 'success'
    ]);
   }
}
