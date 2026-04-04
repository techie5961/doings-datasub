@extends('layout.admins.app')
@section('title')
    API Management
@endsection
@section('css')
    <style class="css">
       .get-api-balance.active svg{
        animation:rotate 1s linear infinite;
        pointer-events: none;
       }
       @keyframes rotate{
        0%{
            transform:rotate(0deg);
        }
        100%{
            transform:rotate(360deg);
        }
       }

         table{
            width:100%;
            border:1px solid var(--rgt-01);
            border-collapse: collapse;
            overflow-x:auto;
           
            

        }
        tr{
            border-bottom:1px solid var(--rgt-01);
           
        }
        tr:last-of-type{
            border-bottom: none;
        }
        thead{
            background:var(--primary-01);
           
        }
       
        th{
            font-size:1rem;
            font-weight:900;
        
        }
        th,td{
            padding:10px;
            text-align:start;
            
        }
        td,th{
            border-right:1px solid var(--rgt-01);
        }
        td:last-of-type,th:last-of-type{
            border-right:none;
        }
    </style>
@endsection
@section('main')
<section class="w-full column g-10">
    {{-- analytic --}}
        <div style="border:1px solid var(--rgt-01)" class="p-20 w-full br-20 bg-light column g-10">
            <div class="row space-between w-full g-10">
                <div style="color:green;background:rgba(0,255,0,0.3);border:1px solid green;" class="h-full p-10 br-10 column align-center justify-center perfect-square">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="30" width="30"><path d="M100,36H56A20,20,0,0,0,36,56v44a20,20,0,0,0,20,20h44a20,20,0,0,0,20-20V56A20,20,0,0,0,100,36ZM96,96H60V60H96ZM200,36H156a20,20,0,0,0-20,20v44a20,20,0,0,0,20,20h44a20,20,0,0,0,20-20V56A20,20,0,0,0,200,36Zm-4,60H160V60h36Zm-96,40H56a20,20,0,0,0-20,20v44a20,20,0,0,0,20,20h44a20,20,0,0,0,20-20V156A20,20,0,0,0,100,136Zm-4,60H60V160H96Zm104-60H156a20,20,0,0,0-20,20v44a20,20,0,0,0,20,20h44a20,20,0,0,0,20-20V156A20,20,0,0,0,200,136Zm-4,60H160V160h36Z"></path></svg>
            </div>
                <div class="column m-right-auto g-5">
                   <span>Total API Transactions</span>
                     <strong class="font-1-5">{{ number_format($total) }}</strong>
                    
                </div>
                 <div onclick="window.location.href='{{ url('admins/transactions?json_type=vtu_transaction') }}'" class="pointer br-5 h-fit no-select w-fit p-5 p-x-10 primary-text bg-primary">
                    View All
                </div>
            </div>
        </div>
        {{-- analytic --}}
        <div style="border:1px solid var(--rgt-01)" class="p-20 w-full br-20 bg-light column g-10">
            <div class="row space-between w-full g-10">
                <div style="color:green;background:rgba(0,255,0,0.3);border:1px solid green;" class="h-full p-10 br-10 column align-center justify-center perfect-square">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="30" width="30"><path d="M148,152a20,20,0,1,1-20-20A20,20,0,0,1,148,152ZM228,48V208a20,20,0,0,1-20,20H48a20,20,0,0,1-20-20V48A20,20,0,0,1,48,28H68V24a12,12,0,0,1,24,0v4h72V24a12,12,0,0,1,24,0v4h20A20,20,0,0,1,228,48ZM52,52V76H204V52H188a12,12,0,0,1-24,0H92a12,12,0,0,1-24,0ZM204,204V100H52V204Z"></path></svg>
          </div>
                <div class="column m-right-auto g-5">
                   <span>Today API Transactions</span>
                     <strong class="font-1-5">{{ number_format($today) }}</strong>
                    
                </div>
                <div onclick="window.location.href='{{ url('admins/transactions?json_type=vtu_transaction&date=today') }}'" class="pointer br-5 h-fit no-select w-fit p-5 p-x-10 primary-text bg-primary">
                    View All
                </div>
            </div>
        </div>
      {{-- analytic --}}
        <div style="border:1px solid var(--rgt-01)" class="p-20 w-full br-20 bg-light column g-10">
            <div class="row w-full g-10">
                <div style="color:green;background:rgba(0,255,0,0.3);border:1px solid green;" class="h-full p-10 br-10 column align-center justify-center perfect-square">
                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="30" width="30"><path d="M216,40H40A16,16,0,0,0,24,56V200a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A16,16,0,0,0,216,40ZM92.8,145.6a8,8,0,1,1-9.6,12.8l-32-24a8,8,0,0,1,0-12.8l32-24a8,8,0,0,1,9.6,12.8L69.33,128Zm58.89-71.4-32,112a8,8,0,1,1-15.38-4.4l32-112a8,8,0,0,1,15.38,4.4Zm53.11,60.2-32,24a8,8,0,0,1-9.6-12.8L186.67,128,163.2,110.4a8,8,0,1,1,9.6-12.8l32,24a8,8,0,0,1,0,12.8Z"></path></svg>
                   </div>
                <div class="column g-5">
                   <span>API Balance</span>
                   <div class="row align-center g-5">
                     <strong class="font-1-5 api-balance">&#8358;{{ number_format($balance,2) }}</strong>
                   <div onclick="MyFunc.GetAPIBalance(this)" style="background:var(--rgt-01)" class="p-5 get-api-balance br-5 column h-fit">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M228,48V96a12,12,0,0,1-12,12H168a12,12,0,0,1,0-24h19l-7.8-7.8a75.55,75.55,0,0,0-53.32-22.26h-.43A75.49,75.49,0,0,0,72.39,75.57,12,12,0,1,1,55.61,58.41a99.38,99.38,0,0,1,69.87-28.47H126A99.42,99.42,0,0,1,196.2,59.23L204,67V48a12,12,0,0,1,24,0ZM183.61,180.43a75.49,75.49,0,0,1-53.09,21.63h-.43A75.55,75.55,0,0,1,76.77,179.8L69,172H88a12,12,0,0,0,0-24H40a12,12,0,0,0-12,12v48a12,12,0,0,0,24,0V189l7.8,7.8A99.42,99.42,0,0,0,130,226.06h.56a99.38,99.38,0,0,0,69.87-28.47,12,12,0,0,0-16.78-17.16Z"></path></svg>

                   </div>
                    </div> 
                </div>
            </div>
        </div>
        {{-- api funding bank details --}}
        <div style="border:1px solid var(--primary);background:var(--primary-01);color:var(--primary)" class="w-full column g-10 br-10 p-20">
        <strong class="desc">API FUNDING BANK DETAILS</strong>
        <small class="opacity-07">Send money into the account details below and your API Balance would be automatically updated,resfresh your balance if not automatically updated.</small>
           {{-- new row --}}
        <div class="row align-center g-10">
            <span>Account Number</span>
            <div class="row align-center g-5" style="background:var(--primary-01);padding:5px;font-family:monospace;">
                <span>{{ $account_number }}</span>
                <span onclick="copy('{{ $account_number }}')" class="h-fit pc-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M216,32H88a8,8,0,0,0-8,8V80H40a8,8,0,0,0-8,8V216a8,8,0,0,0,8,8H168a8,8,0,0,0,8-8V176h40a8,8,0,0,0,8-8V40A8,8,0,0,0,216,32Zm-8,128H176V88a8,8,0,0,0-8-8H96V48H208Z"></path></svg>

                </span>
            </div>
       
        </div>
        {{-- new row --}}
          <div class="row align-center g-10">
            <span>Bank Name</span>
            <span style="background:var(--primary-01);padding:5px;font-family:monospace;">{{ $account_bank }}</span>
        </div>
        {{-- new row --}}
         <div class="row align-center g-10">
            <span>Account Name</span>
            <span style="background:var(--primary-01);padding:5px;font-family:monospace;">{{ $account_name }}</span>
        </div>
        </div>
        {{-- api settings form --}}
        <form action="{{ url('admins/post/api/settings/process') }}" method="POST" onsubmit="PostRequest(event,this,MyFunc.Completed)" style="border:1px solid var(--rgt-01)" class="w-full br-20 p-20 column bg-light g-10">
            <div class="row align-center c-primary g-10">
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M71.68,97.22,34.74,128l36.94,30.78a12,12,0,1,1-15.36,18.44l-48-40a12,12,0,0,1,0-18.44l48-40A12,12,0,0,1,71.68,97.22Zm176,21.56-48-40a12,12,0,1,0-15.36,18.44L221.26,128l-36.94,30.78a12,12,0,1,0,15.36,18.44l48-40a12,12,0,0,0,0-18.44ZM164.1,28.72a12,12,0,0,0-15.38,7.18l-64,176a12,12,0,0,0,7.18,15.37A11.79,11.79,0,0,0,96,228a12,12,0,0,0,11.28-7.9l64-176A12,12,0,0,0,164.1,28.72Z"></path></svg>

                </span>
                <strong class="desc">API Settings</strong>
            </div>
            <hr>
            {{-- csrf token --}}
            <input type="hidden" name="_token" value="{{ @csrf_token() }}" class="inp input required">
            {{-- new input --}}
            <div class="column w-full g-5">
                <label>API Fee method</label>
                <small class="opacity-07 method-prompt">Users pay the base API amount plus your set percentage. Example: ₦1,000 airtime + 5% = ₦1,050 charged; ₦50 is your profit.</small>

                <div class="cont">
                    <select onchange="MyFunc.Inform(this)" name="method" class="inp input required">
                       
                        <option {{ ($api_settings->method ?? '') == 'percentage' ? 'selected' : '' }} value="percentage">Percentage based</option>
                        <option {{ ($api_settings->method ?? '') == 'direct' ? 'selected' : '' }} value="direct">Direct fee</option>
                    </select>
                </div>
            </div>
            {{-- new input --}}
             <div class="column w-full g-5">
                <label>Subscribers Fee amount</label>
                <div class="cont">
                    <input value="{{ $api_settings->subscriber ?? '' }}" name="subscriber" placeholder="{{ ($api_settings->method ?? '') == 'percentage' ? 'Enter amount in percentage(i.e 5%)' : 'Enter amount in naira(i.e ₦100)' }}" type="number" name="value" class="inp input fee-amount required">
                </div>
            </div>
             {{-- new input --}}
             <div class="column w-full g-5">
                <label>Agents Fee amount</label>
                <div class="cont">
                    <input value="{{ $api_settings->agent ?? '' }}" name="agent" placeholder="{{ ($api_settings->method ?? '') == 'percentage' ? 'Enter amount in percentage(i.e 5%)' : 'Enter amount in naira(i.e ₦100)' }}" type="number" name="value" class="inp input fee-amount required">
                </div>
            </div>
             {{-- new input --}}
             <div class="column w-full g-5">
                <label>API Fee amount</label>
                <div class="cont">
                    <input value="{{ $api_settings->api ?? '' }}" name="api" placeholder="{{ ($api_settings->method ?? '') == 'percentage' ? 'Enter amount in percentage(i.e 5%)' : 'Enter amount in naira(i.e ₦100)' }}" type="number" name="value" class="inp input fee-amount required">
                </div>
            </div>
            {{-- submit button --}}
            <button class="post">Save API Settings</button>
        </form>

         <section style="border:1px solid var(--rgt-01);box-shadow:0 0 10px rgba(0,0,0,0.005)" class="w-full br-20 p-20 bg-light column g-20">
      {{-- house --}}
      <div class="w-full column g-20 overflow-auto">
 {{-- all networks --}}
        <div class="column g-10 w-full">
            {{-- head --}}
            <div class="row align-center g-5">
                <span class="c-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="30" width="30"><path d="M232,108H140V92h4a20,20,0,0,0,20-20V40a20,20,0,0,0-20-20H112A20,20,0,0,0,92,40V72a20,20,0,0,0,20,20h4v16H24a12,12,0,0,0,0,24H52v24H48a20,20,0,0,0-20,20v32a20,20,0,0,0,20,20H80a20,20,0,0,0,20-20V176a20,20,0,0,0-20-20H76V132H180v24h-4a20,20,0,0,0-20,20v32a20,20,0,0,0,20,20h32a20,20,0,0,0,20-20V176a20,20,0,0,0-20-20h-4V132h28a12,12,0,0,0,0-24ZM116,44h24V68H116ZM76,204H52V180H76Zm128,0H180V180h24Z"></path></svg>

                </span>
                <strong class="font-1-5">All Networks</strong>
            </div>
            {{-- table --}}
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Network</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>MTN</td>
                    </tr>
                     <tr>
                        <td>02</td>
                        <td>GLO</td>
                    </tr>
                     <tr>
                        <td>04</td>
                        <td>AIRTEL</td>
                    </tr>
                     <tr>
                        <td>03</td>
                        <td>9MOBILE</td>
                    </tr>
                </tbody>
            </table>
        </div>
          {{-- data plans --}}
        <div class="column g-10 w-full">
            {{-- head --}}
            <div class="row align-center g-5">
                <span class="c-primary">
                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="30" width="30"><path d="M144,204a16,16,0,1,1-16-16A16,16,0,0,1,144,204ZM239.61,83.91a176,176,0,0,0-223.22,0,12,12,0,1,0,15.23,18.55,152,152,0,0,1,192.76,0,12,12,0,1,0,15.23-18.55Zm-32.16,35.73a128,128,0,0,0-158.9,0,12,12,0,0,0,14.9,18.81,104,104,0,0,1,129.1,0,12,12,0,0,0,14.9-18.81ZM175.07,155.3a80.05,80.05,0,0,0-94.14,0,12,12,0,0,0,14.14,19.4,56,56,0,0,1,65.86,0,12,12,0,1,0,14.14-19.4Z"></path></svg>

                </span>
                <strong class="font-1-5">Data Plans</strong>
            </div>
            <small class="opacity-07">Scroll horizontally to view full table.</small>
            {{-- table --}}
            <table>
                <thead>
                    <tr>
                        <th>Network</th>
                        <th>Plan ID</th>
                        <th>Plan</th>
                        <th>Subscriber</th>
                        <th>Agents</th>
                        <th>API</th>
                       

                    </tr>
                </thead>
                <tbody>
                   @foreach ($prices['MOBILE_NETWORK'] as $network => $plans)
             @foreach ($plans as $plan)
                 @foreach ($plan['PRODUCT'] as $data)
                    <tr>
                        <td>{{ strtoupper($network) }}</td>
                        <td>{{ $data['PRODUCT_ID'] }}</td>
                        <td>{{ $data['PRODUCT_NAME'] }}</td>
                        <td>{{ FormatPrice($data['PRODUCT_AMOUNT'],'subscriber') }}</td>
                        <td>{{ FormatPrice($data['PRODUCT_AMOUNT'],'agent') }}</td>
                        <td>{{ FormatPrice($data['PRODUCT_AMOUNT'],'api') }}</td>
                    </tr>
                 @endforeach
             @endforeach
                   @endforeach
                     
                </tbody>
            </table>
        </div>

         {{-- all tv providers --}}
        <div class="column g-10 w-full">
            {{-- head --}}
            <div class="row align-center g-5">
                <span class="c-primary">
                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="30" width="30"><path d="M216,60H157l27.52-27.52a12,12,0,0,0-17-17L128,55,88.49,15.51a12,12,0,0,0-17,17L99,60H40A20,20,0,0,0,20,80V200a20,20,0,0,0,20,20H216a20,20,0,0,0,20-20V80A20,20,0,0,0,216,60Zm-4,136H44V84H212Z"></path></svg>

                </span>
                <strong class="font-1-5">Cable TV Providers</strong>
            </div>
            {{-- table --}}
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Network</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>GOTV</td>
                    </tr>
                     <tr>
                        <td>02</td>
                        <td>DSTV</td>
                    </tr>
                     <tr>
                        <td>03</td>
                        <td>STARTIMES</td>
                    </tr>
                    
                </tbody>
            </table>
        </div>

         {{-- cable plans --}}
        <div class="column g-10 w-full">
            {{-- head --}}
            <div class="row align-center g-5">
                <span class="c-primary">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="30" width="30"><path d="M216,60H157l27.52-27.52a12,12,0,0,0-17-17L128,55,88.49,15.51a12,12,0,0,0-17,17L99,60H40A20,20,0,0,0,20,80V200a20,20,0,0,0,20,20H216a20,20,0,0,0,20-20V80A20,20,0,0,0,216,60ZM44,84h84V196H44ZM212,196H152V84h60Zm-44-80a16,16,0,1,1,16,16A16,16,0,0,1,168,116Zm32,48a16,16,0,1,1-16-16A16,16,0,0,1,200,164Z"></path></svg>

                </span>
                <strong class="font-1-5">Cable Plans</strong>
            </div>
             <small class="opacity-07">Scroll horizontally to view full table.</small>
            {{-- table --}}
            <table>
                <thead>
                    <tr>
                        <th>Provider</th>
                        <th>Plan ID</th>
                        <th>Plan</th>
                        <th>Subscriber</th>
                        <th>Agents</th>
                        <th>API</th>
                       

                    </tr>
                </thead>
                <tbody>
                   @foreach ($cable_plans['TV_ID'] as $provider => $plans)
             @foreach ($plans as $plan)
                 @foreach ($plan['PRODUCT'] as $data)
                    <tr>
                        <td>{{ strtoupper($provider) }}</td>
                        <td>{{ $data['PACKAGE_ID'] }}</td>
                        <td>{{ $data['PACKAGE_NAME'] }}</td>
                        <td>{{ FormatPrice($data['PACKAGE_AMOUNT'],'subscriber') }}</td>
                        <td>{{ FormatPrice($data['PACKAGE_AMOUNT'],'agent') }}</td>
                        <td>{{ FormatPrice($data['PACKAGE_AMOUNT'],'api') }}</td>
                    </tr>
                 @endforeach
             @endforeach
                   @endforeach
                     
                </tbody>
            </table>
        </div>




      </div>
       
    </section>
</section>
    
@endsection
@section('js')
    <script>
        window.MyFunc = {
            GetAPIBalance : async function(element){
                element.classList.add('active');
                let response=await fetch('{{ url('admins/get/api/balance') }}');
                if(response.ok){
                    let data=await response.text();
                    document.querySelector('.api-balance').innerHTML=data;
                    element.classList.remove('active');
                }else{
                    CreateNotify('error',response.status + ' Error');
                    element.classList.remove('active');
                }
            },
            Inform : function(element){
              if(element.value == 'percentage'){
                document.querySelectorAll('input.fee-amount').forEach((amt)=>{
                    amt.placeholder='Enter amount in percentage(i.e 5%)'
                });
                document.querySelector('.method-prompt').innerHTML='Users pay the base API amount plus your set percentage. Example: ₦1,000 airtime + 5% = ₦1,050 charged; ₦50 is your profit.';

              }else{
                document.querySelectorAll('input.fee-amount').forEach((amt)=>{
                    amt.placeholder='Enter amount in naira(i.e ₦100)'
                });
                 document.querySelector('.method-prompt').innerHTML='Users pay the base API amount plus the extra fee you set. Example: Airtime ₦1,000 + ₦100 fee = ₦1,100 charged; ₦100 is your profit.';
               
              }
            },
            Completed : function(response){
                let data=JSON.parse(response);
                if(data.status == 'success'){
                    window.location.reload();
                }
            }
        }
    </script>
@endsection