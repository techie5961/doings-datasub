@extends('layout.users.app')
@section('title')
    Airtime Topup
@endsection
@section('css')
    <style class="css">
        .network{
            display:flex;
            flex-direction:column;
            gap:10px;
            border:1px solid var(--rgt-01);
            align-items:center;
            padding:20px;
            border-radius:20px;
            box-shadow:0 0 10px rgba(0,0,0,0.1);
           transition: all 0.5s ease;
        }
        .network.active{
            background:var(--primary-01);
            border-color:var(--primary);

        }
       

        /* media query for pc */
       @media(min-width:800px){
         .network{
            cursor:pointer;
        }
       }
    </style>
@endsection
@section('main')
    <section class="w-full column g-10">
        {{-- plans --}}
       {{-- dstv --}}
        <template class="dstv">
            <option value="" selected disabled>Click to choose...</option>
             @foreach ($plans['TV_ID']['DStv'][0]['PRODUCT'] as $data)
            <option data-fee="{{ $settings->method == 'percentage' ? ($settings->subscriber * ($data['PACKAGE_AMOUNT'])/100) : ($settings->subscriber) }}" data-amount="{{ $data['PACKAGE_AMOUNT'] }}" value="{{ $data['PACKAGE_ID'] }}">{{ $data['PACKAGE_NAME'] }}</option>
        @endforeach
       
       </template>
        {{-- dstv --}}
        <template class="gotv">
            <option value="" selected disabled>Click to choose...</option>
             @foreach ($plans['TV_ID']['GOtv'][0]['PRODUCT'] as $data)
            <option data-fee="{{ $settings->method == 'percentage' ? ($settings->subscriber * ($data['PACKAGE_AMOUNT'])/100) : ($settings->subscriber) }}" data-amount="{{ $data['PACKAGE_AMOUNT'] }}" value="{{ $data['PACKAGE_ID'] }}">{{ $data['PACKAGE_NAME'] }}</option>
        @endforeach
       
       </template>

       {{-- dstv --}}
        <template class="startimes">
            <option value="" selected disabled>Click to choose...</option>
             @foreach ($plans['TV_ID']['Startimes'][0]['PRODUCT'] as $data)
            <option data-fee="{{ $settings->method == 'percentage' ? ($settings->subscriber * ($data['PACKAGE_AMOUNT'])/100) : ($settings->subscriber) }}" data-amount="{{ $data['PACKAGE_AMOUNT'] }}" value="{{ $data['PACKAGE_ID'] }}">{{ $data['PACKAGE_NAME'] }}</option>
        @endforeach
       
       </template>
       
        {{-- topup form --}}
        <form action="{{ url('users/post/cable/tv/process') }}" method="POST" onsubmit="PostRequest(event,this,MyFunc.Completed)" style="box-shadow:0px 0px 10px rgba(0,0,0,0.1)" class="w-full br-20 column g-10 p-20 bg-light">
           {{-- csrf token --}}
           <input type="hidden" name="_token" value="{{ @csrf_token() }}" class="inp input">
           {{-- trx pin --}}
            <input type="hidden" name="pin" class="inp input">
            {{-- plan name --}}
            <input type="hidden" name="plan_name" class="inp input">
            <strong class="c-primary">Cable TV subscription</strong>
            <strong class="desc">Cable TV</strong>
         {{-- info --}}
            <div style="border-left:4px solid var(--primary);background:var(--rgt-005)" class="w-full column g-5 p-20">
                    <span class="c-gold">DSTV/GOTV's customer care unit👇</span>
                    <span>&bull; 01-2703232, 08039003788, 08149860333, 07080630333, and 09090630333 (TOLL FREE).</span>
                    <span class="c-gold">Startiimes customer care unit👇</span>
                    <span>&bull; 094618888, 014618888.</span>
                    
            </div>
           
            {{-- new input --}}
            <div class="column g-5 w-full">
                <label>Provider</label>
                <div class="cont">
                <select onchange="MyFunc.ShowPlans(this)" name="provider" class="inp input required">
                    <option value="" selected disabled>Select Provider...</option>
                    <option value="gotv">GOTV</option>
                    <option value="dstv">DSTV</option>
                    <option value="startimes">STARTIMES</option>
                </select>
                </div>
            </div>

             {{-- new input --}}
            <div class="column group display-none g-5 w-full">
                <label>Plan</label>
                <div class="cont">
                <select onchange="MyFunc.ChoosePlan(this)" name="plan" class="inp input required">
                   <option value="" selected disabled>Select plan...</option>
                </select>
                </div>
            </div>
             {{-- new input --}}
            <div class="column g-5 w-full">
                <label>Smartcard/IUC Number</label>
                <div class="cont">
                    <input type="number" name="smartcard_number" placeholder="Enter smartcard/IUC number" inputmode="numeric" class="inp input required">
                </div>
            </div>
            {{-- new input --}}
            <div class="column g-5 w-full">
                <label>Customer Phone Number</label>
                <div class="cont">
                    <input oninput="document.querySelector('input.use-my-number').checked=false;" type="number" name="customer_phone" placeholder="Enter phone number" inputmode="numeric" class="inp input required">
                </div>
            </div>
            <label onclick="document.querySelector('input[name=customer_phone]').value='{{ Auth::guard('users')->user()->phone }}'" class="row align-center g-5">
                <input  class="use-my-number" type="checkbox">
                <span>Use my number</span>
            </label>
             {{-- new input --}}
            <div class="column display-none g-5 w-full">
                <label>Amount</label>
                <div class="cont">
                    <input type="number" name="amount" readonly placeholder="Amount to pay" inputmode="numeric" class="inp input required">
                </div>
            </div>
              {{-- new input --}}
            <div class="column g-5 w-full">
                <label>Amount to pay</label>
                <div class="cont">
                    <input type="text" name="to_pay" readonly placeholder="Amount to pay" class="inp input required">
                </div>
            </div>

           
             
           <div onclick="MyFunc.OpenConfirmationModal(this)" class="w-full btn br-1000 row align-center border-none justify-center bg-primary primary-text no-selecvt pc-pointer m-top-10 p-10 h-50 g-10">Subscribe Cable TV</div>
        </form>
    </section>
    {{-- confirmation modal --}}
    <section onclick="MyFunc.CloseConfirmationModal()" class="modal confirmation">
        <div style="gap:20px !important;" class="child column align-center text-center">
            <div class="h-70 w-70 circle column align-center justify-center bg-primary primary-text">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="40" width="40"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm-4,48a12,12,0,1,1-12,12A12,12,0,0,1,124,72Zm12,112a16,16,0,0,1-16-16V128a8,8,0,0,1,0-16,16,16,0,0,1,16,16v40a8,8,0,0,1,0,16Z"></path></svg>

            </div>
            <strong class="desc">Are you sure?</strong>
            <div class="opacity-07">
                You are about to subscribe <span class="modal-provider bold" style="opacity:1"></span> at the price of <span class="modal-amount bold" style="opacity:1"></span> for the Smartcard/IUC number <span class="modal-smartcard bold" style="opacity:1">08118768360</span>. <br>
               <span class="c-red">Please ensure the smartcard number and provider selected is correctly selected and entered to avoid loss of funds</span><br>
                <span>Do you wish to continue?</span>
            </div>
            <div class="row g-10 no-select align-center space-between w-full">
                <div onclick="MyFunc.CloseConfirmationModal()" style="border:1px solid red;color:red;" class="h-50 pc-pointer br-10 row align-center justify-center w-full">
                   No
                </div>
                   <div onclick="MyFunc.OpenPinModal()" style="border:1px solid #4caf50;color:#4caf50;" class="h-50 pc-pointer br-10 row align-center justify-center w-full">
                  Yes
                </div>
            </div>
            
        </div>
    </section>
    {{-- pin modal --}}
    <section onclick="MyFunc.HidePinModal()" class="modal pin">
        <div onclick="event.stopPropagation()" style="gap:20px !important;" class="child column">
           <strong class="font-1-5">Transaction Pin</strong>
           <hr style="background:var(--rgt-01)">
           <label>Enter transaction pin</label>
           <div class="cont">
            <input placeholder="Enter your 4 digits transaction pin" type="password" inputmode="numer" maxlength="4" class="input inp required">
           </div>

           <button onclick="MyFunc.SubmitForm(this)" class="post">Continue</button>
            
        </div>
    </section>
@endsection
@section('js')
    <script class="js">
        window.MyFunc = {
           
            CloseConfirmationModal : function(){
                document.querySelector('.confirmation.modal').classList.remove('active');
            },
            OpenConfirmationModal : function(element){
                let inps=element.closest('form').querySelectorAll('.inp.required');
                let is_empty=false;
                
                inps.forEach((inp)=>{
                    if(inp.value == ''){
                        inp.closest('.cont').classList.add('empty');
                        is_empty=true;
                    }
                });
               
                if(!is_empty){
                   
                    document.querySelector('.modal.confirmation').querySelector('.modal-provider').innerHTML=(document.querySelector('select[name=provider]').value).toUpperCase() + `(${document.querySelector('select[name=plan]').options[document.querySelector('select[name=plan]').selectedIndex].innerHTML})`;
                    document.querySelector('.modal.confirmation').querySelector('.modal-amount').innerHTML=document.querySelector('input[name=to_pay]').value;
                    document.querySelector('.modal.confirmation').querySelector('.modal-smartcard').innerHTML=document.querySelector('input[name=smartcard_number]').value;
                  
                    document.querySelector('.modal.confirmation').classList.add('active');
                }
            },
            OpenPinModal : ()=>{
                document.querySelector('.modal.confirmation').classList.remove('active');
                document.querySelector('.modal.pin').classList.add('active');
            },
            SubmitForm : (element) =>{
                if(element.closest('.modal .child').querySelector('.cont input').value == ''){
                    element.closest('.modal .child').querySelector('.cont').classList.add('empty');
                    return;
                }
                if(element.closest('.modal .child').querySelector('.cont input').value.length != 4){
                    CreateNotify('error','Please enter a valid 4 digit transaction pin');
                    return;
                }
                document.querySelector('input[name=pin]').value=element.closest('.modal .child').querySelector('.cont input').value;
                let btn=document.createElement('button');
                btn.classList.add('display-none');
                document.querySelector('form').appendChild(btn);
                btn.click();
                 if(!element.dataset.text){
                    element.dataset.text=element.innerHTML;

                }
                element.innerHTML='processing...';
                element.classList.add('disabled');
            },
            HidePinModal : ()=>{
               if(document.querySelector('form button')){
                 document.querySelector('form button').remove();
               }
                document.querySelector('.modal.pin').classList.remove('active');
              
            },
            Completed : function(response){
                 document.querySelector('.modal.pin button').classList.remove('disabled');
                document.querySelector('.modal.pin button').innerHTML=document.querySelector('.modal.pin button').dataset.text;
             
                let data=JSON.parse(response);
                if(data.status == 'success'){
                    Redirect(data.receipt);
                }
            },
            ShowPlans : (element)=>{
                document.querySelector('select[name=plan]').closest('.group').classList.remove('display-none');
                 document.querySelector('select[name=plan]').innerHTML=document.querySelector('template.' + element.value).innerHTML;
            },
            ChoosePlan : (element)=>{
                    document.querySelector('input[name=amount]').value=element.options[element.selectedIndex].dataset.amount;
                    document.querySelector('input[name=to_pay]').value='{{ $currency }}' + (parseFloat(element.options[element.selectedIndex].dataset.amount) + parseFloat(element.options[element.selectedIndex].dataset.fee)).toLocaleString();
                    document.querySelector('input[name=plan_name]').value=document.querySelector('select[name=plan]').options[document.querySelector('select[name=plan]').selectedIndex].innerHTML;
            }

        }
    </script>
@endsection