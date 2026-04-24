<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
// wallets
function Wallets(){
  $wallets= [
    [
        'key' => 'main_balance',
        'name' => 'Balance',
        'class' => 'general'
    
    ],
    [
      'key' => 'cashback_balance',
      'name' => 'Cashback',
      'class' => 'debit'
    ]
    // [
    //     'key' => 'deposit_balance',
    //     'name' => 'Deposit Wallet',
    //     'class' => 'credit'
    // ],
    // [
    //     'key' => 'withdrawal_balance',
    //     'name' => 'Withdrawal Wallet',
    //     'class' => 'debit'
    // ],
    

  ];
  return json_decode(json_encode($wallets));
}

// notification amount
function TotalNotifications(){
  $total=DB::table('notifications')->where('status->admin','unread')->count();
  if($total >= 99){
    return '99+';
  }else{
    return $total;
  }
}

// nigeria states 
function NigeriaStates(){
  $states=[
  "Abia",
  "Adamawa",
  "Akwa Ibom",
  "Anambra",
  "Bauchi",
  "Bayelsa",
  "Benue",
  "Borno",
  "Cross River",
  "Delta",
  "Ebonyi",
  "Edo",
  "Ekiti",
  "Enugu",
  "FCT - Abuja",
  "Gombe",
  "Imo",
  "Jigawa",
  "Kaduna",
  "Kano",
  "Katsina",
  "Kebbi",
  "Kogi",
  "Kwara",
  "Lagos",
  "Nasarawa",
  "Niger",
  "Ogun",
  "Ondo",
  "Osun",
  "Oyo",
  "Plateau",
  "Rivers",
  "Sokoto",
  "Taraba",
  "Yobe",
  "Zamfara"
];
return json_decode(json_encode($states));
}

// format price
function FormatPrice($amount,$type){
  $api_settings=json_decode(DB::table('settings')->where('key','api_settings')->first()->value ?? '{}');
  
  if(($api_settings->method ?? 'percentage') == 'percentage'){
    $fee=(($api_settings->{$type}  ?? 0) * $amount)/100;
    return round($amount + $fee,0);
  }else{
    $fee=($api_settings->{$type} ?? 0);
    return $amount + $fee;
  }

}

// mobile networks
function MobileNetworks(){
  $json=[
    'mtn' => [
      'name' => 'MTN',
      'api_code' => '01',
      'logo' => 'mtn-logo-png_seeklogo-95716.png'
    ],
    'glo' => [
      'name' => 'Glo',
      'api_code' => '02',
      'logo' => 'glo-limited-logo-png_seeklogo-491131.png'
    ],
    'airtel' => [
      'name' => 'Airtel',
      'api_code' => '04',
      'logo' => 'airtel-logo-png_seeklogo-168290.png'
    ],
    '9mobile' => [
      'name' => '9Mobile',
      'api_code' => '03',
      'logo' => '9mobile-logo-png_seeklogo-481168.png'
    ]
  ];
  return json_decode(json_encode($json));
}

// generate id
function GenerateID(){
  return substr(strtoupper(Str::random(8).time()),0,16);
}
?>