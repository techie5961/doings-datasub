@extends('layout.users.app')
@section('title')
    Agent
@endsection
@section('main')
    <section class="w-full column g-10">
        {{-- cost div --}}
        <div class="w-full br-10 p-20 column bg-primary g-10 primary-text">
           {{-- new row --}}
            <div class="row w-full g-10 align-center space-between">
                
                <div class="column g-5">
                    <strong class="font-1 opacity-07">Agent Plan</strong>
                    @if (($settings->agent ?? 0) != 0)
                        <div style="align-items:flex-end" class="row g-5">
                            <strong class="desc">{{ $currency }}{{ number_format($settings->agent,2) }}</strong>
                            <span>
                                / one-time
                            </span>
                        </div>
                    @else
                        <strong class="desc">Free</strong>
                    @endif
                </div>
                <div style="background:goldenrod" class="br-1000 m-bottom-auto p-5 p-x-10 no-select">Recommended</div>
            </div>
            <small class="opacity-o5">Get access to agent-specific tools and higher transaction limits.</small>
        </div>
        {{-- what you get --}}
        <div style="box-shadow: 0 0 10px rgba(0,0,0,0.1)" class="column bg-light br-10 p-20 g-10">
            <strong class="desc">What You Get</strong>
            {{-- new row --}}
            <div class="row w-full g-5">
                <span class="c-green">
                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="15" width="15"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z"></path></svg>

                </span>
                <span>Access to agent dashboard</span>
            </div>
             {{-- new row --}}
            <div class="row w-full g-5">
                <span class="c-green">
                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="15" width="15"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z"></path></svg>

                </span>
                <span>Higher transaction limits</span>
            </div>
             {{-- new row --}}
            <div class="row w-full g-5">
                <span class="c-green">
                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="15" width="15"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z"></path></svg>

                </span>
                <span>Priority support</span>
            </div>
             {{-- new row --}}
            <div class="row w-full g-5">
                <span class="c-green">
                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="15" width="15"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z"></path></svg>

                </span>
                <span>Access to agent reports</span>
            </div>
             {{-- new row --}}
            <div class="row w-full g-5">
                <span class="c-green">
                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="15" width="15"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z"></path></svg>

                </span>
                <span>Agent tools & tutorials</span>
            </div>
        </div>
        {{-- upgrade btn --}}
       @if (Auth::guard('users')->user()->type == 'agent')
            <div style="pointer-events: none;filter:grayscale(50%)" onclick="document.querySelector('.modal').classList.add('active')" class="w-full br-10 p-10 font-1 bold row h-50 bg-primary primary-text align-center justify-center no-select pointer">Account already upgraded to agent</div>
      
       @else
        <div onclick="document.querySelector('.modal').classList.add('active')" class="w-full br-10 p-10 font-1 bold row h-50 bg-primary primary-text align-center justify-center no-select pointer">Upgrade to Agent</div>
      
       @endif
        {{-- footer prompt --}}
        <div class="w-full row align-center justify-center g-10 text-center opacity-05 no-select"><small>One-time payment &bull; No recurring charges</small></div>
    </section>
    {{-- upgrade modal --}}
    <section onclick="this.classList.remove('active')" class="modal">
        <div onclick="event.stopPropagation()" class="child">
            <strong class="desc">Confirmation</strong>
         
           {{-- prompt --}}
            <div style="border-top:1px solid var(--rgt-01)" class="w-full c-red">
            <p>You are about to upgrade to an Agent Account.You can view our pricing page for details about the discounts available for Agents.</p>
            <p>You would be charged {{ $currency }}{{ ($settings->agent ?? 0) == 0 ? 0 : number_format($settings->agent,2)}} for this service. To continue, enter your transaction pin below</p>
            </div>
            {{-- upgrade form --}}
            <form action="{{ url('users/post/upgrade/account/process') }}" method="POST" onsubmit="PostRequest(event,this,MyFunc.Upgraded)" class="w-full column g-10">
               {{-- csrf token --}}
               <input type="hidden" class="inp input" name="_token" value="{{ @csrf_token() }}">
               {{-- upgrade type --}}
               <input type="hidden" class="inp input" name="type" value="agent">
                {{-- new input --}}
                <div class="column w-full g-5">
                    <label>Transaction pin</label>
                    <div class="cont">
                        <input type="password" name="pin" inputmode="numeric" maxlength="4" placeholder="Enter 4 digits pin" class="inp input required">
                    </div>
                </div>
                {{-- submit btn --}}
                <button class="post">Continue</button>
            </form>

        </div>
    </section>
@endsection
@section('js')
    <script class="js">
        window.MyFunc = {
            Upgraded : (response)=>{
                let data=JSON.parse(response);
                if(data.status == 'success'){
                    window.location.reload();
                }
            }
        }
    </script>
@endsection