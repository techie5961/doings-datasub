@extends('layout.users.app')
@section('title')
    Dashboard
@endsection
@section('css')
    <style class="css">
        .marquee{
            overflow:hidden;
            width:100%;
            display:flex;
            flex-direction:row;
            align-items:center;
            gap:10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius:1000px;
            background:var(--bg-light);
            padding:10px;
            padding-right:20px;
            user-select:none;
            color:goldenrod;
        }
        .marquee span{
            display:inline-block;
            white-space: nowrap;
            animation:scroll 10s linear infinite;
            position:relative;
            z-index:10;
            /* padding:10px; */
            /* margin-right:10px; */
           
        }
        .marquee .bell-icon{
            position:relative;
            z-index:50;
           padding-right:10px;
        }
        @keyframes scroll{
            0%{
                transform:translateX(100%);
            }
            100%{
                transform:translateX(-100%)
            }
        }
       
        .navs{
            user-select:none;
        }
        .navs > div > div:first-of-type{
            position:relative; 
        }
          .navs > div > div:first-of-type .highlight{
            position:absolute;
            top:0;
            background:coral;
            color:white;
            font-size:0.6rem;
            border-radius:5px;
            padding:2px 5px;
            left:50%;
            transform:translateX(-50%) translateY(-50%);
            white-space: nowrap;

          }

          @media(min-width:800px){
             .navs > div{
                cursor:pointer;
        }
          }
    </style>
@endsection
@section('main')
    <section class="w-full column g-20">
        {{-- balance div --}}
        <div style="background:var(--primary)" class="w-full br-10 p-20 column g-10 primary-text">
           {{-- new row --}}
            <div class="row align-center space-between w-full">
                <span>Available Balance</span>
              <div class="row align-center g-2">
                 <span>Transaction History</span>
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="10" width="10"><path d="M224.49,136.49l-72,72a12,12,0,0,1-17-17L187,140H40a12,12,0,0,1,0-24H187L135.51,64.48a12,12,0,0,1,17-17l72,72A12,12,0,0,1,224.49,136.49Z"></path></svg>
              </div> 
            </div>
            {{-- new row --}}
            <div class="row align-center space-between g-10">
                 <strong class="font-1-5">
                    {{ Auth::guard('users')->user()->currency }}
                    {{ number_format(Auth::guard('users')->user()->main_balance,2) }}
                </strong>
                <div onclick="MyFunc.Focus()" style="border:4px solid var(--primary-text);" class="h-40 br-1000 no-select overflow-hidden pointer p-10 row align-center justify-center g-10">
                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="15" width="15"><path d="M228,128a12,12,0,0,1-12,12H140v76a12,12,0,0,1-24,0V140H40a12,12,0,0,1,0-24h76V40a12,12,0,0,1,24,0v76h76A12,12,0,0,1,228,128Z"></path></svg>

                        <span>Add Money</span>
                    </div>
            </div>
            {{-- new row --}}
                <div class="row align-center g-5">
                    <div>
                        <span>Cashback:</span>
                        <span>
                             {{ Auth::guard('users')->user()->currency }}
                    {{ number_format(Auth::guard('users')->user()->cashback_balance,2) }}
                        </span>
                    </div>
                    <div style="border:4px solid var(--primary-text);" class="h-40 br-1000 no-select overflow-hidden pointer p-10 row align-center justify-center g-10">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="15" width="15"><path d="M216.49,184.49l-32,32a12,12,0,0,1-17-17L179,188H48a12,12,0,0,1,0-24H179l-11.52-11.51a12,12,0,0,1,17-17l32,32A12,12,0,0,1,216.49,184.49Zm-145-64a12,12,0,0,0,17-17L77,92H208a12,12,0,0,0,0-24H77L88.49,56.49a12,12,0,0,0-17-17l-32,32a12,12,0,0,0,0,17Z"></path></svg>

                        <span>Withdraw</span>
                    </div>
                </div>
        </div>
        {{--marquee --}}
        <div class="marquee">
          <div class="w-full bg-inherit overflow-hidden align-center g-10 row">
              <div class="h-full bell-icon bg-inherit no-shrink">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M168,224a8,8,0,0,1-8,8H96a8,8,0,1,1,0-16h64A8,8,0,0,1,168,224Zm53.81-48.06C216.25,166.38,208,139.33,208,104a80,80,0,1,0-160,0c0,35.34-8.26,62.38-13.81,71.94A16,16,0,0,0,48,200H208a16,16,0,0,0,13.8-24.06Z"></path></svg>

            </div>
       <span class="flex-auto">{{ $social_settings->marquee_notification ?? '' }}</span>
          </div>
        </div>
        {{-- deposit --}}
        <div class="bg-primary primary-text p-20 br-10 column g-10">
            {{-- header --}}
           <div class="row align-center g-10">
             <span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M224,48H32A16,16,0,0,0,16,64V192a16,16,0,0,0,16,16H224a16,16,0,0,0,16-16V64A16,16,0,0,0,224,48ZM136,176H120a8,8,0,0,1,0-16h16a8,8,0,0,1,0,16Zm64,0H168a8,8,0,0,1,0-16h32a8,8,0,0,1,0,16ZM32,88V64H224V88Z"></path></svg>
                
            </span>
        <strong class="desc">Fund your account</strong>
           </div>
           {{-- deposit form --}}
           <form action="{{ url('users/post/initiate/deposit/process') }}" method="POST" onsubmit="PostRequest(event,this,MyFunc.Initiated)" class="row bg-light p-10 br-10 align-center justify-center space-between g-10 h-fit">
          {{-- csrf token --}}
          <input type="hidden" name="_token" value="{{ @csrf_token() }}" class="inp input">
            <div class="cont border-none bg-transparent h-40">
                <input placeholder="Enter amount ({{ Auth::guard('users')->user()->currency }})" type="number" name="amount" class="input amount inp required">
            </div>
            <button class="h-40 w-fit p-10 br-10 border-none bg-primary primary-text">Deposit</button>
           </form>
           {{-- prompt --}}
           <span class="opacity-09">
            Enter the amount you want to deposit and click on the deposit button to complete your deposit.
           </span>
        </div>
        {{-- navs --}}
        <div style="box-shadow:0 0 10px rgba(0,0,0,0.1)" class="grid navs w-full bg-light grid-4 br-10 p-10 g-10 place-center">
          {{-- new nav --}}
            <div onclick="Redirect('{{ url('users/data/topup') }}')" class="column w-full align-center g-10">
                <div style="background:linear-gradient(to bottom right,var(--primary),var(--primary-dark))" class="column h-50 perfect-square br-10 primary-text align-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M244.35,92.8l-104,125.43A15.93,15.93,0,0,1,128,224h0a15.93,15.93,0,0,1-12.31-5.77L11.65,92.8A15.65,15.65,0,0,1,8.11,80.91,15.93,15.93,0,0,1,14.28,70.1,186.67,186.67,0,0,1,128,32,186.67,186.67,0,0,1,241.72,70.1a15.93,15.93,0,0,1,6.17,10.81A15.65,15.65,0,0,1,244.35,92.8Z"></path></svg>

                </div>
                <span>Data</span>
            </div>
             {{-- new nav --}}
            <div onclick="Redirect('{{ url('users/airtime/topup') }}')" class="column w-full align-center g-10">
                <div style="background:linear-gradient(to bottom right,var(--primary),var(--primary-dark))" class="column h-50 perfect-square br-10 primary-text align-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M144.27,45.93a8,8,0,0,1,9.8-5.66,86.22,86.22,0,0,1,61.66,61.66,8,8,0,0,1-5.66,9.8A8.23,8.23,0,0,1,208,112a8,8,0,0,1-7.73-5.93,70.35,70.35,0,0,0-50.33-50.34A8,8,0,0,1,144.27,45.93Zm-2.33,41.8c13.79,3.68,22.65,12.55,26.33,26.34A8,8,0,0,0,176,120a8.23,8.23,0,0,0,2.07-.27,8,8,0,0,0,5.66-9.8c-5.12-19.16-18.5-32.54-37.66-37.66a8,8,0,1,0-4.13,15.46Zm72.43,78.73-47.11-21.11-.13-.06a16,16,0,0,0-15.17,1.4,8.12,8.12,0,0,0-.75.56L126.87,168c-15.42-7.49-31.34-23.29-38.83-38.51l20.78-24.71c.2-.25.39-.5.57-.77a16,16,0,0,0,1.32-15.06l0-.12L89.54,41.64a16,16,0,0,0-16.62-9.52A56.26,56.26,0,0,0,24,88c0,79.4,64.6,144,144,144a56.26,56.26,0,0,0,55.88-48.92A16,16,0,0,0,214.37,166.46Z"></path></svg>

                </div>
                <span>Airtime</span>
            </div>
             {{-- new nav --}}
            <div class="column w-full align-center g-10">
                <div style="background:linear-gradient(to bottom right,var(--primary),var(--primary-dark))" class="column h-50 perfect-square br-10 primary-text align-center justify-center">
                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M213.85,125.46l-112,120a8,8,0,0,1-13.69-7l14.66-73.33L45.19,143.49a8,8,0,0,1-3-13l112-120a8,8,0,0,1,13.69,7L153.18,90.9l57.63,21.61a8,8,0,0,1,3,12.95Z"></path></svg>

                </div>
                <span>Bills</span>
            </div>
             {{-- new nav --}}
            <div class="column w-full align-center g-10">
                <div style="background:linear-gradient(to bottom right,var(--primary),var(--primary-dark))" class="column h-50 perfect-square br-10 primary-text align-center justify-center">
                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M216,64H147.31l34.35-34.34a8,8,0,1,0-11.32-11.32L128,60.69,85.66,18.34A8,8,0,0,0,74.34,29.66L108.69,64H40A16,16,0,0,0,24,80V200a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V80A16,16,0,0,0,216,64Zm0,136H40V80H216V200ZM200,100v80a4,4,0,0,1-4,4H60a4,4,0,0,1-4-4V100a4,4,0,0,1,4-4H196A4,4,0,0,1,200,100Z"></path></svg>

                </div>
                <span>Cable TV</span>
            </div>
           
        </div>
        {{-- refer & earn --}}
        <div style="box-shadow:0 0 10px rgba(0,0,0,0.1);" class="w-full br-10 bg-light p-20 column g-10">
        <div class="w-full row g-10 align-center">
            <span style="font-size:30px;">🎁</span>
            <div class="column g-5">
                <strong class="font-1">Refer & Earn Big</strong>
                <span>Refer friends & families to {{ config('app.name') }} and earn rewards. Simple, fast and secure!</span>
            </div>
        </div>
        </div>

        {{-- navs --}}
        <div style="box-shadow:0 0 10px rgba(0,0,0,0.1)" class="grid navs w-full bg-light grid-4 br-10 p-10 g-10 place-center">
           {{-- new nav --}}
            <div onclick="Redirect('{{ url('users/airtime/topup') }}')" class="column w-full align-center g-10">
                
                <div style="background:linear-gradient(to bottom right,var(--primary),var(--primary-dark))" class="column h-50 perfect-square br-10 primary-text align-center justify-center">
                  <div class="highlight">1% off</div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M144.27,45.93a8,8,0,0,1,9.8-5.66,86.22,86.22,0,0,1,61.66,61.66,8,8,0,0,1-5.66,9.8A8.23,8.23,0,0,1,208,112a8,8,0,0,1-7.73-5.93,70.35,70.35,0,0,0-50.33-50.34A8,8,0,0,1,144.27,45.93Zm-2.33,41.8c13.79,3.68,22.65,12.55,26.33,26.34A8,8,0,0,0,176,120a8.23,8.23,0,0,0,2.07-.27,8,8,0,0,0,5.66-9.8c-5.12-19.16-18.5-32.54-37.66-37.66a8,8,0,1,0-4.13,15.46Zm72.43,78.73-47.11-21.11-.13-.06a16,16,0,0,0-15.17,1.4,8.12,8.12,0,0,0-.75.56L126.87,168c-15.42-7.49-31.34-23.29-38.83-38.51l20.78-24.71c.2-.25.39-.5.57-.77a16,16,0,0,0,1.32-15.06l0-.12L89.54,41.64a16,16,0,0,0-16.62-9.52A56.26,56.26,0,0,0,24,88c0,79.4,64.6,144,144,144a56.26,56.26,0,0,0,55.88-48.92A16,16,0,0,0,214.37,166.46Z"></path></svg>

                </div>
                <span>Airtime</span>
            </div>
            {{-- new nav --}}
            <div class="column w-full align-center g-10">
                <div style="background:linear-gradient(to bottom right,var(--primary),var(--primary-dark))" class="column h-50 perfect-square br-10 primary-text align-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M244.35,92.8l-104,125.43A15.93,15.93,0,0,1,128,224h0a15.93,15.93,0,0,1-12.31-5.77L11.65,92.8A15.65,15.65,0,0,1,8.11,80.91,15.93,15.93,0,0,1,14.28,70.1,186.67,186.67,0,0,1,128,32,186.67,186.67,0,0,1,241.72,70.1a15.93,15.93,0,0,1,6.17,10.81A15.65,15.65,0,0,1,244.35,92.8Z"></path></svg>

                </div>
                <span>Data</span>
            </div>
            
             {{-- new nav --}}
            <div class="column w-full align-center g-10">
                <div style="background:linear-gradient(to bottom right,var(--primary),var(--primary-dark))" class="column h-50 perfect-square br-10 primary-text align-center justify-center">
                <div class="highlight">New</div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M112,136V72h19.47a16.09,16.09,0,0,1,13.72,7.77L165.72,114a16.06,16.06,0,0,1,2.28,8.24V216a16,16,0,0,1-16,16H56a16,16,0,0,1-16-16V122.22A16.06,16.06,0,0,1,42.28,114L62.81,79.77A16.09,16.09,0,0,1,76.53,72H96v64a8,8,0,0,0,16,0Zm112,24a16,16,0,0,1-16-16V64A56,56,0,0,0,96,64v8h16V64a40,40,0,0,1,80,0v80a32,32,0,0,0,32,32,8,8,0,0,0,0-16Z"></path></svg>

                </div>
                <span>Agent</span>
            </div>
             {{-- new nav --}}
            <div class="column w-full align-center g-10">
                <div style="background:linear-gradient(to bottom right,var(--primary),var(--primary-dark))" class="column h-50 perfect-square br-10 primary-text align-center justify-center">
                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M216,40H40A16,16,0,0,0,24,56V200a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A16,16,0,0,0,216,40ZM200,192H56a8,8,0,0,1-8-8V72a8,8,0,0,1,16,0v76.69l34.34-34.35a8,8,0,0,1,11.32,0L128,132.69,172.69,88H144a8,8,0,0,1,0-16h48a8,8,0,0,1,8,8v48a8,8,0,0,1-16,0V99.31l-50.34,50.35a8,8,0,0,1-11.32,0L104,131.31l-40,40V176H200a8,8,0,0,1,0,16Z"></path></svg>
                   
                </div>
                <span>Statistics</span>
            </div>
             {{-- new nav --}}
            <div class="column w-full align-center g-10">
                <div style="background:linear-gradient(to bottom right,var(--primary),var(--primary-dark))" class="column h-50 perfect-square br-10 primary-text align-center justify-center">
                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M232,208a8,8,0,0,1-8,8H32a8,8,0,0,1,0-16h8V136a8,8,0,0,1,8-8H72a8,8,0,0,1,8,8v64H96V88a8,8,0,0,1,8-8h32a8,8,0,0,1,8,8V200h16V40a8,8,0,0,1,8-8h40a8,8,0,0,1,8,8V200h8A8,8,0,0,1,232,208Z"></path></svg>

                </div>
                <span>Status</span>
            </div>
            {{-- new nav --}}
            <div onclick="Redirect('users/pricing')" class="column w-full align-center g-10">
                <div style="background:linear-gradient(to bottom right,var(--primary),var(--primary-dark))" class="column h-50 perfect-square br-10 primary-text align-center justify-center">
                  <div class="highlight">Hot</div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M244.35,92.8l-104,125.43A15.93,15.93,0,0,1,128,224h0a15.93,15.93,0,0,1-12.31-5.77L11.65,92.8A15.65,15.65,0,0,1,8.11,80.91,15.93,15.93,0,0,1,14.28,70.1,186.67,186.67,0,0,1,128,32,186.67,186.67,0,0,1,241.72,70.1a15.93,15.93,0,0,1,6.17,10.81A15.65,15.65,0,0,1,244.35,92.8Z"></path></svg>

                </div>
                <span>Pricing</span>
            </div>
            
             {{-- new nav --}}
            <div class="column w-full align-center g-10">
                <div style="background:linear-gradient(to bottom right,var(--primary),var(--primary-dark))" class="column h-50 perfect-square br-10 primary-text align-center justify-center">
                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24ZM62.29,186.47l2.52-1.65A16,16,0,0,0,72,171.53l.21-36.23L93.17,104a3.62,3.62,0,0,0,.32.22l19.67,12.87a15.94,15.94,0,0,0,11.35,2.77L156,115.59a16,16,0,0,0,10-5.41l22.17-25.76A16,16,0,0,0,192,74V67.67A87.87,87.87,0,0,1,211.77,155l-16.14-14.76a16,16,0,0,0-16.93-3l-30.46,12.65a16.08,16.08,0,0,0-9.68,12.45l-2.39,16.19a16,16,0,0,0,11.77,17.81L169.4,202l2.36,2.37A87.88,87.88,0,0,1,62.29,186.47Z"></path></svg>

                </div>
                <span>Own</span>
            </div>
             {{-- new nav --}}
            <div class="column w-full align-center g-10">
                <div style="background:linear-gradient(to bottom right,var(--primary),var(--primary-dark))" class="column h-50 perfect-square br-10 primary-text align-center justify-center">
                 <div class="highlight">Hot</div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M192,16H64A16,16,0,0,0,48,32V224a16,16,0,0,0,16,16H192a16,16,0,0,0,16-16V32A16,16,0,0,0,192,16ZM100,200a12,12,0,1,1,12-12A12,12,0,0,1,100,200Zm0-60a12,12,0,1,1,12-12A12,12,0,0,1,100,140Zm0-60a12,12,0,1,1,12-12A12,12,0,0,1,100,80Zm56,120a12,12,0,1,1,12-12A12,12,0,0,1,156,200Zm0-60a12,12,0,1,1,12-12A12,12,0,0,1,156,140Zm0-60a12,12,0,1,1,12-12A12,12,0,0,1,156,80Z"></path></svg>

                </div>
                <span>Vendor</span>
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script class="js">
        window.MyFunc = {
            Focus : function(){
                document.querySelector('input.amount').focus();
            },
            Initiated : function(response){
            let data=JSON.parse(response);
            if(data.status == 'success'){
                window.location.href=data.link;
            }
            }
        }
    </script>
@endsection