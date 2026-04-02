@extends('layout.users.app')
@section('title')
    Profile Update
@endsection
@section('css')
    <style class="css">
        .click-prompt{
            position: relative;
            background:var(--rgt-07);
            color:var(--rgb-10);
            padding:5px 10px;
            border-radius:5px;
            margin-top:5px;
            
        }
        .click-prompt::before{
            content:'';
            position:absolute;
            bottom:100%;
            left:50%;
            transform:translateX(-50%);
            border-left:5px solid transparent;
            border-right:5px solid transparent;
            border-bottom:5px solid var(--rgt-07)
        }
        .photo-house.active img{
            display:flex;
        }
        .photo-house.active span{
            display:none;
        }
        .photo-house img{
            display:none;
        }
    </style>
@endsection

@section('main')
    <section class="column g-20 w-full">
        {{-- profile photo --}}
       <div class="bg-light g-10 column w-full br-10" class="column w-full g-10">
      {{-- head --}}
        <div style="border-bottom:1px solid var(--rgt-01)" class="w-full p-20 row g-10 align-center">
            <span class="c-primary">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M208,32H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM48,48H208v77.38l-24.69-24.7a16,16,0,0,0-22.62,0L53.37,208H48ZM80,96a16,16,0,1,1,16,16A16,16,0,0,1,80,96Z"></path></svg> 
            </span>
            <strong class="desc">Profile Photo</strong>
        </div>
        {{-- form/body --}}
         <form method="POST" action="{{ url('users/post/update/profile/photo/process') }}" onsubmit="PostRequest(event,this,MyFunc.Updated)" class="column g-10 p-20 align-center justify-center">
         {{-- csrf token --}}
            <input type="hidden" value="{{ @csrf_token() }}" name="_token" class="inp input">
            {{-- photo house/label --}}
          <label for="photo" style="box-shadow:0 0 10px rgba(0,0,0,0.1)" class="h-70 photo-house column align-center justify-center perfect-square no-shrink br-10 p-5">
             <span style="font-size:3rem;background:var(--rgt-01)" class="w-full h-full br-inherit no-select column align-center justify-center text-center">
              + 
            </span> 
                <img src="{{ asset('photos/users/89f1cb3d-c173-4b60-b1da-ced57c534553.jpeg') }}" alt="Profile photo" class="w-full h-full br-inherit"> 
        </label>
        {{-- input type file hidden --}}
            <input onchange="MyFunc.ChangePhoto(this)" name="photo" id="photo" required class="display-none inp input" type="file" accept="image/*">
            {{-- click prompt --}}
            <div class="click-prompt">
                <span>Click to select photo</span>
            </div>
            {{-- submit btn --}}
            <button style="height:fit-content;border-bottom:4px solid hsl(var(--primary-hsl),50%,30%);border-radius:5px !important;clip-path:inset(0 round 5px) !important;" class="post p-10 w-fit h-fit">Update Photo</button>
        </form>
       </div>
         {{-- profile info --}}
       <div class="bg-light g-10 column w-full br-10" class="column w-full g-10">
      {{-- head --}}
        <div style="border-bottom:1px solid var(--rgt-01)" class="w-full p-20 row g-10 align-center">
            <span class="c-primary">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M112,120a16,16,0,1,1-16-16A16,16,0,0,1,112,120ZM232,56V200a16,16,0,0,1-16,16H40a16,16,0,0,1-16-16V56A16,16,0,0,1,40,40H216A16,16,0,0,1,232,56ZM135.75,166a39.76,39.76,0,0,0-17.19-23.34,32,32,0,1,0-45.12,0A39.84,39.84,0,0,0,56.25,166a8,8,0,0,0,15.5,4c2.64-10.25,13.06-18,24.25-18s21.62,7.73,24.25,18a8,8,0,1,0,15.5-4ZM200,144a8,8,0,0,0-8-8H152a8,8,0,0,0,0,16h40A8,8,0,0,0,200,144Zm0-32a8,8,0,0,0-8-8H152a8,8,0,0,0,0,16h40A8,8,0,0,0,200,112Z"></path></svg>
            </span>
            <strong class="desc">Profile Information</strong>
        </div>
        {{-- form/body --}}
         <form class="column g-10 p-20 align-center justify-center">
        {{-- new row --}}
            <div style="background:var(--rgt-01);box-shadow:0 5px 5px rgba(0,0,0,0.05)" class="w-full column g-10 br-10 p-10">
            <span class="opacity-07 bold">FULL NAME</span>
            <div class="row align-center g-5">
                <span class="c-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M172,120a44,44,0,1,1-44-44A44,44,0,0,1,172,120Zm52-72V208a16,16,0,0,1-16,16H48a16,16,0,0,1-16-16V48A16,16,0,0,1,48,32H208A16,16,0,0,1,224,48ZM208,208V48H48V208h3.67a80.58,80.58,0,0,1,26.07-38.25q3.08-2.48,6.36-4.62a4,4,0,0,1,4.81.33,59.82,59.82,0,0,0,78.18,0,4,4,0,0,1,4.81-.33q3.28,2.15,6.36,4.62A80.58,80.58,0,0,1,204.33,208H208Z"></path></svg>

                </span>
                <span class="bold">{{ Auth::guard('users')->user()->name }}</span>
            </div>
        </div>
          {{-- new row --}}
            <div style="background:var(--rgt-01);box-shadow:0 5px 5px rgba(0,0,0,0.05)" class="w-full column g-10 br-10 p-10">
            <span class="opacity-07 bold">EMAIL</span>
            <div class="row align-center g-5">
                <span class="c-primary">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M224,48H32a8,8,0,0,0-8,8V192a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A8,8,0,0,0,224,48Zm-8,144H40V74.19l82.59,75.71a8,8,0,0,0,10.82,0L216,74.19V192Z"></path></svg>
                </span>
                <span class="bold">{{ Auth::guard('users')->user()->email }}</span>
            </div>
        </div>
         {{-- new row --}}
            <div style="background:var(--rgt-01);box-shadow:0 5px 5px rgba(0,0,0,0.05)" class="w-full column g-10 br-10 p-10">
            <span class="opacity-07 bold">PHONE</span>
            <div class="row align-center g-5">
                <span class="c-primary">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M231.88,175.08A56.26,56.26,0,0,1,176,224C96.6,224,32,159.4,32,80A56.26,56.26,0,0,1,80.92,24.12a16,16,0,0,1,16.62,9.52l21.12,47.15,0,.12A16,16,0,0,1,117.39,96c-.18.27-.37.52-.57.77L96,121.45c7.49,15.22,23.41,31,38.83,38.51l24.34-20.71a8.12,8.12,0,0,1,.75-.56,16,16,0,0,1,15.17-1.4l.13.06,47.11,21.11A16,16,0,0,1,231.88,175.08Z"></path></svg>
            </span>
                <span class="bold">{{ Auth::guard('users')->user()->phone }}</span>
            </div>
        </div>
        {{-- new row --}}
            <div style="background:var(--rgt-01);box-shadow:0 5px 5px rgba(0,0,0,0.05)" class="w-full column g-10 br-10 p-10">
            <span class="opacity-07 bold">STATE</span>
            <div class="row align-center g-5">
                <span class="c-primary">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M124,175a8,8,0,0,0,7.94,0c2.45-1.41,60-35,60-94.95A64,64,0,0,0,64,80C64,140,121.58,173.54,124,175ZM128,56a24,24,0,1,1-24,24A24,24,0,0,1,128,56ZM240,184c0,31.18-57.71,48-112,48S16,215.18,16,184c0-14.59,13.22-27.51,37.23-36.37a8,8,0,0,1,5.54,15C42.26,168.74,32,176.92,32,184c0,13.36,36.52,32,96,32s96-18.64,96-32c0-7.08-10.26-15.26-26.77-21.36a8,8,0,0,1,5.54-15C226.78,156.49,240,169.41,240,184Z"></path></svg>
                        </span>
                <span class="bold">{{ Auth::guard('users')->user()->state }}</span>
            </div>
        </div>
        {{-- new row --}}
            <div style="background:var(--rgt-01);box-shadow:0 5px 5px rgba(0,0,0,0.05)" class="w-full column g-10 br-10 p-10">
            <span class="opacity-07 bold">MEMBER SINCE</span>
            <div class="row align-center g-5">
                <span class="c-primary">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M208,32H184V24a8,8,0,0,0-16,0v8H88V24a8,8,0,0,0-16,0v8H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM169.66,133.66l-48,48a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L116,164.69l42.34-42.35a8,8,0,0,1,11.32,11.32ZM48,80V48H72v8a8,8,0,0,0,16,0V48h80v8a8,8,0,0,0,16,0V48h24V80Z"></path></svg>
                     </span>
                <span class="bold">{{ $join_date }}</span>
            </div>
        </div>
        
            </form>
       </div>
    </section>
@endsection
@section('js')
    <script class="js">
        window.MyFunc = {
            ChangePhoto : function(element){
                let pix=element.files[0];
                if(pix){
                    document.querySelector('.photo-house img').src=window.URL.createObjectURL(pix);
                    document.querySelector('.photo-house').classList.add('active');
                }else{
                    document.querySelector('.photo-house').classList.remove('active');
                }
                
            },
            Updated : function(response){
                let data=JSON.parse(response);
                if(data.status == 'success'){
                    Redirect('{{ url()->current().http_build_query(request()->query()) }}');
                }
            }
        }
    </script>
@endsection