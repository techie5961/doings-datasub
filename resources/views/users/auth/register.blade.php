@extends('layout.users.auth')
@section('title')
    Register
@endsection
@section('main')
    <section class="w-full column align-center justify-center">
        <div class="w-full align-center g-10 column max-w-500 bg-light br-20 p-20">
            <img onclick="window.location.href='{{ url('/') }}'" src="{{ asset('logos/'.config('settings.logo_with_bg').'') }}" class="w-70 circle" alt="">
           <div class="column align-center text-center">
             <strong class="font-1-5">Create Your Account</strong>
            <span class="opacity-07">Join {{ config('app.name') }}</span>
           </div>
           {{-- form --}}
           <form action="{{ url('users/post/register/process') }}" onsubmit="PostRequest(event,this,MyFunc.Completed)" class="w-full g-10 column">
           {{-- csrf token --}}
           <input type="hidden" class="inp input" name="_token" value="{{ @csrf_token() }}">
            {{-- new input --}}
            <div class="column g-5">
                <label>First Name</label>
                <div class="cont">
                    <input readonly autocomplete="off" onfocus="this.removeAttribute('readonly')" name="first_name" placeholder="First Name" type="text" class="inp input required">
                </div>
            </div>
                 {{-- new input --}}
            <div class="column g-5">
                <label>Last Name</label>
                <div class="cont">
                    <input readonly autocomplete="off" onfocus="this.removeAttribute('readonly')" name="last_name" placeholder="Last Name" type="text" class="inp input required">
                </div>
            </div>
                 {{-- new input --}}
            <div class="column g-5">
                <label>Phone Number</label>
                <div class="cont">
                    <input readonly autocomplete="off" onfocus="this.removeAttribute('readonly')" name="phone" placeholder="08012345678" type="number" class="inp input required">
                </div>
            </div>
                 {{-- new input --}}
            <div class="column g-5">
                <label>Email Address</label>
                <div class="cont">
                    <input readonly autocomplete="off" onfocus="this.removeAttribute('readonly')" name="email" placeholder="email@example.com" type="email" class="inp input required">
                </div>
            </div>
                  {{-- new input --}}
            <div class="column g-5">
                <label>State</label>
                <div class="cont">
                    <select name="state" class="inp input required">
                        <option value="" selected disabled>Select your state</option>
                        @foreach (NigeriaStates() as $data)
                            <option value="{{ $data }}">{{ $data }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
                 {{-- new input --}}
            <div class="column g-5">
                <label>Referral phone(Optional)</label>
                <div class="cont">
                    <input readonly autocomplete="off" onfocus="this.removeAttribute('readonly')" name="ref" placeholder="Enter referral phone" type="number" class="inp input">
                </div>
            </div>
                 {{-- new input --}}
            <div class="column g-5">
                <label>Password</label>
                <div class="cont">
                    <input readonly autocomplete="new-password" onfocus="this.removeAttribute('readonly')" name="password" placeholder="Create password" type="password" class="inp input required">
                </div>
            </div>
                 {{-- new input --}}
            <div class="column g-5">
                <label>Confirm Password</label>
                <div class="cont">
                    <input readonly autocomplete="new-password" onfocus="this.removeAttribute('readonly')" name="confirm_password" placeholder="Retype password" type="password" class="inp input required">
                </div>
            </div>
                 {{-- new input --}}
            <div class="column g-5">
                <label>Transaction pin</label>
                <div class="cont">
                    <input readonly autocomplete="off" onfocus="this.removeAttribute('readonly')" name="pin" placeholder="4 digit pin" maxlength="4" inputmode="numeric" type="text" class="inp input required">
                </div>
            </div>
            <button class="post">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M256,136a8,8,0,0,1-8,8H232v16a8,8,0,0,1-16,0V144H200a8,8,0,0,1,0-16h16V112a8,8,0,0,1,16,0v16h16A8,8,0,0,1,256,136ZM144,157.68a68,68,0,1,0-71.9,0c-20.65,6.76-39.23,19.39-54.17,37.17A8,8,0,0,0,24,208H192a8,8,0,0,0,6.13-13.15C183.18,177.07,164.6,164.44,144,157.68Z"></path></svg>

                </span>
                <span>Create Account</span>
            </button>
           </form>
           <div class="row align-center justify-center">
            <span>Already have an account? <a class="c-primary no-u" href="{{ url('users/login') }}">Login</a></span>
           </div>
        </div>
    </section>
@endsection
@section('js')
   <script class="js">
    window.MyFunc = {
        Completed : function(response){
            let data=JSON.parse(response);
            if(data.status == 'success'){
                return window.location.href='{{ url('users/login') }}';
            }
        }
    }
   </script>
@endsection