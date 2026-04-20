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
    <title>{{ config('app.name') }}</title>
    <style>
        header{
            position:fixed;
            background:var(--bg);
            top:0;
            left:0;
            right:0;
            padding:20px;
            display:flex;
            flex-direction:row;
            align-items:center;
            gap:10px;
            justify-content: space-between;
            box-shadow:0 0 10px var(--rgt-01);
            border-bottom:1px solid var(--rgt-01);
            z-index:4000;
        }
      
        main{
            padding:0;
        }
        main .hero{
            display:flex;
            flex-direction:column;
            gap:10px;
            padding:20px;
              padding-top:50px;
          background-color: var(--primary-02);
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='28' height='49' viewBox='0 0 28 49'%3E%3Cg fill-rule='evenodd'%3E%3Cg id='hexagons' fill='%232685d9' fill-opacity='0.11' fill-rule='nonzero'%3E%3Cpath d='M13.99 9.25l13 7.5v15l-13 7.5L1 31.75v-15l12.99-7.5zM3 17.9v12.7l10.99 6.34 11-6.35V17.9l-11-6.34L3 17.9zM0 15l12.98-7.5V0h-2v6.35L0 12.69v2.3zm0 18.5L12.98 41v8h-2v-6.85L0 35.81v-2.3zM15 0v7.5L27.99 15H28v-2.31h-.01L17 6.35V0h-2zm0 49v-8l12.99-7.5H28v2.31h-.01L17 42.15V49h-2z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");

        }

        .leading-badge{
            width:fit-content;
            padding: 10px 20px;
            border-radius:1000px;
            display:flex;
            flex-direction: row;
            align-items:center;
            gap:5px;
            backdrop-filter: blur(2px);
            -webkit-backdrop-filter: blur(2px);
            border:1px solid var(--primary);
            background:var(--primary-01);
            color:var(--primary);
            user-select:none;
            -webkit-user-select:none;
        }
        .get-app-btn{
            width:fit-content;
            color:var(--rgb-10);
            background:var(--rgt-10);
            display:flex;
            flex-direction:row;
            align-items:center;
            justify-content:center;
            gap:10px;
            padding:10px;
            border-radius:5px;
            user-select:none;
            -webkit-user-select:none;
            cursor:pointer;
        }
        .menu-icon{
            user-select:none;
            -webkit-user-select:none;

        }
        .menu-icon.active .open{
            display:none;
        }
        .menu-icon .close{
            display:none;
        }
        .menu-icon.active .close{
            display:flex;
        }
        .review-image{
            width:50px;
            height:50px;
            border-radius:50%;
            min-height:50px;
            min-width:50px;
            background:var(--bg-light);
            padding:2px;
            box-shadow:0 0 10px rgba(0,0,0,0.1);
            pointer-events: none;
            user-select:none;
            -webkit-user-select:none;
           
        }
        .review-image img{
            width:100%;
            height:100%;
            border-radius: inherit;

        }
        .review-image:first-of-type{
            position: relative;

        }
        .review-image.child{
            position:absolute;
            left:50%;
            top:0;
            bottom:0;
        }
        .reviews .stars{
            color:goldenrod;

        }
        .reviews .stars svg{
            height:15px;
            width:15px;
        }
        .banners{
            width:100%;
            border-radius:10px;
            overflow:hidden;
            max-width:500px;
           

        }
        .banners img{
            width:100%;
            border-radius:inherit;
            transform:scale(1.0);
            transition:all 0.5s ease;
            pointer-events:none;
            user-select:none;
            -webkit-user-select:none;
        }
        .banners.active img{
            transform:scale(1.3)
        }
       .banner-house .badge{
            padding:10px;
            background:var(--bg-light);
            border-radius:10px;
            position:absolute;
            top:100%;
            z-index:300;
            transform:translateY(-50%);
            display:flex;
            flex-direction:row;
            align-items:center;
            gap:10px;
            border:1px solid var(--rgt-01);
            box-shadow: 0 0 10px rgba(0,0,0,0.1);

        }
        .banner-house{

        }
        .observe{
            opacity:0;
            transform: translateY(30px);
            transition: all 2.5s ease;
        }
        .observe.active{
            opacity:1;
            transform:translateY(0);
        }
        .faq{
            width:100%;
            border-radius:10px;
            background:var(--bg-light);
            padding:20px;
            display:flex;
            flex-direction: column;
           
            border:1px solid var(--rgt-01);
        }
        .faq .answer{
            max-height:0;
            overflow:hidden;
            transition:all 0.5s ease;
        }
        .faq.active .answer{
            max-height:70vh;
        }
        .faq .question .icon{
            transition:all 0.5s ease;
        }
        .faq.active .question .icon{
            transform: rotate(180deg);
            color:var(--primary)
        }
        footer{
            padding:20px;
            border-top:1px solid var(--rgt-01);
            display:flex;
            flex-direction: column;
            gap:10px;
        }
       
       

        /* media query for mobile only */
        @media(max-width:800px){
              nav{
            width:100%;
            position:absolute;
            left:0;
            right:0;
            top:calc(100% + 1px);
            background:inherit;
            display:flex;
            flex-direction:column;
            gap:10px;
            max-height:0vh;
            overflow:hidden;
            transition:max-height 0.5s ease;
            z-index:2000;

            

        }
         nav.active{
             border-bottom:1px solid var(--rgt-01);
            box-shadow:0 3px 10px rgba(0,0,0,0.1);
            max-height:80vh;
        }
        .nav-link{
            width:100%;
            padding:10px;
            background:var(--rgt-005);
            border-radius:5px;
            font-weight:bold;
            font-size:1rem;
            user-select:none;
            -webkit-user-select:none;

        }
        nav > div{
            display:flex;
            flex-direction:column;
            padding:20px;
            gap:10px;
            width:100%;
        }
        header .app-name{
            display:none;
        }
        }
        /* media query for pc only */
        @media(min-width:800px){
          
            header{
                background:var(--bg-light);
                padding:20px;
                user-select:none;
                -webkit-user-select:none;
               
            }
            nav{
                display:flex;
                flex-direction:row;
                align-items:center;
             
              

            }
            nav > div{
                display:flex;
                flex-direction:row !important;
                align-items:center;
                gap:10px;
                padding:0;
                font-weight:bold;
                font-size:1rem;
            }
            nav > div > div:not(.auth-btns){
                cursor:pointer;
            }
            nav > div .auth-btns div{
                font-size:0.8rem;
                padding-left:20px;
                padding-right:20px;
            }
            .menu-icon{
                display:none;
            }
            header .app-name{
                font-family:'luckiest guy';
                font-size:1.5rem;
            }
            main .hero{
                flex-direction:row;
            }
            #about{
                flex-direction:row;
                gap:20px;
            }
            .pc-grid-5{
                grid-template-columns: repeat(5,1fr);
            }
            .pc-grid-3{
                grid-template-columns: repeat(3,1fr);
            }
            footer{
                display:grid;
                grid-template-columns: repeat(4,1fr)
            }

        }
       .cookie{
        display:flex;
        flex-direction: column;
        gap:10px;
        color:var(--text);
        position: fixed;
        bottom: 0;
        width:100%;
        background:var(--bg-light);
        z-index:3000;
        padding:20px;
        border:1px solid var(--primary);
        max-width:500px;

       }
    </style>
</head>
<body>
   <section class="cookie">
    <div>
        🍪 {{ config('app.name') }} uses analytics to understand how people use the site. No personal data is sold.

    </div>
   <div class="row no-select g-10">
     <div onclick="this.closest('.cookie').remove()" style="border:1px solid var(--rgt-07);color:var(--rgt-07);" class="w-fit no-select br-5 p-10 p-x-20">Decline</div>
    <div onclick="AcceptCookies(this)" style="background: var(--primary);color:var(--primary-text);" class="p-10 p-x-20 br-5 w-fit">Accept & Continue</div>
  
   </div>
</section>
     {{-- include action loader for post requests,get requests and spa loading --}}
    @include('components.utilities',[
        'action_loader' => true
    ])  
{{-- include general codes --}}
    @include('components.utilities',[
        'general_codes' => true
    ])
    <header>
       {{-- logo group --}}
       <div class="row align-center g-10">
        <img class="h-40" src="{{ asset('logos/'.config('settings.logo').'') }}" alt="Site Logo">
    <strong class="desc app-name">{{ config('app.name') }}</strong>
       </div>

       {{-- menu icon --}}
       <div onclick="document.querySelector('nav').classList.toggle('active');this.classList.toggle('active')" style="box-shadow: 0 0 10px rgba(0,0,0,0.2)" class="h-40 column menu-icon align-center justify-center w-40 no-shrink min-w-40 min-h-40 br-10 bg-primary primary-text">
<svg class="open" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M228,128a12,12,0,0,1-12,12H40a12,12,0,0,1,0-24H216A12,12,0,0,1,228,128ZM40,76H216a12,12,0,0,0,0-24H40a12,12,0,0,0,0,24ZM216,180H40a12,12,0,0,0,0,24H216a12,12,0,0,0,0-24Z"></path></svg>
<span class="font-1-5 bold close">&times;</span>
       </div>
       {{-- NAV SECTION --}}
    <nav>
     <div>
           {{-- new nav link --}}
        <div onclick="window.location.reload()" class="nav-link">Home</div>
         {{-- new nav link --}}
        <div onclick="window.location.href='#about'" class="nav-link">About</div>
         {{-- new nav link --}}
        <div onclick="window.location.href='#features'" class="nav-link">Features</div>
         {{-- new nav link --}}
        <div onclick="window.location.href='#services'" class="nav-link">Services</div>
         {{-- new nav link --}}
        <div onclick="window.location.href='#faqs'" class="nav-link">FAQ</div>
        {{-- auth button row --}}
        <div class="row auth-btns align-center no-select g-10 w-full">
            {{-- login btn --}}
            <div onclick="window.location.href='{{ url('login') }}'" style="border:1px solid var(--primary);color:var(--primary)" class="h-40 br-5 p-10 pointer row align-center justify-center g-5 w-full">
                <span>
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M14.9453 1.25C13.5778 1.24998 12.4754 1.24996 11.6085 1.36652C10.7084 1.48754 9.95048 1.74643 9.34857 2.34835C8.82363 2.87328 8.55839 3.51836 8.41916 4.27635C8.28387 5.01291 8.25799 5.9143 8.25196 6.99583C8.24966 7.41003 8.58357 7.74768 8.99778 7.74999C9.41199 7.7523 9.74964 7.41838 9.75194 7.00418C9.75803 5.91068 9.78643 5.1356 9.89448 4.54735C9.99859 3.98054 10.1658 3.65246 10.4092 3.40901C10.686 3.13225 11.0746 2.9518 11.8083 2.85315C12.5637 2.75159 13.5648 2.75 15.0002 2.75H16.0002C17.4356 2.75 18.4367 2.75159 19.1921 2.85315C19.9259 2.9518 20.3144 3.13225 20.5912 3.40901C20.868 3.68577 21.0484 4.07435 21.1471 4.80812C21.2486 5.56347 21.2502 6.56459 21.2502 8V16C21.2502 17.4354 21.2486 18.4365 21.1471 19.1919C21.0484 19.9257 20.868 20.3142 20.5912 20.591C20.3144 20.8678 19.9259 21.0482 19.1921 21.1469C18.4367 21.2484 17.4356 21.25 16.0002 21.25H15.0002C13.5648 21.25 12.5637 21.2484 11.8083 21.1469C11.0746 21.0482 10.686 20.8678 10.4092 20.591C10.1658 20.3475 9.99859 20.0195 9.89448 19.4527C9.78643 18.8644 9.75803 18.0893 9.75194 16.9958C9.74964 16.5816 9.41199 16.2477 8.99778 16.25C8.58357 16.2523 8.24966 16.59 8.25196 17.0042C8.25799 18.0857 8.28387 18.9871 8.41916 19.7236C8.55839 20.4816 8.82363 21.1267 9.34857 21.6517C9.95048 22.2536 10.7084 22.5125 11.6085 22.6335C12.4754 22.75 13.5778 22.75 14.9453 22.75H16.0551C17.4227 22.75 18.525 22.75 19.392 22.6335C20.2921 22.5125 21.0499 22.2536 21.6519 21.6517C22.2538 21.0497 22.5127 20.2919 22.6337 19.3918C22.7503 18.5248 22.7502 17.4225 22.7502 16.0549V7.94513C22.7502 6.57754 22.7503 5.47522 22.6337 4.60825C22.5127 3.70814 22.2538 2.95027 21.6519 2.34835C21.0499 1.74643 20.2921 1.48754 19.392 1.36652C18.525 1.24996 17.4227 1.24998 16.0551 1.25H14.9453Z" fill="CurrentColor"></path>
<path d="M2.00098 11.249C1.58676 11.249 1.25098 11.5848 1.25098 11.999C1.25098 12.4132 1.58676 12.749 2.00098 12.749L13.9735 12.749L12.0129 14.4296C11.6984 14.6991 11.662 15.1726 11.9315 15.4871C12.2011 15.8016 12.6746 15.838 12.9891 15.5685L16.4891 12.5685C16.6553 12.426 16.751 12.218 16.751 11.999C16.751 11.7801 16.6553 11.5721 16.4891 11.4296L12.9891 8.42958C12.6746 8.16002 12.2011 8.19644 11.9315 8.51093C11.662 8.82543 11.6984 9.2989 12.0129 9.56847L13.9735 11.249L2.00098 11.249Z" fill="CurrentColor"></path>
</svg>

                </span>
                <span>Login</span>
            </div>
            {{-- register btn --}}
            <div onclick="window.location.href='{{ url('register') }}'" style="background:var(--primary);color:var(--primary-text)" class="h-40 br-5 p-10 pointer row align-center justify-center g-5 w-full">
              <span>
                <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<circle cx="12" cy="6" r="4" fill="CurrentColor"></circle>
<path fill-rule="evenodd" clip-rule="evenodd" d="M16.5 22C14.8501 22 14.0251 22 13.5126 21.4874C13 20.9749 13 20.1499 13 18.5C13 16.8501 13 16.0251 13.5126 15.5126C14.0251 15 14.8501 15 16.5 15C18.1499 15 18.9749 15 19.4874 15.5126C20 16.0251 20 16.8501 20 18.5C20 20.1499 20 20.9749 19.4874 21.4874C18.9749 22 18.1499 22 16.5 22ZM17.0833 16.9444C17.0833 16.6223 16.8222 16.3611 16.5 16.3611C16.1778 16.3611 15.9167 16.6223 15.9167 16.9444V17.9167H14.9444C14.6223 17.9167 14.3611 18.1778 14.3611 18.5C14.3611 18.8222 14.6223 19.0833 14.9444 19.0833H15.9167V20.0556C15.9167 20.3777 16.1778 20.6389 16.5 20.6389C16.8222 20.6389 17.0833 20.3777 17.0833 20.0556V19.0833H18.0556C18.3777 19.0833 18.6389 18.8222 18.6389 18.5C18.6389 18.1778 18.3777 17.9167 18.0556 17.9167H17.0833V16.9444Z" fill="CurrentColor"></path>
<path d="M15.6782 13.5028C15.2051 13.5085 14.7642 13.5258 14.3799 13.5774C13.737 13.6639 13.0334 13.8705 12.4519 14.4519C11.8705 15.0333 11.6639 15.737 11.5775 16.3799C11.4998 16.9576 11.4999 17.6635 11.5 18.414V18.586C11.4999 19.3365 11.4998 20.0424 11.5775 20.6201C11.6381 21.0712 11.7579 21.5522 12.0249 22C12.0166 22 12.0083 22 12 22C4 22 4 19.9853 4 17.5C4 15.0147 7.58172 13 12 13C13.3262 13 14.577 13.1815 15.6782 13.5028Z" fill="CurrentColor"></path>
</svg>

              </span>
                <span>Register</span>
            </div>
        </div>
     </div>
    </nav>
    </header>
    <main>
      {{-- hero section --}}
      <section class="hero">
       <div class="column w-fit g-10">
         {{-- leading badge --}}
        <div class="leading-badge">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M213.85,125.46l-112,120a8,8,0,0,1-13.69-7l14.66-73.33L45.19,143.49a8,8,0,0,1-3-13l112-120a8,8,0,0,1,13.69,7L153.18,90.9l57.63,21.61a8,8,0,0,1,3,12.95Z"></path></svg>

            </span>
            <span>Industry leading VTU platform provider</span>
        </div>
        {{-- hero text section --}}
        <div class="w-full column m-top-20 g-10">
            {{-- hero title text --}}
            <strong style="font-size:2rem;font-weight:900;">Powering Digital Transactions <br> <span class="c-primary">Across Nigeria</span></strong>
          {{-- hero body text --}}
            <span class="opacity-07">
                {{ config('app.name') }} delivers instant data, airtime, utility bills, and TV subscriptions. Join over 12,000 active users and 500+ business partners.
            </span>
        </div>
        {{-- get started btn --}}
        <div class="h-fit w-fit p-10 p-x-20 br-5 bg-primary primary-text no-select pointer row align-center justify-center">Get Started Now</div>
        {{-- login btn --}}
        <div style="border:1px solid var(--primary);color:var(--primary)" class="h-fit w-fit p-10 p-x-20 br-5 no-select pointer row align-center justify-center">Login</div>
        {{-- get app --}}
        <div class="w-full row align-center g-10">
           {{-- playstore --}}
            <div onclick="CreateNotify('info','Google play app is coming soon...')" class="get-app-btn">
                <span class="row h-fit">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M239.82,114.18,72,18.16a16,16,0,0,0-16.12,0A15.68,15.68,0,0,0,48,31.87V224.13a15.68,15.68,0,0,0,7.92,13.67,16,16,0,0,0,16.12,0l167.78-96a15.76,15.76,0,0,0,0-27.64ZM160,139.31l18.92,18.92-88.5,50.66ZM90.4,47.1l88.53,50.67L160,116.69ZM193.31,150l-22-22,22-22,38.43,22Z"></path></svg>
                </span>
                <span>Google Play</span>
            </div>
            {{-- ios store --}}
            <div onclick="CreateNotify('info','IOS app is coming soon...')" class="get-app-btn">
                <span class="row h-fit">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M128.23,30A40,40,0,0,1,167,0h1a8,8,0,0,1,0,16h-1a24,24,0,0,0-23.24,18,8,8,0,1,1-15.5-4ZM223.3,169.59a8.07,8.07,0,0,0-2.8-3.4C203.53,154.53,200,134.64,200,120c0-17.67,13.47-33.06,21.5-40.67a8,8,0,0,0,0-11.62C208.82,55.74,187.82,48,168,48a72.23,72.23,0,0,0-40,12.13,71.56,71.56,0,0,0-90.71,9.09A74.63,74.63,0,0,0,16,123.4a127,127,0,0,0,40.14,89.73A39.8,39.8,0,0,0,83.59,224h87.68a39.84,39.84,0,0,0,29.12-12.57,125,125,0,0,0,17.82-24.6C225.23,174,224.33,172,223.3,169.59Z"></path></svg>
               </span>
                <span>App Store</span>
            </div>
        </div>

        {{-- reviews --}}
        <div class="row reviews align-center w-full">
           {{-- review images --}}
            <div class="review-image">
                <img src="{{ asset('photos/reviews/IMG_6488.jpeg') }}" alt="User photo">
           <div class="review-image first child">
                <img src="{{ asset('photos/reviews/IMG_6491.png') }}" alt="User photo">
            <div class="review-image child">
                <img src="{{ asset('photos/reviews/IMG_6492.jpg') }}" alt="User photo">
           <div class="review-image child">
                <img src="{{ asset('photos/reviews/IMG_6493.jpg') }}" alt="User photo">
            <div class="review-image last child">
                <div class="h-full w-full column align-center bold justify-center circle no-select br-inherit bg-primary primary-text">5k+</div>
            </div>
            </div>
            </div>
            </div>
            
            </div>
            {{-- reviews text --}}
            <div class="column text g-5">
                <strong class="font-1">Trusted by thousands</strong>
                <div class="row stars align-center g-5">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M234.29,114.85l-45,38.83L203,211.75a16.4,16.4,0,0,1-24.5,17.82L128,198.49,77.47,229.57A16.4,16.4,0,0,1,53,211.75l13.76-58.07-45-38.83A16.46,16.46,0,0,1,31.08,86l59-4.76,22.76-55.08a16.36,16.36,0,0,1,30.27,0l22.75,55.08,59,4.76a16.46,16.46,0,0,1,9.37,28.86Z"></path></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M234.29,114.85l-45,38.83L203,211.75a16.4,16.4,0,0,1-24.5,17.82L128,198.49,77.47,229.57A16.4,16.4,0,0,1,53,211.75l13.76-58.07-45-38.83A16.46,16.46,0,0,1,31.08,86l59-4.76,22.76-55.08a16.36,16.36,0,0,1,30.27,0l22.75,55.08,59,4.76a16.46,16.46,0,0,1,9.37,28.86Z"></path></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M234.29,114.85l-45,38.83L203,211.75a16.4,16.4,0,0,1-24.5,17.82L128,198.49,77.47,229.57A16.4,16.4,0,0,1,53,211.75l13.76-58.07-45-38.83A16.46,16.46,0,0,1,31.08,86l59-4.76,22.76-55.08a16.36,16.36,0,0,1,30.27,0l22.75,55.08,59,4.76a16.46,16.46,0,0,1,9.37,28.86Z"></path></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M234.29,114.85l-45,38.83L203,211.75a16.4,16.4,0,0,1-24.5,17.82L128,198.49,77.47,229.57A16.4,16.4,0,0,1,53,211.75l13.76-58.07-45-38.83A16.46,16.46,0,0,1,31.08,86l59-4.76,22.76-55.08a16.36,16.36,0,0,1,30.27,0l22.75,55.08,59,4.76a16.46,16.46,0,0,1,9.37,28.86Z"></path></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M239.18,97.26A16.38,16.38,0,0,0,224.92,86l-59-4.76L143.14,26.15a16.36,16.36,0,0,0-30.27,0L90.11,81.23,31.08,86a16.46,16.46,0,0,0-9.37,28.86l45,38.83L53,211.75a16.4,16.4,0,0,0,24.5,17.82L128,198.49l50.53,31.08A16.4,16.4,0,0,0,203,211.75l-13.76-58.07,45-38.83A16.43,16.43,0,0,0,239.18,97.26Zm-15.34,5.47-48.7,42a8,8,0,0,0-2.56,7.91l14.88,62.8a.37.37,0,0,1-.17.48c-.18.14-.23.11-.38,0l-54.72-33.65A8,8,0,0,0,128,181.1V32c.24,0,.27.08.35.26L153,91.86a8,8,0,0,0,6.75,4.92l63.91,5.16c.16,0,.25,0,.34.29S224,102.63,223.84,102.73Z"></path></svg>
                </div>
            </div>
            
        </div>
       </div>
    {{-- banner --}}
    {{-- banner with badge --}}
    <div class="w-fit banner-house h-fit pos-relative">
         <div class="banners">
        <img src="{{ asset('banners/IMG_6494.jpg') }}" alt="Security banner">
       
    </div>
    {{-- badge --}}
         <div class="badge">
            <div class="h-40 w-40 br-10 column align-center justify-center g-10 bg-primary primary-text">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M208,40H48A16,16,0,0,0,32,56v56c0,52.72,25.52,84.67,46.93,102.19,23.06,18.86,46,25.26,47,25.53a8,8,0,0,0,4.2,0c1-.27,23.91-6.67,47-25.53C198.48,196.67,224,164.72,224,112V56A16,16,0,0,0,208,40Zm-34.32,69.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z"></path></svg>

            </div>
            <div class="column g-5">
                <strong class="desc">100%</strong>
                <span>Secure Transactions</span>
            </div>
        </div>
    </div>
   
    </section>

    {{-- about section --}}
    <section id="about" class="column observe w-full g-10 p-20">
        {{-- banner --}}
         <div class="banners">
        <img src="{{ asset('banners/IMG_6496.jpg') }}" alt="Security banner">
       
    </div>
    {{-- new column --}}
    <div class="w-full column m-top-20 g-10">
        <strong class="font-1 font-weight-700">WHO WE ARE</strong>
        <strong class="desc font-weight-900">Driving financial inclusion through VTU excellence</strong>
        <span>{{ config('app.name') }} is a next-generation VTU platform built for speed, scale, and security. We provide individuals, agents, and enterprises with seamless access to data bundles, airtime, electricity tokens, cable TV, and exam pins — all via one dashboard or API.</span>
        <span>Our infrastructure processes over 100k requests daily with 99.95% uptime. We partner with major telcos and banks to deliver unbeatable discounts.</span>
   {{-- analytics --}}
        <div class="row space-between g-20">
   {{--new analytic  --}}
            <div class="column g-5">
        <strong class="font-1-5 font-weight-900 c-primary">5000+</strong>
        <span class="opacity-07">Happy Users</span>
    </div>
    {{--new analytic  --}}
            <div class="column g-5">
        <strong class="font-1-5 font-weight-900 c-primary">&#8358;250k+</strong>
        <span class="opacity-07">Transactions Processed</span>
    </div>
     {{--new analytic  --}}
            <div class="column g-5">
        <strong class="font-1-5 font-weight-900 c-primary">24/7</strong>
        <span class="opacity-07">Platform Uptime</span>
    </div>
   </div>
   {{-- more about --}}
   <span>
   <strong class="font-1 c-primary">{{ config('app.name') }}</strong> — Enterprise-grade VTU platform for modern Nigeria. Reliable, affordable, lightning-fast.
   </span>
    </div>



    </section>
    {{-- features --}}
    <section class="w-full column g-10 p-20" id="features">
           {{-- banner --}}
         <div class="banners m-x-auto">
        <img src="{{ asset('banners/IMG_6497.jpg') }}" alt="Security banner">
       
    </div>
    
    <div class="grid pc-grid-5 place-center g-10 w-full">
        <div style="background:var(--primary-01);color:var(--primary);" class="w-fit no-select grid-full text-center p-10 p-x-20 br-1000">Our Features</div>
        <div class="desc grid-full text-center font-weight-900 bold">
            <span>Powerful </span><span class="c-primary">Features</span>
        </div>
        <span class="grid-full text-center">Everything you need to transact</span>
        {{-- features card --}}
        <div style="border:1px solid var(--rgt-01)" class="w-full observe feature-card br-10 bg-light column p-20 g-10">
           {{-- feature icon --}}
            <div class="h-50 w-50 br-10 column align-center justify-center min-h-50 min-w-50 bg-primary primary-text">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M213.85,125.46l-112,120a8,8,0,0,1-13.69-7l14.66-73.33L45.19,143.49a8,8,0,0,1-3-13l112-120a8,8,0,0,1,13.69,7L153.18,90.9l57.63,21.61a8,8,0,0,1,3,12.95Z"></path></svg>

            </div>
            {{-- feature title --}}
            <strong class="font-1">Ultra-fast delivery</strong>
            {{-- feature text --}}
          <span>Data & airtime delivered in under 3 seconds. No downtime.</span>
        </div>
         {{-- features card --}}
        <div style="border:1px solid var(--rgt-01)" class="w-full observe feature-card br-10 bg-light column p-20 g-10">
           {{-- feature icon --}}
            <div class="h-50 w-50 br-10 column align-center justify-center min-h-50 min-w-50 bg-primary primary-text">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M231.69,93.81,217.35,43.6A16.07,16.07,0,0,0,202,32H54A16.07,16.07,0,0,0,38.65,43.6L24.31,93.81A7.94,7.94,0,0,0,24,96v16a40,40,0,0,0,16,32v72a8,8,0,0,0,8,8H208a8,8,0,0,0,8-8V144a40,40,0,0,0,16-32V96A7.94,7.94,0,0,0,231.69,93.81ZM88,112a24,24,0,0,1-35.12,21.26,7.88,7.88,0,0,0-1.82-1.06A24,24,0,0,1,40,112v-8H88Zm64,0a24,24,0,0,1-48,0v-8h48Zm64,0a24,24,0,0,1-11.07,20.2,8.08,8.08,0,0,0-1.8,1.05A24,24,0,0,1,168,112v-8h48Z"></path></svg>

            </div>
            {{-- feature title --}}
            <strong class="font-1">Reseller discounts</strong>
            {{-- feature text --}}
          <span>Become an agent & get premium margins on every transaction.</span>
        </div>
          {{-- features card --}}
        <div style="border:1px solid var(--rgt-01)" class="w-full observe feature-card br-10 bg-light column p-20 g-10">
           {{-- feature icon --}}
            <div class="h-50 w-50 br-10 column align-center justify-center min-h-50 min-w-50 bg-primary primary-text">
             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M216,40H40A16,16,0,0,0,24,56V200a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A16,16,0,0,0,216,40ZM92.8,145.6a8,8,0,1,1-9.6,12.8l-32-24a8,8,0,0,1,0-12.8l32-24a8,8,0,0,1,9.6,12.8L69.33,128Zm58.89-71.4-32,112a8,8,0,1,1-15.38-4.4l32-112a8,8,0,0,1,15.38,4.4Zm53.11,60.2-32,24a8,8,0,0,1-9.6-12.8L186.67,128,163.2,110.4a8,8,0,1,1,9.6-12.8l32,24a8,8,0,0,1,0,12.8Z"></path></svg>

            </div>
            {{-- feature title --}}
            <strong class="font-1">Developer API</strong>
            {{-- feature text --}}
          <span>REST API with webhooks — integrate VTU into your app seamlessly.</span>
        </div>
           {{-- features card --}}
        <div style="border:1px solid var(--rgt-01)" class="w-full observe feature-card br-10 bg-light column p-20 g-10">
           {{-- feature icon --}}
            <div class="h-50 w-50 br-10 column align-center justify-center min-h-50 min-w-50 bg-primary primary-text">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M208,40H48A16,16,0,0,0,32,56v56c0,52.72,25.52,84.67,46.93,102.19,23.06,18.86,46,25.27,47,25.53a8,8,0,0,0,4.2,0c1-.26,23.91-6.67,47-25.53C198.48,196.67,224,164.72,224,112V56A16,16,0,0,0,208,40ZM128,223.62a128.25,128.25,0,0,1-38.92-21.81C65.83,182.79,52.37,158,48.9,128H128V56h80v56a141.24,141.24,0,0,1-.9,16H128v95.62Z"></path></svg>

            </div>
            {{-- feature title --}}
            <strong class="font-1">Bank-grade security</strong>
            {{-- feature text --}}
          <span>SSL encryption, fraud detection, secure wallets.</span>
        </div>
            {{-- features card --}}
        <div style="border:1px solid var(--rgt-01)" class="w-full observe feature-card br-10 bg-light column p-20 g-10">
           {{-- feature icon --}}
            <div class="h-50 w-50 br-10 column align-center justify-center min-h-50 min-w-50 bg-primary primary-text">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M224,104v96a16,16,0,0,1-16,16H48a16,16,0,0,1-16-16V104A16,16,0,0,1,48,88H208A16,16,0,0,1,224,104ZM56,72H200a8,8,0,0,0,0-16H56a8,8,0,0,0,0,16ZM72,40H184a8,8,0,0,0,0-16H72a8,8,0,0,0,0,16Z"></path></svg>

            </div>
            {{-- feature title --}}
            <strong class="font-1">Automated bill payments</strong>
            {{-- feature text --}}
          <span>Electricity, DSTV, GOTV, Startimes — instant tokens.</span>
        </div>
    </div>
    </section>

    {{-- services --}}
    <section id="services" class="w-full observe grid grid-2 pc-grid-4 g-10 p-10 place-center">
 {{-- descs --}}
        <div style="background:var(--primary-01);color:var(--primary);" class="w-fit no-select grid-full text-center p-10 p-x-20 br-1000">Our Services</div>
        <div class="desc grid-full text-center font-weight-900 bold">
            <span>Comprehensive </span><span class="c-primary">service suite</span>
        </div>
        <span class="grid-full text-center">One dashboard for all digital needs</span>
        {{-- new service --}}
        <div style="border:1px solid var(--rgt-01);" class="bg-light text-center w-full br-10 g-10 p-20 column align-center">
            <div style="background: var(--primary-01)" class="h-50 c-primary w-50 br-10 min-h-50 min-w-50 column align-center justify-center">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M144,204a16,16,0,1,1-16-16A16,16,0,0,1,144,204ZM239.61,83.91a176,176,0,0,0-223.22,0,12,12,0,1,0,15.23,18.55,152,152,0,0,1,192.76,0,12,12,0,1,0,15.23-18.55Zm-32.16,35.73a128,128,0,0,0-158.9,0,12,12,0,0,0,14.9,18.81,104,104,0,0,1,129.1,0,12,12,0,0,0,14.9-18.81ZM175.07,155.3a80.05,80.05,0,0,0-94.14,0,12,12,0,0,0,14.14,19.4,56,56,0,0,1,65.86,0,12,12,0,1,0,14.14-19.4Z"></path></svg>

            </div>
            <strong class="font-1 font-weight-800">Data bundles</strong>
            <span class="opacity-07">MTN, Glo, Airtel, 9mobile</span>
        </div>
        {{-- new service --}}
        <div style="border:1px solid var(--rgt-01);" class="bg-light text-center w-full br-10 g-10 p-20 column align-center">
            <div style="background: var(--primary-01)" class="h-50 c-primary w-50 br-10 min-h-50 min-w-50 column align-center justify-center">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M231.88,175.08A56.26,56.26,0,0,1,176,224C96.6,224,32,159.4,32,80A56.26,56.26,0,0,1,80.92,24.12a16,16,0,0,1,16.62,9.52l21.12,47.15,0,.12A16,16,0,0,1,117.39,96c-.18.27-.37.52-.57.77L96,121.45c7.49,15.22,23.41,31,38.83,38.51l24.34-20.71a8.12,8.12,0,0,1,.75-.56,16,16,0,0,1,15.17-1.4l.13.06,47.11,21.11A16,16,0,0,1,231.88,175.08Z"></path></svg>

            </div>
            <strong class="font-1 font-weight-800">Airtime top-up</strong>
            <span class="opacity-07">All networks instant</span>
        </div>
         {{-- new service --}}
        <div style="border:1px solid var(--rgt-01);" class="bg-light text-center w-full br-10 g-10 p-20 column align-center">
            <div style="background: var(--primary-01)" class="h-50 c-primary w-50 br-10 min-h-50 min-w-50 column align-center justify-center">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M213.85,125.46l-112,120a8,8,0,0,1-13.69-7l14.66-73.33L45.19,143.49a8,8,0,0,1-3-13l112-120a8,8,0,0,1,13.69,7L153.18,90.9l57.63,21.61a8,8,0,0,1,3,12.95Z"></path></svg>

            </div>
            <strong class="font-1 font-weight-800">Electricity bills</strong>
            <span class="opacity-07">Prepaid / Postpaid</span>
        </div>
        {{-- new service --}}
        <div style="border:1px solid var(--rgt-01);" class="bg-light text-center w-full br-10 g-10 p-20 column align-center">
            <div style="background: var(--primary-01)" class="h-50 c-primary w-50 br-10 min-h-50 min-w-50 column align-center justify-center">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M216,64H147.31l34.35-34.34a8,8,0,1,0-11.32-11.32L128,60.69,85.66,18.34A8,8,0,0,0,74.34,29.66L108.69,64H40A16,16,0,0,0,24,80V200a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V80A16,16,0,0,0,216,64Zm0,136H40V80H216V200ZM200,100v80a4,4,0,0,1-4,4H60a4,4,0,0,1-4-4V100a4,4,0,0,1,4-4H196A4,4,0,0,1,200,100Z"></path></svg>

            </div>
            <strong class="font-1 font-weight-800">Cable TV</strong>
            <span class="opacity-07">DSTV, GOtv, Startimes</span>
        </div>
          {{-- new service --}}
        <div style="border:1px solid var(--rgt-01);" class="bg-light text-center w-full br-10 g-10 p-20 column align-center">
            <div style="background: var(--primary-01)" class="h-50 c-primary w-50 br-10 min-h-50 min-w-50 column align-center justify-center">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M176,207.24a119,119,0,0,0,16-7.73V240a8,8,0,0,1-16,0Zm11.76-88.43-56-29.87a8,8,0,0,0-7.52,14.12L171,128l17-9.06Zm64-29.87-120-64a8,8,0,0,0-7.52,0l-120,64a8,8,0,0,0,0,14.12L32,117.87v48.42a15.91,15.91,0,0,0,4.06,10.65C49.16,191.53,78.51,216,128,216a130,130,0,0,0,48-8.76V130.67L171,128l-43,22.93L43.83,106l0,0L25,96,128,41.07,231,96l-18.78,10-.06,0L188,118.94a8,8,0,0,1,4,6.93v73.64a115.63,115.63,0,0,0,27.94-22.57A15.91,15.91,0,0,0,224,166.29V117.87l27.76-14.81a8,8,0,0,0,0-14.12Z"></path></svg>

            </div>
            <strong class="font-1 font-weight-800">Exam pins</strong>
            <span class="opacity-07">WAEC, NECO, NABTEB</span>
        </div>
        {{-- new service --}}
        <div style="border:1px solid var(--rgt-01);" class="bg-light text-center w-full br-10 g-10 p-20 column align-center">
            <div style="background: var(--primary-01)" class="h-50 c-primary w-50 br-10 min-h-50 min-w-50 column align-center justify-center">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M42.34,85.66a8,8,0,0,1,0-11.32l32-32A8,8,0,0,1,88,48V72H208a8,8,0,0,1,0,16H88v24a8,8,0,0,1-13.66,5.66Zm171.32,84.68-32-32A8,8,0,0,0,168,144v24H48a8,8,0,0,0,0,16H168v24a8,8,0,0,0,13.66,5.66l32-32A8,8,0,0,0,213.66,170.34Z"></path></svg>

            </div>
            <strong class="font-1 font-weight-800">Airtime 2 cash</strong>
            <span class="opacity-07">Convert excess airtime</span>
        </div>
          {{-- new service --}}
        <div style="border:1px solid var(--rgt-01);" class="bg-light text-center w-full br-10 g-10 p-20 column align-center">
            <div style="background: var(--primary-01)" class="h-50 c-primary w-50 br-10 min-h-50 min-w-50 column align-center justify-center">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M241,69.66,221.66,50.34a8,8,0,0,0-11.32,11.32L229.66,81A8,8,0,0,1,232,86.63V168a8,8,0,0,1-16,0V128a24,24,0,0,0-24-24H176V56a24,24,0,0,0-24-24H72A24,24,0,0,0,48,56V208H32a8,8,0,0,0,0,16H192a8,8,0,0,0,0-16H176V120h16a8,8,0,0,1,8,8v40a24,24,0,0,0,48,0V86.63A23.85,23.85,0,0,0,241,69.66ZM144,120H80a8,8,0,0,1,0-16h64a8,8,0,0,1,0,16Z"></path></svg>
           </div>
            <strong class="font-1 font-weight-800">SME data plans</strong>
            <span class="opacity-07">Corporate discounts</span>
        </div>
        {{-- new service --}}
        <div style="border:1px solid var(--rgt-01);" class="bg-light text-center w-full br-10 g-10 p-20 column align-center">
            <div style="background: var(--primary-01)" class="h-50 c-primary w-50 br-10 min-h-50 min-w-50 column align-center justify-center">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M216,72H180.92c.39-.33.79-.65,1.17-1A29.53,29.53,0,0,0,192,49.57,32.62,32.62,0,0,0,158.44,16,29.53,29.53,0,0,0,137,25.91a54.94,54.94,0,0,0-9,14.48,54.94,54.94,0,0,0-9-14.48A29.53,29.53,0,0,0,97.56,16,32.62,32.62,0,0,0,64,49.57,29.53,29.53,0,0,0,73.91,71c.38.33.78.65,1.17,1H40A16,16,0,0,0,24,88v32a16,16,0,0,0,16,16v64a16,16,0,0,0,16,16h60a4,4,0,0,0,4-4V120H40V88h80v32h16V88h80v32H136v92a4,4,0,0,0,4,4h60a16,16,0,0,0,16-16V136a16,16,0,0,0,16-16V88A16,16,0,0,0,216,72ZM84.51,59a13.69,13.69,0,0,1-4.5-10A16.62,16.62,0,0,1,96.59,32h.49a13.69,13.69,0,0,1,10,4.5c8.39,9.48,11.35,25.2,12.39,34.92C109.71,70.39,94,67.43,84.51,59Zm87,0c-9.49,8.4-25.24,11.36-35,12.4C137.7,60.89,141,45.5,149,36.51a13.69,13.69,0,0,1,10-4.5h.49A16.62,16.62,0,0,1,176,49.08,13.69,13.69,0,0,1,171.49,59Z"></path></svg>

            </div>
            <strong class="font-1 font-weight-800">Referral bonus</strong>
            <span class="opacity-07">Earn up to 5%</span>
        </div>
    </section>

    {{-- testimonials --}}
    <section id="testimonials" class="w-full grid pc-grid-3 g-10 p-20 place-center">
{{-- descs --}}
        <div style="background:var(--primary-01);color:var(--primary);" class="w-fit no-select grid-full text-center p-10 p-x-20 br-1000">Testimonials</div>

        <div class="desc grid-full text-center font-weight-900 bold">
            <span>Trusted by  </span><span class="c-primary">industry leaders & individuals</span>
        </div>
        <span class="grid-full text-center">What our users say</span>
        {{-- new testimonial --}}
        <div style="border:1px solid var(--rgt-01)" class="br-10 column g-10 bg-light p-20 w-full">
            {{--stars  --}}
            <div style="color:goldenrod;" class="row g-10 align-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="15" width="15"><path d="M234.29,114.85l-45,38.83L203,211.75a16.4,16.4,0,0,1-24.5,17.82L128,198.49,77.47,229.57A16.4,16.4,0,0,1,53,211.75l13.76-58.07-45-38.83A16.46,16.46,0,0,1,31.08,86l59-4.76,22.76-55.08a16.36,16.36,0,0,1,30.27,0l22.75,55.08,59,4.76a16.46,16.46,0,0,1,9.37,28.86Z"></path></svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="15" width="15"><path d="M234.29,114.85l-45,38.83L203,211.75a16.4,16.4,0,0,1-24.5,17.82L128,198.49,77.47,229.57A16.4,16.4,0,0,1,53,211.75l13.76-58.07-45-38.83A16.46,16.46,0,0,1,31.08,86l59-4.76,22.76-55.08a16.36,16.36,0,0,1,30.27,0l22.75,55.08,59,4.76a16.46,16.46,0,0,1,9.37,28.86Z"></path></svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="15" width="15"><path d="M234.29,114.85l-45,38.83L203,211.75a16.4,16.4,0,0,1-24.5,17.82L128,198.49,77.47,229.57A16.4,16.4,0,0,1,53,211.75l13.76-58.07-45-38.83A16.46,16.46,0,0,1,31.08,86l59-4.76,22.76-55.08a16.36,16.36,0,0,1,30.27,0l22.75,55.08,59,4.76a16.46,16.46,0,0,1,9.37,28.86Z"></path></svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="15" width="15"><path d="M234.29,114.85l-45,38.83L203,211.75a16.4,16.4,0,0,1-24.5,17.82L128,198.49,77.47,229.57A16.4,16.4,0,0,1,53,211.75l13.76-58.07-45-38.83A16.46,16.46,0,0,1,31.08,86l59-4.76,22.76-55.08a16.36,16.36,0,0,1,30.27,0l22.75,55.08,59,4.76a16.46,16.46,0,0,1,9.37,28.86Z"></path></svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="15" width="15"><path d="M234.29,114.85l-45,38.83L203,211.75a16.4,16.4,0,0,1-24.5,17.82L128,198.49,77.47,229.57A16.4,16.4,0,0,1,53,211.75l13.76-58.07-45-38.83A16.46,16.46,0,0,1,31.08,86l59-4.76,22.76-55.08a16.36,16.36,0,0,1,30.27,0l22.75,55.08,59,4.76a16.46,16.46,0,0,1,9.37,28.86Z"></path></svg>
            </div>
            {{-- review --}}
            <span>“We integrated {{ config('app.name') }} API into our platform — zero downtime and amazing support. Our users love the speed.”</span>
            {{-- user --}}
            <div class="row align-center g-10">
               {{-- photo --}}
                <img src="{{ asset('photos/reviews/IMG_6493.jpg') }}" alt="" class="h-40 w-40 circle">
           <div class="column g-5">
            {{-- name --}}
            <strong class="font-1">Chidi N.</strong>
            {{-- career --}}
            <span class="opacity-05">Fintech CTO</span>
           </div>
            </div>
        </div>
         {{-- new testimonial --}}
        <div style="border:1px solid var(--rgt-01)" class="br-10 column g-10 bg-light p-20 w-full">
            {{--stars  --}}
            <div style="color:goldenrod;" class="row g-10 align-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="15" width="15"><path d="M234.29,114.85l-45,38.83L203,211.75a16.4,16.4,0,0,1-24.5,17.82L128,198.49,77.47,229.57A16.4,16.4,0,0,1,53,211.75l13.76-58.07-45-38.83A16.46,16.46,0,0,1,31.08,86l59-4.76,22.76-55.08a16.36,16.36,0,0,1,30.27,0l22.75,55.08,59,4.76a16.46,16.46,0,0,1,9.37,28.86Z"></path></svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="15" width="15"><path d="M234.29,114.85l-45,38.83L203,211.75a16.4,16.4,0,0,1-24.5,17.82L128,198.49,77.47,229.57A16.4,16.4,0,0,1,53,211.75l13.76-58.07-45-38.83A16.46,16.46,0,0,1,31.08,86l59-4.76,22.76-55.08a16.36,16.36,0,0,1,30.27,0l22.75,55.08,59,4.76a16.46,16.46,0,0,1,9.37,28.86Z"></path></svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="15" width="15"><path d="M234.29,114.85l-45,38.83L203,211.75a16.4,16.4,0,0,1-24.5,17.82L128,198.49,77.47,229.57A16.4,16.4,0,0,1,53,211.75l13.76-58.07-45-38.83A16.46,16.46,0,0,1,31.08,86l59-4.76,22.76-55.08a16.36,16.36,0,0,1,30.27,0l22.75,55.08,59,4.76a16.46,16.46,0,0,1,9.37,28.86Z"></path></svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="15" width="15"><path d="M234.29,114.85l-45,38.83L203,211.75a16.4,16.4,0,0,1-24.5,17.82L128,198.49,77.47,229.57A16.4,16.4,0,0,1,53,211.75l13.76-58.07-45-38.83A16.46,16.46,0,0,1,31.08,86l59-4.76,22.76-55.08a16.36,16.36,0,0,1,30.27,0l22.75,55.08,59,4.76a16.46,16.46,0,0,1,9.37,28.86Z"></path></svg>
            </div>
            {{-- review --}}
            <span>“As a reseller, the margins are incredible. {{ config('app.name') }} is my main income source now. Highly recommended!"</span>
            {{-- user --}}
            <div class="row align-center g-10">
               {{-- photo --}}
                <img src="{{ asset('photos/reviews/IMG_6490.jpg') }}" alt="" class="h-40 w-40 circle">
           <div class="column g-5">
            {{-- name --}}
            <strong class="font-1">Amina B.</strong>
            {{-- career --}}
            <span class="opacity-05">Agent</span>
           </div>
            </div>
        </div>
          {{-- new testimonial --}}
        <div style="border:1px solid var(--rgt-01)" class="br-10 column g-10 bg-light p-20 w-full">
            {{--stars  --}}
            <div style="color:goldenrod;" class="row g-10 align-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="15" width="15"><path d="M234.29,114.85l-45,38.83L203,211.75a16.4,16.4,0,0,1-24.5,17.82L128,198.49,77.47,229.57A16.4,16.4,0,0,1,53,211.75l13.76-58.07-45-38.83A16.46,16.46,0,0,1,31.08,86l59-4.76,22.76-55.08a16.36,16.36,0,0,1,30.27,0l22.75,55.08,59,4.76a16.46,16.46,0,0,1,9.37,28.86Z"></path></svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="15" width="15"><path d="M234.29,114.85l-45,38.83L203,211.75a16.4,16.4,0,0,1-24.5,17.82L128,198.49,77.47,229.57A16.4,16.4,0,0,1,53,211.75l13.76-58.07-45-38.83A16.46,16.46,0,0,1,31.08,86l59-4.76,22.76-55.08a16.36,16.36,0,0,1,30.27,0l22.75,55.08,59,4.76a16.46,16.46,0,0,1,9.37,28.86Z"></path></svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="15" width="15"><path d="M234.29,114.85l-45,38.83L203,211.75a16.4,16.4,0,0,1-24.5,17.82L128,198.49,77.47,229.57A16.4,16.4,0,0,1,53,211.75l13.76-58.07-45-38.83A16.46,16.46,0,0,1,31.08,86l59-4.76,22.76-55.08a16.36,16.36,0,0,1,30.27,0l22.75,55.08,59,4.76a16.46,16.46,0,0,1,9.37,28.86Z"></path></svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="15" width="15"><path d="M234.29,114.85l-45,38.83L203,211.75a16.4,16.4,0,0,1-24.5,17.82L128,198.49,77.47,229.57A16.4,16.4,0,0,1,53,211.75l13.76-58.07-45-38.83A16.46,16.46,0,0,1,31.08,86l59-4.76,22.76-55.08a16.36,16.36,0,0,1,30.27,0l22.75,55.08,59,4.76a16.46,16.46,0,0,1,9.37,28.86Z"></path></svg>
            </div>
            {{-- review --}}
            <span>“Electricity tokens arrive in seconds. No more long queues. Best VTU platform in Nigeria right now.”</span>
            {{-- user --}}
            <div class="row align-center g-10">
               {{-- photo --}}
                <img src="{{ asset('photos/reviews/IMG_6489.jpg') }}" alt="" class="h-40 w-40 circle">
           <div class="column g-5">
            {{-- name --}}
            <strong class="font-1">Blessing J.</strong>
            {{-- career --}}
            <span class="opacity-05">Customer</span>
           </div>
            </div>
        </div>
    </section>

    {{-- faq --}}
    <section id="faqs" class="w-full grid pc-x-padding column g-10 p-20 place-center">
        {{-- descs --}}
        <div style="background:var(--primary-01);color:var(--primary);" class="w-fit no-select grid-full text-center p-10 p-x-20 br-1000">FAQs</div>

        <div class="desc grid-full text-center font-weight-900 bold">
            <span>Frequently Asked  </span><span class="c-primary">Questions</span>
        </div>
        <span class="grid-full text-center">Everything you need to know about {{ config('app.name') }}</span>
        {{-- new faq --}}
        <div class="faq">
            <div onclick="this.closest('.faq').classList.toggle('active');" class="question no-select row align-center space-between g-10">
                <strong class="font-1">What is {{ config('app.name') }}?</strong>
                <span class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M216.49,104.49l-80,80a12,12,0,0,1-17,0l-80-80a12,12,0,0,1,17-17L128,159l71.51-71.52a12,12,0,0,1,17,17Z"></path></svg>
                </span>
            </div>
            <div class="answer">
              <span class="p-top-10">
                  {{ config('app.name') }} is a leading VTU platform in Nigeria offering instant data, airtime, bill payments, and API solutions for businesses.
           
              </span>
            </div>
        </div>
          {{-- new faq --}}
        <div class="faq">
            <div onclick="this.closest('.faq').classList.toggle('active');" class="question no-select row align-center space-between g-10">
                <strong class="font-1">How do I become an agent?</strong>
                <span class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M216.49,104.49l-80,80a12,12,0,0,1-17,0l-80-80a12,12,0,0,1,17-17L128,159l71.51-71.52a12,12,0,0,1,17,17Z"></path></svg>
                </span>
            </div>
            <div class="answer">
              <span class="p-top-10">
               Simply register on our platform, complete KYC, and apply for the agent program. You'll get instant discounted rates.

              </span>
            </div>
        </div>
           {{-- new faq --}}
        <div class="faq">
            <div onclick="this.closest('.faq').classList.toggle('active');" class="question no-select row align-center space-between g-10">
                <strong class="font-1">Do you provide SME data plans?</strong>
                <span class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M216.49,104.49l-80,80a12,12,0,0,1-17,0l-80-80a12,12,0,0,1,17-17L128,159l71.51-71.52a12,12,0,0,1,17,17Z"></path></svg>
                </span>
            </div>
            <div class="answer">
              <span class="p-top-10">
             Yes, we have exclusive MTN SME, Airtel Corporate, and Glo Biz data at very competitive prices.

              </span>
            </div>
        </div>
         {{-- new faq --}}
        <div class="faq">
            <div onclick="this.closest('.faq').classList.toggle('active');" class="question no-select row align-center space-between g-10">
                <strong class="font-1">Is the API free to integrate?</strong>
                <span class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M216.49,104.49l-80,80a12,12,0,0,1-17,0l-80-80a12,12,0,0,1,17-17L128,159l71.51-71.52a12,12,0,0,1,17,17Z"></path></svg>
                </span>
            </div>
            <div class="answer">
              <span class="p-top-10">
            API access is free for registered users. You only pay for transactions made via the API.   
              </span>
            </div>
        </div>
        {{-- new faq --}}
        <div class="faq">
            <div onclick="this.closest('.faq').classList.toggle('active');" class="question no-select row align-center space-between g-10">
                <strong class="font-1">What happens if a transaction fails?</strong>
                <span class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M216.49,104.49l-80,80a12,12,0,0,1-17,0l-80-80a12,12,0,0,1,17-17L128,159l71.51-71.52a12,12,0,0,1,17,17Z"></path></svg>
                </span>
            </div>
            <div class="answer">
              <span class="p-top-10">
          Your wallet is refunded automatically within minutes. Our support team also monitors every transaction.
            </span>
            </div>
        </div>
         {{-- new faq --}}
        <div class="faq">
            <div onclick="this.closest('.faq').classList.toggle('active');" class="question no-select row align-center space-between g-10">
                <strong class="font-1">How secure is my wallet?</strong>
                <span class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M216.49,104.49l-80,80a12,12,0,0,1-17,0l-80-80a12,12,0,0,1,17-17L128,159l71.51-71.52a12,12,0,0,1,17,17Z"></path></svg>
                </span>
            </div>
            <div class="answer">
              <span class="p-top-10">
          We use 256-bit encryption, PCI-compliant gateways, and 2FA options for withdrawals.  </span>
            </div>
        </div>
        
    </section>

    {{-- closing section --}}
    <section class="closing p-20 align-center text-center column g-10">
        <strong class="desc">Ready to scale your digital transactions?</strong>
        <span>Join the fastest growing VTU ecosystem in Nigeria today.</span>
        <div onclick="window.location.href='{{ url('register') }}'" class="w-fit br-5 p-10 g-10 bold h-50 row align-center justify-center bg-primary primary-text no-select">
            <span>Create Free Account</span>
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M224.49,136.49l-72,72a12,12,0,0,1-17-17L187,140H40a12,12,0,0,1,0-24H187L135.51,64.48a12,12,0,0,1,17-17l72,72A12,12,0,0,1,224.49,136.49Z"></path></svg>

            </span>
        </div>
    </section>


    
    
    </main>
    
    <footer>
      <div class="column g-10">
          {{-- logo --}}
       <img class="w-100" src="{{ asset('logos/'.config('settings.logo').'') }}" alt="Site Logo">
       {{-- description --}}
       <span class="opacity-05">The most reliable VTU & bill payment platform in Nigeria.</span>
      {{-- social communities --}}
       <div class="row opacity-05 align-center g-10">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M216,24H40A16,16,0,0,0,24,40V216a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V40A16,16,0,0,0,216,24ZM96,176a8,8,0,0,1-16,0V112a8,8,0,0,1,16,0ZM88,96a12,12,0,1,1,12-12A12,12,0,0,1,88,96Zm96,80a8,8,0,0,1-16,0V140a20,20,0,0,0-40,0v36a8,8,0,0,1-16,0V112a8,8,0,0,1,15.79-1.78A36,36,0,0,1,184,140Z"></path></svg>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M216,104v8a56.06,56.06,0,0,1-48.44,55.47A39.8,39.8,0,0,1,176,192v40a8,8,0,0,1-8,8H104a8,8,0,0,1-8-8V216H72a40,40,0,0,1-40-40A24,24,0,0,0,8,152a8,8,0,0,1,0-16,40,40,0,0,1,40,40,24,24,0,0,0,24,24H96v-8a39.8,39.8,0,0,1,8.44-24.53A56.06,56.06,0,0,1,56,112v-8a58.14,58.14,0,0,1,7.69-28.32A59.78,59.78,0,0,1,69.07,28,8,8,0,0,1,76,24a59.75,59.75,0,0,1,48,24h24a59.75,59.75,0,0,1,48-24,8,8,0,0,1,6.93,4,59.74,59.74,0,0,1,5.37,47.68A58,58,0,0,1,216,104Z"></path></svg>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M232,80v40a8,8,0,0,1-8,8,103.25,103.25,0,0,1-48-11.71V156a76,76,0,0,1-152,0c0-36.9,26.91-69.52,62.6-75.88A8,8,0,0,1,96,88v42.69a8,8,0,0,1-4.57,7.23A20,20,0,1,0,120,156V24a8,8,0,0,1,8-8h40a8,8,0,0,1,8,8,48.05,48.05,0,0,0,48,48A8,8,0,0,1,232,80Z"></path></svg>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M176,24H80A56.06,56.06,0,0,0,24,80v96a56.06,56.06,0,0,0,56,56h96a56.06,56.06,0,0,0,56-56V80A56.06,56.06,0,0,0,176,24ZM128,176a48,48,0,1,1,48-48A48.05,48.05,0,0,1,128,176Zm60-96a12,12,0,1,1,12-12A12,12,0,0,1,188,80Zm-28,48a32,32,0,1,1-32-32A32,32,0,0,1,160,128Z"></path></svg>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M232,128a104.16,104.16,0,0,1-91.55,103.26,4,4,0,0,1-4.45-4V152h24a8,8,0,0,0,8-8.53,8.17,8.17,0,0,0-8.25-7.47H136V112a16,16,0,0,1,16-16h16a8,8,0,0,0,8-8.53A8.17,8.17,0,0,0,167.73,80H152a32,32,0,0,0-32,32v24H96a8,8,0,0,0-8,8.53A8.17,8.17,0,0,0,96.27,152H120v75.28a4,4,0,0,1-4.44,4A104.15,104.15,0,0,1,24.07,124.09c2-54,45.74-97.9,99.78-100A104.12,104.12,0,0,1,232,128Z"></path></svg>

       </div>
      </div>
       {{-- quick links --}}
       <div class="column g-5">
        <strong class="desc c-primary">Company</strong>
        <span class="no-select" onclick="window.location.href='#about'">About</span>
        <span class="no-select" onclick="window.location.href='#features'">Features</span>
        <span class="no-select" onclick="window.location.href='#faq'">FAQs</span>
       </div>
         {{-- quick links --}}
       <div class="column g-5">
        <strong class="desc c-primary">Resources</strong>
        <span class="no-select">API Docs</span>
        <span class="no-select">Agent Program</span>
        <span class="no-select" onclick="window.location.href='{{ url('register') }}'">Sign Up</span>
        <span class="no-select" onclick="window.location.href='{{ url('login') }}'">Sign In</span>
       </div>
        {{-- quick links --}}
       <div class="column g-5">
        <strong class="desc c-primary">Legal</strong>
        <span class="no-select" onclick="window.location.href='{{ url('policy/privacy') }}'">Privacy Policy</span>
        <span class="no-select" onclick="window.location.href='{{ url('terms') }}'">Terms of use</span>
        <span class="no-select" onclick="window.location.href='{{ url('policy/cookie') }}'">Cookie Policy</span>
        <span class="no-select" onclick="window.location.href='{{ url('compliance') }}'">Compliance</span>
       </div>

    </footer>
  @include('components.utilities',[
    'vite_js' => true
  ])
  <script>
    window.addEventListener('load',()=>{
     document.querySelector('main').style.paddingTop=document.querySelector('header').getBoundingClientRect().height + 'px'
    document.querySelector('.reviews .text').style.marginLeft=Math.abs(document.querySelector('.reviews .review-image.first').getBoundingClientRect().left - document.querySelector('.reviews .review-image.last').getBoundingClientRect().right) + 'px'
//   banners hover listeners
    let banners=document.querySelectorAll('.banners');
   banners.forEach((banner)=>{
    banner.addEventListener('touchstart',(event)=>{
       banner.classList.add('active');
    });
    banner.addEventListener('touchend',(event)=>{
        banner.classList.remove('active');
    });
    banner.addEventListener('mouseover',()=>{
        banner.classList.add('active');
    });
    banner.addEventListener('mouseleave',()=>{
        banner.classList.remove('active');
    })
   })

//    banner badge restyling
let banner_houses=document.querySelectorAll('.banner-house');
banner_houses.forEach((house)=>{
     house.style.marginBottom=Math.abs(house.getBoundingClientRect().bottom - house.querySelector('.badge').getBoundingClientRect().bottom) + 10 + 'px';

})

// observer
let observer=new IntersectionObserver((entries)=>{
  
    entries.forEach((entry)=>{
        if(entry.isIntersecting){
           
            entry.target.classList.add('active');
        }
    });
},{
    threshold : 0.2
});
let items=document.querySelectorAll('.observe');
items.forEach((item)=>{
    observer.observe(item);
})

if(localStorage.getItem('cookie') == 'true'){
    document.querySelector('.cookie').remove();
}
});

function AcceptCookies(element){
   
    localStorage.setItem('cookie','true');
    element.closest('.cookie').remove();
}
    
  </script>
  {{-- yield js --}}
    @yield('js')
   
</body>
</html>