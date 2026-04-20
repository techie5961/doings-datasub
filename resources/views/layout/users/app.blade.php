<!DOCTYPE html>
<html lang="en">
<head>
    {{-- include meta tags --}}
   @include('components.utilities',[
    'meta_tags' => true
   ])
{{-- include favicon --}}
@include('components.utilities',[
    'favicon' => true
])
{{-- include vite css --}}
@include('components.utilities',[
    'vite_css' => true
])
{{-- yield css --}}
     @yield('css')
    <title>{{ config('app.name') }} || Users || @yield('title') </title>
    <style>
        header{
            position:fixed;
            top:0;
            left:0;
            right:0;
            padding:10px;
            background:var(--bg-light);
            z-index:3000;
           
        }
        footer{
           
            position:fixed;
            bottom:0;
            left:0;
            right:0;
            background:var(--bg-light);
            padding:10px;
            display:grid;
            grid-template-columns:repeat(5,1fr);
            gap:5px;
            place-items:center;
            box-shadow: 0 -5px 5px var(--primary-01);
            z-index:3000;
        }
        footer .icon{
            width:40px;
            aspect-ratio:1;
            flex-shrink:1;
            display:flex;
            align-items:center;
            justify-content: center;
            border-radius:50%;
            background:var(--primary-02);
            color:var(--primary);
        }
        footer > div{
            width:100%;
            display:flex;
            flex-direction: column;
            gap:2px;
            align-items:center;
            justify-content:center;
            text-align:center;
            user-select: none;
            
        }
        footer > div.active{
            color:var(--primary);
            pointer-events:none;
        }
        footer > div.active .icon{
            background:var(--primary);
            color:var(--primary-text);
            box-shadow:0 0 10px var(--primary-05);
        }


        @media(min-width:800px){
            header,main,footer{
                padding-left:10vw;
                padding-right:10vw;
            }
            footer > div{
                cursor:pointer;
            }
        }

    </style>
</head>
<body>
     {{-- include action loader for post requests,get requests and spa loading --}}
    @include('components.utilities',[
        'action_loader' => true
    ])  
{{-- include general codes --}}
    @include('components.utilities',[
        'general_codes' => true
    ])
    <header>
        <div class="row w-full align-center g-10 space-between">
            @isset(Auth::guard('users')->user()->photo)
                <img class="w-50 perfect-square circle no-shrink circle" src="{{ asset('photos/users/'.Auth::guard('users')->user()->photo.'') }}" alt="">
            @else
            <div class="w-40 bg-primary no-shrink no-select primary-text perfect-square circle column align-center justify-center">
               {{ $inititals }}
            </div>
            @endisset
            <div class="column m-right-auto">
                <strong class="font-1">Hi,{{ Auth::guard('users')->user()->name }}</strong>
                <span class="opacity-07">Welcome,let's complete payment</span>
            </div>
            <span class="c-primary">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="30" width="30"><path d="M225.29,165.93C216.61,151,212,129.57,212,104a84,84,0,0,0-168,0c0,25.58-4.59,47-13.27,61.93A20.08,20.08,0,0,0,30.66,186,19.77,19.77,0,0,0,48,196H84.18a44,44,0,0,0,87.64,0H208a19.77,19.77,0,0,0,17.31-10A20.08,20.08,0,0,0,225.29,165.93ZM128,212a20,20,0,0,1-19.6-16h39.2A20,20,0,0,1,128,212ZM54.66,172C63.51,154,68,131.14,68,104a60,60,0,0,1,120,0c0,27.13,4.48,50,13.33,68Z"></path></svg>

            </span>
        </div>
    </header>
    <main>
      
        {{-- yield main --}}
        @yield('main')
       
    </main>
    
    <footer>
        {{-- new link --}}
        <div onclick="Navigate('{{ url('users/dashboard') }}',this,)" class="{{ url()->current() == url('users/dashboard') ? 'active' : '' }}">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M240,208H224V136l2.34,2.34A8,8,0,0,0,237.66,127L139.31,28.68a16,16,0,0,0-22.62,0L18.34,127a8,8,0,0,0,11.32,11.31L32,136v72H16a8,8,0,0,0,0,16H240a8,8,0,0,0,0-16Zm-88,0H104V160a4,4,0,0,1,4-4h40a4,4,0,0,1,4,4Z"></path></svg>

          </div>
          <small>Home</small>
        </div>
        {{-- new link --}}
        <div class="{{ url()->current() == url('users/transactions') ? 'active' : '' }}" onclick="Navigate('{{ url('users/transactions') }}',this)">
          <div class="icon">
           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M224,128A96,96,0,0,1,62.11,197.82a8,8,0,1,1,11-11.64A80,80,0,1,0,71.43,71.43C67.9,75,64.58,78.51,61.35,82L77.66,98.34A8,8,0,0,1,72,112H32a8,8,0,0,1-8-8V64a8,8,0,0,1,13.66-5.66L50,70.7c3.22-3.49,6.54-7,10.06-10.55A96,96,0,0,1,224,128ZM128,72a8,8,0,0,0-8,8v48a8,8,0,0,0,3.88,6.86l40,24a8,8,0,1,0,8.24-13.72L136,123.47V80A8,8,0,0,0,128,72Z"></path></svg>

          </div>
          <small>History</small>
        </div>
          {{-- new link --}}
        <div class="{{ url()->current() == url('users/services') ? 'active' : '' }}" onclick="Navigate('{{ url('users/services') }}',this)">
          <div class="icon">
         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M224,64H176V56a24,24,0,0,0-24-24H104A24,24,0,0,0,80,56v8H32A16,16,0,0,0,16,80v28a4,4,0,0,0,4,4H64V96.27A8.17,8.17,0,0,1,71.47,88,8,8,0,0,1,80,96v16h96V96.27A8.17,8.17,0,0,1,183.47,88,8,8,0,0,1,192,96v16h44a4,4,0,0,0,4-4V80A16,16,0,0,0,224,64Zm-64,0H96V56a8,8,0,0,1,8-8h48a8,8,0,0,1,8,8Zm80,68v60a16,16,0,0,1-16,16H32a16,16,0,0,1-16-16V132a4,4,0,0,1,4-4H64v16a8,8,0,0,0,8.53,8A8.17,8.17,0,0,0,80,143.73V128h96v16a8,8,0,0,0,8.53,8,8.17,8.17,0,0,0,7.47-8.25V128h44A4,4,0,0,1,240,132Z"></path></svg>

          </div>
          <small>Services</small>
        </div>
           {{-- new link --}}
        <div class="{{ url()->current() == url('users/support') ? 'active' : '' }}" onclick="Navigate('{{ url('users/support') }}',this)">
          <div class="icon">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M232,128v56a24,24,0,0,1-24,24H192a24,24,0,0,1-24-24V144a24,24,0,0,1,24-24h23.65a87.71,87.71,0,0,0-87-80H128a88,88,0,0,0-87.64,80H64a24,24,0,0,1,24,24v40a24,24,0,0,1-24,24H48a24,24,0,0,1-24-24V128A104.11,104.11,0,0,1,201.89,54.66,103.41,103.41,0,0,1,232,128Z"></path></svg>

          </div>
          <small>Support</small>
        </div>

          {{-- new link --}}
        <div class="{{ url()->current() == url('users/settings') ? 'active' : '' }}" onclick="Navigate('{{ url('users/settings') }}',this)">
          <div class="icon">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M216,130.16q.06-2.16,0-4.32l14.92-18.64a8,8,0,0,0,1.48-7.06,107.6,107.6,0,0,0-10.88-26.25,8,8,0,0,0-6-3.93l-23.72-2.64q-1.48-1.56-3-3L186,40.54a8,8,0,0,0-3.94-6,107.29,107.29,0,0,0-26.25-10.86,8,8,0,0,0-7.06,1.48L130.16,40Q128,40,125.84,40L107.2,25.11a8,8,0,0,0-7.06-1.48A107.6,107.6,0,0,0,73.89,34.51a8,8,0,0,0-3.93,6L67.32,64.27q-1.56,1.49-3,3L40.54,70a8,8,0,0,0-6,3.94,107.71,107.71,0,0,0-10.87,26.25,8,8,0,0,0,1.49,7.06L40,125.84Q40,128,40,130.16L25.11,148.8a8,8,0,0,0-1.48,7.06,107.6,107.6,0,0,0,10.88,26.25,8,8,0,0,0,6,3.93l23.72,2.64q1.49,1.56,3,3L70,215.46a8,8,0,0,0,3.94,6,107.71,107.71,0,0,0,26.25,10.87,8,8,0,0,0,7.06-1.49L125.84,216q2.16.06,4.32,0l18.64,14.92a8,8,0,0,0,7.06,1.48,107.21,107.21,0,0,0,26.25-10.88,8,8,0,0,0,3.93-6l2.64-23.72q1.56-1.48,3-3L215.46,186a8,8,0,0,0,6-3.94,107.71,107.71,0,0,0,10.87-26.25,8,8,0,0,0-1.49-7.06ZM128,168a40,40,0,1,1,40-40A40,40,0,0,1,128,168Z"></path></svg>

          </div>
          <small>Settings</small>
        </div>

    </footer>
  @include('components.utilities',[
    'vite_js' => true
  ])
   <script>
      
        document.querySelector('main').style.paddingTop=document.querySelector('header').getBoundingClientRect().height + 10 + 'px';
        document.querySelector('main').style.paddingBottom=document.querySelector('footer').getBoundingClientRect().height + 10 + 'px';

      
       function Navigate(url,element=null){
            if(element !== null){
                 document.querySelectorAll('footer > div').forEach((div)=>{
            div.classList.remove('active');
          });
            
                element.classList.add('active');
            }

                 window.location.href=url;
         

        }
        function Redirect(url){
            window.location.href=url;
        }
     
    </script>
  {{-- yield js --}}
    @yield('js')
   
</body>
</html>