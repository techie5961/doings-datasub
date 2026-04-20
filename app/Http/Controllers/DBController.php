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

    if(!Schema::hasTable('chats')){
        Schema::create('chats',function($table){
                $table->id();
                $table->text('message')->nullable();
                $table->string('photo')->nullable();
                $table->string('reply_to')->nullable();
                $table->string('status')->default('unread');
                $table->timestamp('updated')->useCurrent();
                $table->timestamp('date')->useCurrent();
        });
    }

    if(!Schema::hasColumn('chats','json')){
        Schema::table('chats',function($table){
            $table->json('json')->nullable();
            $table->string('uniqid')->nullable();
        });
    }

    if(!Schema::hasColumn('chats','auto_reply')){
        Schema::table('chats',function($table){
            $table->string('auto_reply')->default('no');
        });
    }

    if(!Schema::hasColumn('chats','user_id')){
        Schema::table('chats',function($table){
            $table->bigInteger('user_id')->after('id')->nullable();
        });
    }
     if(!Schema::hasColumn('chats','sent_by')){
        Schema::table('chats',function($table){
            $table->string('sent_by')->default('me');
        });
    }


    return response()->json([
        'message' => 'Queries ran successfull',
        'status' => 'success'
    ]);
   }
}
