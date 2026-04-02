@extends('layout.users.app')
@section('title')
   Settings 
@endsection
@section('css')
  <style class="css">
        .groups > div{
            border-bottom:1px solid var(--rgt-01);
            padding-bottom:10px;
            user-select: none;
        }
        .groups > div:last-of-type{
            border-bottom: none;
            padding-bottom: 0;
        }
        @media(min-width:800px){
            .groups > div{
                cursor:pointer;
            }
        }
    </style>
@endsection
@section('main')
     <section class="column w-full g-20">
        {{-- profile settings --}}
       <div class="column g-10 w-full">
         {{-- heading --}}
        <div class="row align-center g-10">
            <span class="c-primary">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M234.38,210a123.36,123.36,0,0,0-60.78-53.23,76,76,0,1,0-91.2,0A123.36,123.36,0,0,0,21.62,210a12,12,0,1,0,20.77,12c18.12-31.32,50.12-50,85.61-50s67.49,18.69,85.61,50a12,12,0,0,0,20.77-12ZM76,96a52,52,0,1,1,52,52A52.06,52.06,0,0,1,76,96Z"></path></svg>

            </span>
            <strong class="desc">Profile Settings</strong>
        </div>
        {{-- body/links --}}
        <div style="box-shadow:0 0 10px rgba(0,0,0,0.1)" class="w-full groups bg-light br-20 column p-20 g-10">
           {{-- new row/link --}}
            <div onclick="Redirect('{{ url('users/profile/update') }}')" class="row space-between w-full g-10 align-center">
                <div style="background:var(--primary-01);color:var(--primary)" class="column h-40 perfect-square br-10 align-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M112,120a16,16,0,1,1-16-16A16,16,0,0,1,112,120ZM232,56V200a16,16,0,0,1-16,16H40a16,16,0,0,1-16-16V56A16,16,0,0,1,40,40H216A16,16,0,0,1,232,56ZM135.75,166a39.76,39.76,0,0,0-17.19-23.34,32,32,0,1,0-45.12,0A39.84,39.84,0,0,0,56.25,166a8,8,0,0,0,15.5,4c2.64-10.25,13.06-18,24.25-18s21.62,7.73,24.25,18a8,8,0,1,0,15.5-4ZM200,144a8,8,0,0,0-8-8H152a8,8,0,0,0,0,16h40A8,8,0,0,0,200,144Zm0-32a8,8,0,0,0-8-8H152a8,8,0,0,0,0,16h40A8,8,0,0,0,200,112Z"></path></svg>

                </div>
                <div class="column m-right-auto g-2">
                   <strong class="font-1">Manage Profile</strong>
                    <small class="opacity-07">Update personal info and photo</small>
                </div>
                <span class="opacity-07">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M184.49,136.49l-80,80a12,12,0,0,1-17-17L159,128,87.51,56.49a12,12,0,1,1,17-17l80,80A12,12,0,0,1,184.49,136.49Z"></path></svg>

                </span>
                
            </div>
             {{-- new row/link --}}
            <div onclick="Redirect('{{ url('users/password/update') }}')" class="row space-between w-full g-10 align-center">
                <div style="background:var(--primary-01);color:var(--primary)" class="column h-40 perfect-square br-10 align-center justify-center">
                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M208,80H176V56a48,48,0,0,0-96,0V80H48A16,16,0,0,0,32,96V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V96A16,16,0,0,0,208,80ZM96,56a32,32,0,0,1,64,0V80H96Z"></path></svg>

                </div>
                <div class="column m-right-auto g-2">
                    <strong class="font-1">Update Password</strong>
                    <small class="opacity-07">Change your login password</small>
                </div>
                <span class="opacity-07">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M184.49,136.49l-80,80a12,12,0,0,1-17-17L159,128,87.51,56.49a12,12,0,1,1,17-17l80,80A12,12,0,0,1,184.49,136.49Z"></path></svg>

                </span>
                
            </div>
              {{-- new row/link --}}
            <div onclick="Redirect('{{ url('users/transaction/pin/update') }}')" class="row space-between w-full g-10 align-center">
                <div style="background:var(--primary-01);color:var(--primary)" class="column h-40 perfect-square br-10 align-center justify-center">
                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M216.57,39.43A80,80,0,0,0,83.91,120.78L28.69,176A15.86,15.86,0,0,0,24,187.31V216a16,16,0,0,0,16,16H72a8,8,0,0,0,8-8V208H96a8,8,0,0,0,8-8V184h16a8,8,0,0,0,5.66-2.34l9.56-9.57A79.73,79.73,0,0,0,160,176h.1A80,80,0,0,0,216.57,39.43ZM180,92a16,16,0,1,1,16-16A16,16,0,0,1,180,92Z"></path></svg>

                </div>
                <div class="column m-right-auto g-2">
                    <strong class="font-1">Update Transaction Pin</strong>
                    <small class="opacity-07">Modify your 4 digit transaction pin</small>
                </div>
                <span class="opacity-07">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M184.49,136.49l-80,80a12,12,0,0,1-17-17L159,128,87.51,56.49a12,12,0,1,1,17-17l80,80A12,12,0,0,1,184.49,136.49Z"></path></svg>

                </span>
                
            </div>
        </div>
       </div>


           {{-- security & privacy --}}
       <div class="column g-10 w-full">
         {{-- heading --}}
        <div class="row align-center g-10">
            <span class="c-primary">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M208,36H48A20,20,0,0,0,28,56v56c0,54.29,26.32,87.22,48.4,105.29,23.71,19.39,47.44,26,48.44,26.29a12.1,12.1,0,0,0,6.32,0c1-.28,24.73-6.9,48.44-26.29,22.08-18.07,48.4-51,48.4-105.29V56A20,20,0,0,0,208,36Zm-4,76c0,1.34,0,2.68-.06,4H140V60h64ZM52,60h64v56H52.06c0-1.32-.06-2.66-.06-4Zm3,80h61v74.29a127,127,0,0,1-25.09-16.14C72.22,182.61,60.2,163.13,55,140Zm110.1,58.15A127,127,0,0,1,140,214.29V140h61C195.8,163.13,183.78,182.61,165.09,198.15Z"></path></svg>

            </span>
            <strong class="desc">Security & Privacy</strong>
        </div>
        {{-- body/links --}}
        <div style="box-shadow:0 0 10px rgba(0,0,0,0.1)" class="w-full groups bg-light br-20 column p-20 g-10">
           {{-- new row/link --}}
            <div onclick="Redirect('{{ url('users/2fa') }}')" class="row space-between w-full g-10 align-center">
                <div style="background:var(--primary-01);color:var(--primary)" class="column h-40 perfect-square br-10 align-center justify-center">
                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M224,56v56c0,52.72-25.52,84.67-46.93,102.19-23.06,18.86-46,25.27-47,25.53a8,8,0,0,1-4.2,0c-1-.26-23.91-6.67-47-25.53C57.52,196.67,32,164.72,32,112V56A16,16,0,0,1,48,40H208A16,16,0,0,1,224,56Z"></path></svg>

                </div>
                <div class="column m-right-auto g-2">
                   <strong class="font-1">Two-Factor Authentication</strong>
                    <small class="opacity-07">Extra layer of security</small>
                </div>
                <span class="opacity-07">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M184.49,136.49l-80,80a12,12,0,0,1-17-17L159,128,87.51,56.49a12,12,0,1,1,17-17l80,80A12,12,0,0,1,184.49,136.49Z"></path></svg>

                </span>
                
            </div>
             {{-- new row/link --}}
            <div onclick="Redirect('{{ url('users/disable/pin') }}')" class="row space-between w-full g-10 align-center">
                <div style="background:var(--primary-01);color:var(--primary)" class="column h-40 perfect-square br-10 align-center justify-center">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24ZM40,128A88,88,0,0,1,190.2,65.8L65.8,190.2A87.76,87.76,0,0,1,40,128Z"></path></svg>

                </div>
                <div class="column m-right-auto g-2">
                    <strong class="font-1">Disable Pin</strong>
                    <small class="opacity-07">Temporarily turn off transaction PIN</small>
                </div>
                <span class="opacity-07">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M184.49,136.49l-80,80a12,12,0,0,1-17-17L159,128,87.51,56.49a12,12,0,1,1,17-17l80,80A12,12,0,0,1,184.49,136.49Z"></path></svg>

                </span>
                
            </div>
            
        </div>
       </div>

       
           {{-- preferences --}}
       <div class="column g-10 w-full">
         {{-- heading --}}
        <div class="row align-center g-10">
            <span class="c-primary">
             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M224,48V152a16,16,0,0,1-16,16H112v16a8,8,0,0,1-13.66,5.66l-24-24a8,8,0,0,1,0-11.32l24-24A8,8,0,0,1,112,136v16h96V48H96v8a8,8,0,0,1-16,0V48A16,16,0,0,1,96,32H208A16,16,0,0,1,224,48ZM168,192a8,8,0,0,0-8,8v8H48V104h96v16a8,8,0,0,0,13.66,5.66l24-24a8,8,0,0,0,0-11.32l-24-24A8,8,0,0,0,144,72V88H48a16,16,0,0,0-16,16V208a16,16,0,0,0,16,16H160a16,16,0,0,0,16-16v-8A8,8,0,0,0,168,192Z"></path></svg>

            </span>
            <strong class="desc">Preferences</strong>
        </div>
        {{-- body/links --}}
        <div style="box-shadow:0 0 10px rgba(0,0,0,0.1)" class="w-full groups bg-light br-20 column p-20 g-10">
           {{-- new row/link --}}
            <div onclick="Redirect('{{ url('users/notifications/preferences') }}')" class="row space-between w-full g-10 align-center">
                <div style="background:var(--primary-01);color:var(--primary)" class="column h-40 perfect-square br-10 align-center justify-center">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M221.8,175.94C216.25,166.38,208,139.33,208,104a80,80,0,1,0-160,0c0,35.34-8.26,62.38-13.81,71.94A16,16,0,0,0,48,200H88.81a40,40,0,0,0,78.38,0H208a16,16,0,0,0,13.8-24.06ZM128,216a24,24,0,0,1-22.62-16h45.24A24,24,0,0,1,128,216Z"></path></svg>

                </div>
                <div class="column m-right-auto g-2">
                   <strong class="font-1">Notifications</strong>
                    <small class="opacity-07">Email, SMS, push alerts</small>
                </div>
                <span class="opacity-07">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M184.49,136.49l-80,80a12,12,0,0,1-17-17L159,128,87.51,56.49a12,12,0,1,1,17-17l80,80A12,12,0,0,1,184.49,136.49Z"></path></svg>

                </span>
                
            </div>
            
            
        </div>
       </div>

          {{-- API access --}}
       <div class="column g-10 w-full">
         {{-- heading --}}
        <div class="row align-center g-10">
            <span class="c-primary">
             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M71.68,97.22,34.74,128l36.94,30.78a12,12,0,1,1-15.36,18.44l-48-40a12,12,0,0,1,0-18.44l48-40A12,12,0,0,1,71.68,97.22Zm176,21.56-48-40a12,12,0,1,0-15.36,18.44L221.26,128l-36.94,30.78a12,12,0,1,0,15.36,18.44l48-40a12,12,0,0,0,0-18.44ZM164.1,28.72a12,12,0,0,0-15.38,7.18l-64,176a12,12,0,0,0,7.18,15.37A11.79,11.79,0,0,0,96,228a12,12,0,0,0,11.28-7.9l64-176A12,12,0,0,0,164.1,28.72Z"></path></svg>

            </span>
            <strong class="desc">API ACCESS</strong>
        </div>
        {{-- body/links --}}
        <div style="box-shadow:0 0 10px rgba(0,0,0,0.1)" class="w-full groups bg-light br-20 column p-20 g-10">
           {{-- new row/link --}}
            <div class="row space-between w-full g-10 align-center">
               
                <div class="column m-right-auto g-5">
                   <strong class="font-1">Developer API</strong>
                    <small class="opacity-07">Contact admin to access API. After approval, your API key will be shown here.</small>
                    <div onclick="window.open('{{ $contact_settings->whatsapp }}')" style="background: var(--rgt-08);color:var(--rgb-09)" class="w-fit no-select p-10 g-10 p-x-20 br-1000 row align-center">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M187.3,159.06A36.09,36.09,0,0,1,152,188a84.09,84.09,0,0,1-84-84A36.09,36.09,0,0,1,96.94,68.7,12,12,0,0,1,110,75.1l11.48,23a12,12,0,0,1-.75,12l-8.52,12.78a44.56,44.56,0,0,0,20.91,20.91l12.78-8.52a12,12,0,0,1,12-.75l23,11.48A12,12,0,0,1,187.3,159.06ZM236,128A108,108,0,0,1,78.77,224.15L46.34,235A20,20,0,0,1,21,209.66l10.81-32.43A108,108,0,1,1,236,128Zm-24,0A84,84,0,1,0,55.27,170.06a12,12,0,0,1,1,9.81l-9.93,29.79,29.79-9.93a12.1,12.1,0,0,1,3.8-.62,12,12,0,0,1,6,1.62A84,84,0,0,0,212,128Z"></path></svg>

                        </span>
                        <span>Contact Admin to Access API</span>
                    </div>
                </div>
              
            </div>
            
            
        </div>
       </div>

              {{-- download app --}}
       <div class="column g-10 w-full">
         {{-- heading --}}
        <div class="row align-center g-10">
            <span class="c-primary">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M71.51,88.49a12,12,0,0,1,17-17L116,99V24a12,12,0,0,1,24,0V99l27.51-27.52a12,12,0,0,1,17,17l-48,48a12,12,0,0,1-17,0ZM224,116H188a12,12,0,0,0,0,24h32v56H36V140H68a12,12,0,0,0,0-24H32a20,20,0,0,0-20,20v64a20,20,0,0,0,20,20H224a20,20,0,0,0,20-20V136A20,20,0,0,0,224,116Zm-20,52a16,16,0,1,0-16,16A16,16,0,0,0,204,168Z"></path></svg>

            </span>
            <strong class="desc">Download App</strong>
        </div>
        {{-- body/links --}}
        <div style="box-shadow:0 0 10px rgba(0,0,0,0.1)" class="w-full groups bg-light br-20 column p-20 g-10">
           {{-- new row/link --}}
            <div class="row space-between w-full g-10 align-center">
               
                <div class="column m-right-auto g-5">
                   <strong class="font-1">Get the mobile app</strong>
                    <small class="opacity-07">Faster access, biometric login & more</small>
                  <div class="row align-center g-10">
                      <div style="background: var(--rgt-09);color:var(--rgb-09)" class="w-fit no-select p-10 g-10 p-x-20 br-1000 row align-center">
                        <span>
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M128.23,30A40,40,0,0,1,167,0h1a8,8,0,0,1,0,16h-1a24,24,0,0,0-23.24,18,8,8,0,1,1-15.5-4ZM223.3,169.59a8.07,8.07,0,0,0-2.8-3.4C203.53,154.53,200,134.64,200,120c0-17.67,13.47-33.06,21.5-40.67a8,8,0,0,0,0-11.62C208.82,55.74,187.82,48,168,48a72.23,72.23,0,0,0-40,12.13,71.56,71.56,0,0,0-90.71,9.09A74.63,74.63,0,0,0,16,123.4a127,127,0,0,0,40.14,89.73A39.8,39.8,0,0,0,83.59,224h87.68a39.84,39.84,0,0,0,29.12-12.57,125,125,0,0,0,17.82-24.6C225.23,174,224.33,172,223.3,169.59Z"></path></svg>

                        </span>
                        <span>App Store</span>
                    </div>
                     <div style="background: var(--rgt-09);color:var(--rgb-09)" class="w-fit no-select p-10 g-10 p-x-20 br-1000 row align-center">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M239.82,114.18,72,18.16a16,16,0,0,0-16.12,0A15.68,15.68,0,0,0,48,31.87V224.13a15.68,15.68,0,0,0,7.92,13.67,16,16,0,0,0,16.12,0l167.78-96a15.76,15.76,0,0,0,0-27.64ZM160,139.31l18.92,18.92-88.5,50.66ZM90.4,47.1l88.53,50.67L160,116.69ZM193.31,150l-22-22,22-22,38.43,22Z"></path></svg>
                            
                        </span>
                        <span>Google Play</span>
                    </div>
                  </div>
                </div>
              
            </div>
            

            
            
        </div>
       </div>
       

             {{-- preferences --}}
       <div class="column g-10 w-full">
         {{-- heading --}}
        <div class="row align-center g-10">
            <span class="c-primary">
             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M144,180a16,16,0,1,1-16-16A16,16,0,0,1,144,180Zm92-52A108,108,0,1,1,128,20,108.12,108.12,0,0,1,236,128Zm-24,0a84,84,0,1,0-84,84A84.09,84.09,0,0,0,212,128ZM128,64c-24.26,0-44,17.94-44,40v4a12,12,0,0,0,24,0v-4c0-8.82,9-16,20-16s20,7.18,20,16-9,16-20,16a12,12,0,0,0-12,12v8a12,12,0,0,0,23.73,2.56C158.31,137.88,172,122.37,172,104,172,81.94,152.26,64,128,64Z"></path></svg>

            </span>
            <strong class="desc">Support & Account</strong>
        </div>
        {{-- body/links --}}
        <div style="box-shadow:0 0 10px rgba(0,0,0,0.1)" class="w-full groups bg-light br-20 column p-20 g-10">
           {{-- new row/link --}}
            <div onclick="Redirect('{{ url('users/support') }}')" class="row space-between w-full g-10 align-center">
                <div style="background:var(--primary-01);color:var(--primary)" class="column h-40 perfect-square br-10 align-center justify-center">
                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M232,128v80a40,40,0,0,1-40,40H136a8,8,0,0,1,0-16h56a24,24,0,0,0,24-24H192a24,24,0,0,1-24-24V144a24,24,0,0,1,24-24h23.65A88,88,0,0,0,66,65.54,87.29,87.29,0,0,0,40.36,120H64a24,24,0,0,1,24,24v40a24,24,0,0,1-24,24H48a24,24,0,0,1-24-24V128A104.11,104.11,0,0,1,201.89,54.66,103.41,103.41,0,0,1,232,128Z"></path></svg>

                </div>
                <div class="column m-right-auto g-2">
                   <strong class="font-1">Contact Us</strong>
                    <small class="opacity-07">24/7 customer support</small>
                </div>
                <span class="opacity-07">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M184.49,136.49l-80,80a12,12,0,0,1-17-17L159,128,87.51,56.49a12,12,0,1,1,17-17l80,80A12,12,0,0,1,184.49,136.49Z"></path></svg>

                </span>
                
            </div>
            {{-- new row/link --}}
            <div onclick="Redirect('{{ url('users/logout') }}')" class="row space-between w-full g-10 align-center">
                <div style="background:rgba(255,0,0,0.1);color:rgb(255,0,0)" class="column h-40 perfect-square br-10 align-center justify-center">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M128,24A104,104,0,1,0,232,128,104,104,0,0,0,128,24Zm-8,40a8,8,0,0,1,16,0v64a8,8,0,0,1-16,0Zm8,144A80,80,0,0,1,83.55,61.48a8,8,0,1,1,8.9,13.29,64,64,0,1,0,71.1,0,8,8,0,1,1,8.9-13.29A80,80,0,0,1,128,208Z"></path></svg>

                </div>
                <div style="color:rgb(255,0,0)" class="column m-right-auto g-2">
                   <strong class="font-1">Logout</strong>
                    <small class="opacity-07">Sign out from your account</small>
                </div>
                <span class="opacity-07">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M184.49,136.49l-80,80a12,12,0,0,1-17-17L159,128,87.51,56.49a12,12,0,1,1,17-17l80,80A12,12,0,0,1,184.49,136.49Z"></path></svg>

                </span>
                
            </div>
            
            
        </div>
       </div>
      
    </section>
@endsection