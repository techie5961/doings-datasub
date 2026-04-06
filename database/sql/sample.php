<?php
// db insert

    // users table
//   DB::table('users')->insert([
//         'uniqid' => strtoupper(Str::random(10)),
//         'username' => 'tonia',
//         'phone' => '07035074663',
//         'name' => 'Antonia Daniel',
//         'email' => 'tonia10@gmail.com',
//         'password' => Hash::make('Blaady05'),
//         'status' => 'active',
//         'updated' => Carbon::now(),
//         'date' => Carbon::now() 
//     ]);

// TRANSACTION TABLE
// casual
    // DB::table('transactions')->insert([
    // 'uniqid' => strtoupper(Str::random(10)),
    // 'user_id' => 3,
    // 'title' => 'Welcome Bonus',
    // 'class' => 'credit',
    // 'type' => 'welcome_bonus',
    // 'amount' => 500,
    //   'fee' => $fee,
    // 'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M224,104v96a16,16,0,0,1-16,16H48a16,16,0,0,1-16-16V104A16,16,0,0,1,48,88H208A16,16,0,0,1,224,104ZM56,72H200a8,8,0,0,0,0-16H56a8,8,0,0,0,0,16ZM72,40H184a8,8,0,0,0,0-16H72a8,8,0,0,0,0,16Z"></path></svg>',
   
    // 'wallet' => json_encode([
    //     'from' => 'admin',
    //     'to' => 'main_balance',

    // ]),
    //  'json' => json_encode([
    // 'balance' => [
    //     'before' => 0,
    //     'after' => 500
    // ],
    // 'primary_wallet' => 'Main Wallet'

    

    // ]),
    // 'status' => 'success',
    // 'updated' => Carbon::now(),
    // 'date' => Carbon::now()
    // ]);
// withdrawal
    //  DB::table('transactions')->insert([
    // 'uniqid' => strtoupper(Str::random(10)),
    // 'user_id' => 1,
    // 'title' => 'Withdrawal',
    // 'class' => 'debit',
    // 'type' => 'withdrawal',
    // 'amount' => 6000,
      //   'fee' => $fee,
    // 'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M224,104v96a16,16,0,0,1-16,16H48a16,16,0,0,1-16-16V104A16,16,0,0,1,48,88H208A16,16,0,0,1,224,104ZM56,72H200a8,8,0,0,0,0-16H56a8,8,0,0,0,0,16ZM72,40H184a8,8,0,0,0,0-16H72a8,8,0,0,0,0,16Z"></path></svg>',
 
    // 'wallet' => json_encode([
    //     'from' => 'main_balance',
    //     'to' => [
    //         'method' => 'bank',
    //         'account_number' => 50005016577,
    //         'bank_name' => 'Standard Chartered Bank',
    //         'account_name' => 'David James Abakpa'
    //     ],

    // ]),
    // 'json' => json_encode([
    // 'balance' => [
    //     'before' => 10000,
    //     'after' => 4000
    // ],
    // 'primary_wallet' => 'Main Wallet'


    // ]),
    // 'status' => 'rejected',
    // 'updated' => Carbon::now(),
    // 'date' => Carbon::now()
    // ]);
// deposit
    //  DB::table('transactions')->insert([
    // 'uniqid' => strtoupper(Str::random(10)),
    // 'user_id' => 1,
    // 'title' => 'Deposit',
    // 'class' => 'credit',
    // 'type' => 'deposit',
    // 'amount' => 6000,
      //   'fee' => $fee,
    // 'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M224,104v96a16,16,0,0,1-16,16H48a16,16,0,0,1-16-16V104A16,16,0,0,1,48,88H208A16,16,0,0,1,224,104ZM56,72H200a8,8,0,0,0,0-16H56a8,8,0,0,0,0,16ZM72,40H184a8,8,0,0,0,0-16H72a8,8,0,0,0,0,16Z"></path></svg>',
 
    // 'wallet' => json_encode([
    //      'from' => [
    //         'method' => 'bank',
    //         'account_number' => 50005016577,
    //         'bank_name' => 'Standard Chartered Bank',
    //         'account_name' => 'David James Abakpa',
    //         'receipt' => null
    //     ],
    //     'to' => 'main_balance',
       

    // ]),
    // 'json' => json_encode([
    // 'balance' => [
    //     'before' => 10000,
    //     'after' => 16000
    // ],
    // 'primary_wallet' => 'Main Wallet'


    // ]),
    // 'status' => 'rejected',
    // 'updated' => Carbon::now(),
    // 'date' => Carbon::now()
    // ]);
// api transaction airtime/data
    //  DB::table('transactions')->insert([
    // 'uniqid' => strtoupper(Str::random(10)),
    // 'user_id' => 1,
    // 'title' => 'Airtime Topup',
    // 'class' => 'debit',
    // 'type' => 'airtime_topup',
    // 'amount' => 6000,
      //   'fee' => $fee,
    // 'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M224,104v96a16,16,0,0,1-16,16H48a16,16,0,0,1-16-16V104A16,16,0,0,1,48,88H208A16,16,0,0,1,224,104ZM56,72H200a8,8,0,0,0,0-16H56a8,8,0,0,0,0,16ZM72,40H184a8,8,0,0,0,0-16H72a8,8,0,0,0,0,16Z"></path></svg>',
 
    // 'wallet' => json_encode([
    //      'from' => 'main_balance',
    //      'to' => [
    //         'mobile_number' => 08118768360,
    //         'mobile_network' => 'Glo',
    //         
    //      
    //     ],
    //     
       

    // ]),
    // 'json' => json_encode([
    // 'balance' => [
    //     'before' => 10000,
    //     'after' => 4000
    // ],
    // 'primary_wallet' => 'Main Wallet',
    
    // 'api_response' => $response,
    // 'type' => 'vtu_transaction'

    // ]),
    // 'status' => 'rejected',
    // 'updated' => Carbon::now(),
    // 'date' => Carbon::now()
    // ]);

    
// notifications

    //   DB::table('notifications')->insert([
    //         'uniqid' => Str::random(12),
    //         'url' => json_encode([
    //             'admins' => url('admins/transaction/receipt?id=2'),
    //             'users' => url('users/transaction/receipt?id=2')
    //         ]),
    //         'title' => json_encode([
    //             'users' => 'Withdrawal placed',
    //             'admins' => 'withdrawal request'
    //         ]),
    //         'body' => json_encode([
    //             'users' => 'You placed a withdrawal',
    //             'admins' => 'New withdrawal request from Emmanuel'
    //         ]),
    //         'status' => json_encode([
    //         'admins' => 'unread',
    //         'users' => 'unread'
    //         ]),
    //         'updated' => Carbon::now(),
    //         'date' => Carbon::now()
    //     ]);

