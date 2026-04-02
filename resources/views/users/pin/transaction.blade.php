@extends('layout.users.app')
@section('title')
    Update Transaction Pin
@endsection
@section('main')
      <section class="w-full column g-10">
        {{-- title --}}
         <strong class="font-1-5">Update Transaction Pin</strong>
        {{-- form house --}}
       <div style="box-shadow:0 0 10px rgba(0,0,0,0.1)" class="column g-10 bg-light w-full br-20 p-20">
       
        {{-- icon --}}
        <div style="min-height:50px;min-width:50px;width:50px;height:50px;background:var(--primary-01);color:var(--primary)" class="column m-x-auto br-10 p-10 align-center justify-center">
           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M216.57,39.43A80,80,0,0,0,83.91,120.78L28.69,176A15.86,15.86,0,0,0,24,187.31V216a16,16,0,0,0,16,16H72a8,8,0,0,0,8-8V208H96a8,8,0,0,0,8-8V184h16a8,8,0,0,0,5.66-2.34l9.56-9.57A79.73,79.73,0,0,0,160,176h.1A80,80,0,0,0,216.57,39.43ZM180,92a16,16,0,1,1,16-16A16,16,0,0,1,180,92Z"></path></svg>
           
        </div>
        {{-- form --}}
        <form action="{{ url('users/post/update/transactin/pin/process') }}" method="POST" onsubmit="PostRequest(event,this,MyFunc.Updated)" class="w-full column g-10">
           {{-- csrf token --}}
           <input type="hidden" name="_token" value="{{ @csrf_token() }}" class="inp input">
            {{-- new input --}}
            <div class="column g-5 w-full">
                <label>Old Pin</label>
                <div class="cont">
                    <input inputmode="numeric" maxlength="4" name="old_pin" placeholder="Enter old pin" type="password" class="inp input required">
                </div>
            </div>
             {{-- new input --}}
            <div class="column g-5 w-full">
                <label>New Pin</label>
                <div class="cont">
                    <input name="new_pin" placeholder="Enter new pin" type="password" class="inp input required">
                </div>
            </div>
             {{-- new input --}}
            <div class="column g-5 w-full">
                <label>Confirm New Pin</label>
                <div class="cont">
                    <input name="confirm_pin" placeholder="ReType new pin" type="password" class="inp input required">
                </div>
            </div>
            {{-- submit button --}}
            <button class="post">Update Transaction Pin</button>
        </form>
       </div>
    </section>
@endsection
@section('js')
    <script class="">
        window.MyFunc = {
            Updated : function(response){
                let data=JSON.parse(response);
                if(data.status == 'success'){
                    Redirect('{{ url('users/settings') }}')
                }
            }
        }
    </script>
@endsection