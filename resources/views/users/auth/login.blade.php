@extends('layout.users.auth')
@section('title')
    Login
@endsection
@section('main')
    <section class="w-full column align-center justify-center">
        <div class="w-full align-center g-10 column max-w-500 bg-light br-20 p-20">
          
            <img src="{{ asset('logos/'.config('settings.logo_with_bg').'') }}" class="w-70 circle" alt="">
           <div class="column align-center text-center">
             <strong class="font-1-5">Welcome Back</strong>
            <span class="opacity-07">Login to continue to {{ config('app.name') }}</span>
           </div>
           {{-- form --}}
           <form action="{{ url('users/post/login/process') }}" onsubmit="PostRequest(event,this,MyFunc.Completed)" class="w-full g-10 column">
           {{-- csrf token --}}
           <input type="hidden" class="inp input" name="_token" value="{{ @csrf_token() }}">
            
                 {{-- new input --}}
            <div class="column g-5">
                <label>Phone Number</label>
                <div class="cont">
                    <input name="phone" placeholder="08012345678" type="number" class="inp input required">
                </div>
            </div>
                
                 {{-- new input --}}
            <div class="column g-5">
                <label>Password</label>
                <div class="cont">
                    <input name="password" placeholder="Enter password" type="password" class="inp input required">
                </div>
            </div>
            
            <button class="post">
                <span>
                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M224,40V216a8,8,0,0,1-16,0V40a8,8,0,0,1,16,0ZM117.66,50.34A8,8,0,0,0,104,56v64H32a8,8,0,0,0,0,16h72v64a8,8,0,0,0,13.66,5.66l72-72a8,8,0,0,0,0-11.32Z"></path></svg>

                </span>
                <span>Login</span>
            </button>
           </form>
           <div class="row align-center g-2 justify-center">
            <a class="c-primary no-u" href="{{ url('users/password/forgot') }}">Forgot password</a>
            <span>&bull;</span>
        <a class="c-primary no-u" href="{{ url('users/register') }}">Create Account</a>
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
                return window.location.href='{{ url('users/dashboard') }}';
            }
        }
    }
   </script>
@endsection