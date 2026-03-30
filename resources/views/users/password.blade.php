@extends('layout.users.app')
@section('title')
    Password Update
@endsection
@section('main')
    <section class="w-full column g-10">
        {{-- title --}}
         <strong class="font-1-5">Update Password</strong>
        {{-- form house --}}
       <div style="box-shadow:0 0 10px rgba(0,0,0,0.1)" class="column g-10 bg-light w-full br-20 p-20">
       
        {{-- icon --}}
        <div style="min-height:50px;min-width:50px;width:50px;height:50px;background:var(--primary-01);color:var(--primary)" class="column m-x-auto br-10 p-10 align-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="30" width="30"><path d="M208,80H176V56a48,48,0,0,0-96,0V80H48A16,16,0,0,0,32,96V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V96A16,16,0,0,0,208,80ZM96,56a32,32,0,0,1,64,0V80H96Z"></path></svg>

        </div>
        {{-- form --}}
        <form action="{{ url('users/post/update/password/process') }}" method="POST" onsubmit="PostRequest(event,this,MyFunc.Updated)" class="w-full column g-10">
           {{-- csrf token --}}
           <input type="hidden" name="_token" value="{{ @csrf_token() }}" class="inp input">
            {{-- new input --}}
            <div class="column g-5 w-full">
                <label>Old Password</label>
                <div class="cont">
                    <input name="old_password" placeholder="Enter old password" type="password" class="inp input required">
                </div>
            </div>
             {{-- new input --}}
            <div class="column g-5 w-full">
                <label>New Password</label>
                <div class="cont">
                    <input name="new_password" placeholder="Enter new password" type="password" class="inp input required">
                </div>
            </div>
             {{-- new input --}}
            <div class="column g-5 w-full">
                <label>Confirm New Password</label>
                <div class="cont">
                    <input name="confirm_password" placeholder="Retype old password" type="password" class="inp input required">
                </div>
            </div>
            {{-- submit button --}}
            <button class="post">Update Password</button>
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