@extends('layout.users.app')
@section('title')
    Electricity Bill
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
        {{-- topup form --}}
        <form action="{{ url('users/post/electricity/bill/process') }}" method="POST" onsubmit="PostRequest(event,this,MyFunc.Completed)" style="box-shadow:0px 0px 10px rgba(0,0,0,0.1)" class="w-full br-20 column g-10 p-20 bg-light">
           {{-- csrf token --}}
           <input type="hidden" name="_token" value="{{ @csrf_token() }}" class="inp input">
           {{-- trx pin --}}
            <input type="hidden" name="pin" class="inp input">
            <strong class="c-primary">Electricity Bill Payment</strong>
            <strong class="desc">Pay Electricity Bill</strong>
             {{-- new input --}}
            <div class="column g-5 w-full">
                <label>Provider</label>
                <div class="cont">
                  <select onchange="document.querySelector('input[name=provider_name]').value=this.options[this.selectedIndex].innerHTML" name="provider" class="inp input required">
                    <option value="" selected disabled>Select Provider</option>
                    @foreach ($providers['ELECTRIC_COMPANY'] as $data)
                        <option value="{{ $data[0]['ID'] }}">{{ $data[0]['NAME'] }}</option>
                    @endforeach
                  </select>
                </div>
            </div> 
            {{-- provider name --}}
            <input type="hidden" class="inp input" name="provider_name">
             {{-- new input --}}
            <div class="column g-5 w-full">
                <label>Meter Type</label>
                <div class="cont">
                <select onchange="document.querySelector('input[name=meter_type_name]').value=this.options[this.selectedIndex].innerHTML" name="meter_type" class="inp input required">
                     <option value="" selected disabled>Select Type</option>
                    <option value="01">Prepaid</option>
                    <option value="02">PostPaid</option>
                </select>    
                </div>
            </div>
            {{-- meter type name --}}
            <input type="hidden" class="inp input" name="meter_type_name">
            {{-- new input --}}
            <div class="column g-5 w-full">
                <label>Customer Phone Number(for notifications)</label>
                <div class="cont">
                    <input oninput="document.querySelector('input.use-my-number').checked=false;" type="number" name="customer_phone" placeholder="Enter customer phone number" inputmode="numeric" class="inp input required">
                </div>
            </div>
            <label onclick="document.querySelector('input[name=customer_phone]').value='{{ Auth::guard('users')->user()->phone }}'" class="row align-center g-5">
                <input  class="use-my-number" type="checkbox">
                <span>Use my number</span>
            </label>
             {{-- new input --}}
            <div class="column g-5 w-full">
                <label>Meter Number</label>
                <div class="cont">
                    <input type="number" name="meter_number" placeholder="Enter meter number" inputmode="numeric" class="inp input required">
                </div>
            </div>
             {{-- new input --}}
            <div class="column g-5 w-full">
                <label>Amount</label>
                <div class="cont">
                    <input oninput="MyFunc.CalculateTotal(this)" type="number" name="amount" placeholder="Enter amount(min: ₦1,000)" inputmode="numeric" class="inp input required">
                </div>
            </div>
             {{-- new input --}}
            <div class="column g-5 w-full">
                <label>To Pay</label>
                <div class="cont">
                    <input type="text" name="to_pay" readonly placeholder="0.00" value="0" inputmode="numeric" class="inp input">
                </div>
            </div>
            {{-- prompt/warning --}}
            @if ($settings->method == 'percentage')
                  <div class="c-red">
                <strong>Note:</strong>
                <span>Transaction attracts a service charge of {{ $settings->subscriber }}%</span>
            </div>
            @else
                  <div class="c-red">
                <strong>Note:</strong>
                <span>Transaction attracts a service charge of {{ $currency }}{{ $settings->subscriber }}</span>
            </div>
            @endif
            <div class="c-red">
                <strong>Note:</strong>
                <span>Minimum Unit purchase is  ₦1,000</span>
            </div>
             
           <div onclick="MyFunc.OpenConfirmationModal(this)" class="w-full btn br-1000 row align-center border-none justify-center bg-primary primary-text no-selecvt pc-pointer m-top-10 p-10 h-50 g-10">Pay Bill</div>
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
                You are about to purchase <span class="modal-provider bold" style="opacity:1"></span> for the Meter Number <span class="modal-meter_number bold" style="opacity:1"></span> at the price of <span class="modal-amount bold" style="opacity:1">08118768360</span>. <br>
               <span class="c-red">Please ensure the meter number,meter type and provider selected is correctly selected and entered to avoid loss of funds</span><br>
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
                 let to_pay;
                     if('{{ $settings->method }}' == 'percentage'){
                to_pay='{{ $currency }}' + (parseFloat(document.querySelector('input[name=amount]').value) + (parseFloat(document.querySelector('input[name=amount]').value) * {{ $settings->subscriber }})/100).toLocaleString();
               }else{
                 to_pay='{{ $currency }}' + (parseFloat(document.querySelector('input[name=amount]').value)  + {{ $settings->subscriber }}).toLocaleString();
               }
                    document.querySelector('.modal.confirmation').querySelector('.modal-provider').innerHTML=document.querySelector('select[name=provider]').options[document.querySelector('select[name=provider]').selectedIndex].innerHTML + `(${document.querySelector('select[name=meter_type]').options[document.querySelector('select[name=meter_type]').selectedIndex].innerHTML})`;
                    document.querySelector('.modal.confirmation').querySelector('.modal-amount').innerHTML=to_pay;
                    document.querySelector('.modal.confirmation').querySelector('.modal-meter_number').innerHTML=document.querySelector('input[name=meter_number]').value;
                  
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
            CalculateTotal : (element)=>{
               if('{{ $settings->method }}' == 'percentage'){
                document.querySelector('input[name=to_pay]').value='{{ $currency }}' + (parseFloat(element.value) + (parseFloat(element.value) * {{ $settings->subscriber }})/100).toLocaleString();
               }else{
                 document.querySelector('input[name=to_pay]').value='{{ $currency }}' + (parseFloat(element.value)  + {{ $settings->subscriber }}).toLocaleString();
               }
                   
            }

        }
    </script>
@endsection
