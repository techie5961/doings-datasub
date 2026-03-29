<?php
use Illuminate\Support\Facades\DB;
// wallets
function Wallets(){
  $wallets= [
    [
        'key' => 'primary_balance',
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

?>