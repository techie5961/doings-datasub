@extends('layout.users.app')
@section('title')
    Statistics
@endsection
@section('main')
    <section class="w-full column g-10">
        <div style="box-shadow:0 0 10px rgba(0,0,0,0.1)" class="column align-center bg-light w-full br-20 g-10 p-20">
          {{-- head --}}
            <strong class="font-weight-900 font-1-5 c-primary">Statistics</strong>
            <div class="row c-primary align-center g-5">
                <span class="c-primary">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="15" width="15"><path d="M100,116.43a8,8,0,0,0,4-6.93v-72A8,8,0,0,0,93.34,30,104.06,104.06,0,0,0,25.73,147a8,8,0,0,0,4.52,5.81,7.86,7.86,0,0,0,3.35.74,8,8,0,0,0,4-1.07ZM88,49.62v55.26L40.12,132.51C40,131,40,129.48,40,128A88.12,88.12,0,0,1,88,49.62ZM232,128A104,104,0,0,1,38.32,180.7a8,8,0,0,1,2.87-11L120,123.83V32a8,8,0,0,1,8-8,104.05,104.05,0,0,1,89.74,51.48c.11.16.21.32.31.49s.2.37.29.55A103.34,103.34,0,0,1,232,128Z"></path></svg>
                </span>
                <span class="h-fit">Overview</span>
            </div>
            {{-- body --}}
           <div style="border-top:1px solid var(--rgt-01)" class="column p-y-10 w-full g-10">
             {{-- new statistic --}}
            <div style="background:var(--rgt-005);color:var(--primary);border-bottom:2px solid var(--rgt-02)" class="p-10 br-5 column w-full g-5">
                <div class="row align-center g-2">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M232,208a8,8,0,0,1-8,8H32a8,8,0,0,1,0-16h8V136a8,8,0,0,1,8-8H72a8,8,0,0,1,8,8v64H96V88a8,8,0,0,1,8-8h32a8,8,0,0,1,8,8V200h16V40a8,8,0,0,1,8-8h40a8,8,0,0,1,8,8V200h8A8,8,0,0,1,232,208Z"></path></svg>

                    </span>
                    <strong>Total Transactions</strong>
                </div>
                <strong class="font-weight-900 font-1">{{ number_format($total_trx) }}</strong>
            </div>
              {{-- new statistic --}}
            <div style="background:var(--rgt-005);color:var(--primary);border-bottom:2px solid var(--rgt-02)" class="p-10 br-5 column w-full g-5">
                <div class="row align-center g-2">
                    <span>
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M240,56v64a8,8,0,0,1-13.66,5.66L200,99.31l-58.34,58.35a8,8,0,0,1-11.32,0L96,123.31,29.66,189.66a8,8,0,0,1-11.32-11.32l72-72a8,8,0,0,1,11.32,0L136,140.69,188.69,88,162.34,61.66A8,8,0,0,1,168,48h64A8,8,0,0,1,240,56Z"></path></svg>
                    </span>
                    <strong>Amount spent this week</strong>
                </div>
                <strong class="font-weight-900 font-1">{{ $currency }}{{ number_format($this_week,2) }}</strong>
            </div>
                {{-- new statistic --}}
            <div style="background:var(--rgt-005);color:var(--primary);border-bottom:2px solid var(--rgt-02)" class="p-10 br-5 column w-full g-5">
                <div class="row align-center g-2">
                    <span>
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M216,40H40A16,16,0,0,0,24,56V200a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A16,16,0,0,0,216,40ZM200,192H56a8,8,0,0,1-8-8V72a8,8,0,0,1,16,0v76.69l34.34-34.35a8,8,0,0,1,11.32,0L128,132.69,172.69,88H144a8,8,0,0,1,0-16h48a8,8,0,0,1,8,8v48a8,8,0,0,1-16,0V99.31l-50.34,50.35a8,8,0,0,1-11.32,0L104,131.31l-40,40V176H200a8,8,0,0,1,0,16Z"></path></svg>
                      
                    </span>
                    <strong>Amount spent this month</strong>
                </div>
                <strong class="font-weight-900 font-1">{{ $currency }}{{ number_format($this_month,2) }}</strong>
            </div>
               {{-- new statistic --}}
            <div style="background:var(--rgt-005);color:var(--primary);border-bottom:2px solid var(--rgt-02)" class="p-10 br-5 column w-full g-5">
                <div class="row align-center g-2">
                    <span>
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M224,48H32A16,16,0,0,0,16,64V192a16,16,0,0,0,16,16H224a16,16,0,0,0,16-16V64A16,16,0,0,0,224,48ZM136,176H120a8,8,0,0,1,0-16h16a8,8,0,0,1,0,16Zm64,0H168a8,8,0,0,1,0-16h32a8,8,0,0,1,0,16ZM32,88V64H224V88Z"></path></svg>

                    </span>
                    <strong>Total Spent</strong>
                </div>
                <strong class="font-weight-900 font-1">{{ $currency }}{{ number_format($total_spent,2) }}</strong>
            </div>
               {{-- new statistic --}}
            <div style="background:var(--rgt-005);color:var(--primary);border-bottom:2px solid var(--rgt-02)" class="p-10 br-5 column w-full g-5">
                <div class="row align-center g-2">
                    <span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M168,128a40,40,0,1,1-40-40A40,40,0,0,1,168,128Zm80-64V192a8,8,0,0,1-8,8H16a8,8,0,0,1-8-8V64a8,8,0,0,1,8-8H240A8,8,0,0,1,248,64Zm-16,46.35A56.78,56.78,0,0,1,193.65,72H62.35A56.78,56.78,0,0,1,24,110.35v35.3A56.78,56.78,0,0,1,62.35,184h131.3A56.78,56.78,0,0,1,232,145.65Z"></path></svg>

                    </span>
                    <strong>Total Funding</strong>
                </div>
                <strong class="font-weight-900 font-1">{{ $currency }}{{ number_format($total_funding,2) }}</strong>
            </div>
               {{-- new statistic --}}
            <div style="background:var(--rgt-005);color:var(--primary);border-bottom:2px solid var(--rgt-02)" class="p-10 br-5 column w-full g-5">
                <div class="row align-center g-2">
                    <span>
                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M216,64H56a8,8,0,0,1,0-16H192a8,8,0,0,0,0-16H56A24,24,0,0,0,32,56V184a24,24,0,0,0,24,24H216a16,16,0,0,0,16-16V80A16,16,0,0,0,216,64Zm-36,80a12,12,0,1,1,12-12A12,12,0,0,1,180,144Z"></path></svg>
                   
                    </span>
                    <strong>Available Balance</strong>
                </div>
                <strong class="font-weight-900 font-1">{{ $currency }}{{ number_format(Auth::guard('users')->user()->main_balance,2) }}</strong>
            </div>
           </div>
        </div>
    </section>
@endsection