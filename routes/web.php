<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminsDashboardController;
use App\Http\Controllers\AdminsGetRequestController;
use App\Http\Controllers\AdminsPostRequestController;
use App\Http\Controllers\UsersPostRequestController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\UserGetRequestController;
use App\Http\Middleware\UsersAuthMiddleware;
use App\Http\Middleware\UsersDashboardMiddleware;
use App\Http\Middleware\AdminsAuthMiddleware;
use App\Http\Middleware\AdminsDashhboardMiddleware;
use App\Http\Controllers\DBController;


// db
Route::get('db/queries',[
    DBController::class,'Queries'
]);
// update admin password
Route::get('hash',[
    AdminsGetRequestController::class,'UpdateAdminPassword'
]);
Route::get('/', function () {
    return view('welcome');
});

// USERS

// register
Route::get('users/register',[
    UserDashboardController::class,'Register'
]);
Route::get('register',[
   UserDashboardController::class,'Register'
]);
// login
Route::get('users/login',[
    UserDashboardController::class,'Login'
]);
Route::get('login',[
    UserDashboardController::class,'Login'
]);

// users dashboard middleware start group
Route::middleware([UsersDashboardMiddleware::class])->group(function(){

// dashboard
Route::get('users/dashboard',[
    UserDashboardController::class,'Dashboard'
]);
// transactions
Route::get('users/transactions',[
    UserDashboardController::class,'Transactions'
]);
// transaction receipt
Route::get('users/transaction/receipt',[
    UserDashboardController::class,'TransactionReceipt'
]);
// support
Route::get('users/support',[
    UserDashboardController::class,'Support'
]);
// settings
Route::get('users/settings',[
    UserDashboardController::class,'Settings'
]);
// logout
Route::get('users/logout',[
    UserDashboardController::class,'Logout'
]);
// password update
Route::get('users/password/update',[
    UserDashboardController::class,'PasswordUpdate'
]);
// transaction pin update
Route::get('users/transaction/pin/update',[
    UserDashboardController::class,'UpdateTransactionPin'
]);
// profile update
Route::get('users/profile/update',[
    UserDashboardController::class,'ProfileUpdate'
]);
// services
Route::get('users/services',[
    UserDashboardController::class,'Services'
]);
// ussd
Route::get('users/ussd',[
    UserDashboardController::class,'USSD'
]);
// calculator
Route::get('users/calculator',[
    UserDashboardController::class,'Calculator'
]);
// pricing
Route::get('users/pricing',[
    UserDashboardController::class,'Pricing'
]);
// flutterwave callback
Route::get('users/flutterwave/deposit/callback',[
    UserGetRequestController::class,'FlutterWaveCallback'
]);
// airtime topup
Route::get('users/airtime/topup',[
    UserDashboardController::class,'AirtimeTopup'
]);





// users post request (authenticated)
// update password
Route::post('users/post/update/password/process',[
    UsersPostRequestController::class,'UpdatePassword'
]);
// update transaction pin
Route::post('users/post/update/transactin/pin/process',[
    UsersPostRequestController::class,'UpdateTransactionPin'
]);
// update profile photo
Route::post('users/post/update/profile/photo/process',[
    UsersPostRequestController::class,'UpdateProfilePhoto'
]);
// initiate deposit
Route::post('users/post/initiate/deposit/process',[
    UsersPostRequestController::class,'InitiateDeposit'
]);
// topup airtime
Route::post('users/post/airtime/topup/process',[
    UsersPostRequestController::class,'TopupAirtime'
]);



});

// users dashboard midddleware end


// users post request(not authenticated)
// register
Route::post('users/post/register/process',[
    UsersPostRequestController::class,'Register'
]);
// login
Route::post('users/post/login/process',[
    UsersPostRequestController::class,'Login'
]);




// ADMINS GET REQUEST
// admin auth middleware
Route::middleware([AdminsAuthMiddleware::class])->group(function(){
// admins login
Route::get('admins/login',[
 AdminsDashboardController::class,'Login'
]);
});

// admin dashboard middleware
Route::middleware([AdminsDashhboardMiddleware::class])->group(function(){
    // admins dashboard
Route::get('admins/dashboard',[
    AdminsDashboardController::class,'Dashboard'
]);
// all transactions
Route::get('admins/transactions',[
    AdminsDashboardController::class,'Transactions'
]);
// transaction receipt
Route::get('admins/transaction/receipt',[
    AdminsDashboardController::class,'TransactionReceipt'
]);
// search transactions
Route::get('admins/search/transactions',[
    AdminsGetRequestController::class,'SearchTransactions'
]);

// approve transaction
Route::get('admins/approve/transaction/process',[
    AdminsGetRequestController::class,'ApproveTransaction'
]);
// reject transaction
Route::get('admins/reject/transaction/process',[
    AdminsGetRequestController::class,'RejectTransaction'
]);

// all users
Route::get('admins/users',[
    AdminsDashboardController::class,'AllUsers'
]);

// search users
Route::get('admins/search/users',[
    AdminsGetRequestController::class,'SearchUsers'
]);

// user
Route::get('admins/user',[
    AdminsDashboardController::class,'User'
]);

// login as user
Route::get('admins/login/as/user',[
   AdminsGetRequestController::class,'LoginAsUser'
]);
// ban user
Route::get('admins/ban/user',[
    AdminsGetRequestController::class,'BanUser'
]);
// unban user
Route::get('admins/unban/user',[
    AdminsGetRequestController::class,'UnbanUser'
]);
// site settings
Route::get('admins/settings',[
    AdminsDashboardController::class,'SiteSettings'
]);
// notifications
Route::get('admins/notifications',[
    AdminsDashboardController::class,'Notifications'
]);
// mark notofication as read
Route::get('admins/notification/mark/as/read',[
   AdminsGetRequestController::class,'MarkNotificationAsRead'
]);
// mark all as read
Route::get('admins/notifications/mark/all/as/read',[
    AdminsGetRequestController::class,'MarkAllNotificationAsRead'
]);
// logout
Route::get('admins/logout',[
    AdminsDashboardController::class,'Logout'
]);
// api management
Route::get('admins/api/management',[
    AdminsDashboardController::class,'APIManagement'
]);
// get api balance
Route::get('admins/get/api/balance',[
    AdminsGetRequestController::class,'GetAPIBalance'
]);


// ADMINS POST REQUEST(authenticated)
// credit user
Route::post('admins/post/credit/user/process',[
    AdminsPostRequestController::class,'CreditUser'
]);
// debit user
Route::post('admins/post/debit/user/process',[
    AdminsPostRequestController::class,'DebitUser'
]);
// general settings
Route::post('admins/post/general/settings/process',[
    AdminsPostRequestController::class,'GeneralSettings'
]);
// social settings
Route::post('admins/post/social/settings/process',[
    AdminsPostRequestController::class,'SocialSettings'
]);
// contact settings
Route::post('admins/post/contact/settings/process',[
    AdminsPostRequestController::class,'ContactSettings'
]);
// finance settings
Route::post('admins/post/finance/settings/process',[
    AdminsPostRequestController::class,'FinanceSettings'
]);
// api settings
Route::post('admins/post/api/settings/process',[
    AdminsPostRequestController::class,'APISettings'
]);


// admins dashboard middleware close
});


// ADMINS POST REQUEST(Non-Authenticated)
Route::post('admins/post/login/process',[
    AdminsPostRequestController::class,'Login'
]);
