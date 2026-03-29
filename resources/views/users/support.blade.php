@extends('layout.users.app')
@section('title')
    Support
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
        {{-- help and support --}}
       <div class="column g-10 w-full">
         {{-- heading --}}
        <div class="row align-center g-10">
            <span class="c-primary">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M144,180a16,16,0,1,1-16-16A16,16,0,0,1,144,180Zm92-52A108,108,0,1,1,128,20,108.12,108.12,0,0,1,236,128Zm-24,0a84,84,0,1,0-84,84A84.09,84.09,0,0,0,212,128ZM128,64c-24.26,0-44,17.94-44,40v4a12,12,0,0,0,24,0v-4c0-8.82,9-16,20-16s20,7.18,20,16-9,16-20,16a12,12,0,0,0-12,12v8a12,12,0,0,0,23.73,2.56C158.31,137.88,172,122.37,172,104,172,81.94,152.26,64,128,64Z"></path></svg>

            </span>
            <strong class="desc">Help & Support</strong>
        </div>
        {{-- body/links --}}
        <div style="box-shadow:0 0 10px rgba(0,0,0,0.1)" class="w-full groups bg-light br-20 column p-20 g-10">
           {{-- new row/link --}}
            <div onclick="Redirect('{{ url('users/faqs') }}')" class="row space-between w-full g-10 align-center">
                <div style="background:var(--primary-01);color:var(--primary)" class="column h-40 perfect-square br-10 align-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,168a12,12,0,1,1,12-12A12,12,0,0,1,128,192Zm8-48.72V144a8,8,0,0,1-16,0v-8a8,8,0,0,1,8-8c13.23,0,24-9,24-20s-10.77-20-24-20-24,9-24,20v4a8,8,0,0,1-16,0v-4c0-19.85,17.94-36,40-36s40,16.15,40,36C168,125.38,154.24,139.93,136,143.28Z"></path></svg>

                </div>
                <div class="column m-right-auto g-2">
                   <strong class="font-1">Frequently Asked Questions</strong>
                    <small class="opacity-07">Find answers to common questions instantly</small>
                </div>
                <span class="opacity-07">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M184.49,136.49l-80,80a12,12,0,0,1-17-17L159,128,87.51,56.49a12,12,0,1,1,17-17l80,80A12,12,0,0,1,184.49,136.49Z"></path></svg>

                </span>
                
            </div>
             {{-- new row/link --}}
            <div onclick="Redirect('{{ url('users/chat') }}')" class="row space-between w-full g-10 align-center">
                <div style="background:var(--primary-01);color:var(--primary)" class="column h-40 perfect-square br-10 align-center justify-center">
                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm-4,48a12,12,0,1,1-12,12A12,12,0,0,1,124,72Zm12,112a16,16,0,0,1-16-16V128a8,8,0,0,1,0-16,16,16,0,0,1,16,16v40a8,8,0,0,1,0,16Z"></path></svg>

                </div>
                <div class="column m-right-auto g-2">
                    <strong class="font-1">Report an Issue</strong>
                    <small class="opacity-07">let us know if something isn't working right</small>
                </div>
                <span class="opacity-07">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M184.49,136.49l-80,80a12,12,0,0,1-17-17L159,128,87.51,56.49a12,12,0,1,1,17-17l80,80A12,12,0,0,1,184.49,136.49Z"></path></svg>

                </span>
                
            </div>
        </div>
       </div>
          {{-- direct contact --}}
       <div class="column g-10 w-full">
         {{-- heading --}}
        <div class="row align-center g-10">
            <span class="c-primary">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M208,20H64A20,20,0,0,0,44,40V60H32a12,12,0,0,0,0,24H44v32H32a12,12,0,0,0,0,24H44v32H32a12,12,0,0,0,0,24H44v20a20,20,0,0,0,20,20H208a20,20,0,0,0,20-20V40A20,20,0,0,0,208,20Zm-4,192H68V44H204ZM100.8,171.37a48,48,0,0,1,70.4,0,12,12,0,0,0,17.6-16.32,72,72,0,0,0-19.21-14.68,44,44,0,1,0-67.19,0,72.12,72.12,0,0,0-19.2,14.68,12,12,0,0,0,17.6,16.32ZM116,112a20,20,0,1,1,20,20A20,20,0,0,1,116,112Z"></path></svg>

            </span>
            <strong class="desc">Direct Contact</strong>
        </div>
        {{-- body/links --}}
        <div style="box-shadow:0 0 10px rgba(0,0,0,0.1)" class="w-full groups bg-light br-20 column p-20 g-10">
           {{-- new row/link --}}
            <div onclick="window.open('tel:{{ $contact_settings->line ?? '0' }}')" class="row space-between w-full g-10 align-center">
                <div style="background:var(--primary-01);color:var(--primary)" class="column h-40 perfect-square br-10 align-center justify-center">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M231.88,175.08A56.26,56.26,0,0,1,176,224C96.6,224,32,159.4,32,80A56.26,56.26,0,0,1,80.92,24.12a16,16,0,0,1,16.62,9.52l21.12,47.15,0,.12A16,16,0,0,1,117.39,96c-.18.27-.37.52-.57.77L96,121.45c7.49,15.22,23.41,31,38.83,38.51l24.34-20.71a8.12,8.12,0,0,1,.75-.56,16,16,0,0,1,15.17-1.4l.13.06,47.11,21.11A16,16,0,0,1,231.88,175.08Z"></path></svg>

                </div>
                <div class="column m-right-auto g-2">
                     <strong class="font-1">{{ $contact_settings->line ?? 'null' }}</strong>
                    <small class="opacity-07">call our support team directly</small>
                </div>
                <span class="opacity-07">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M184.49,136.49l-80,80a12,12,0,0,1-17-17L159,128,87.51,56.49a12,12,0,1,1,17-17l80,80A12,12,0,0,1,184.49,136.49Z"></path></svg>

                </span>
                
            </div>
             {{-- new row/link --}}
            <div onclick="window.open('mailto:{{ $contact_settings->email ?? '0' }}')" class="row space-between w-full g-10 align-center">
                <div style="background:var(--primary-01);color:var(--primary)" class="column h-40 perfect-square br-10 align-center justify-center">
                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M224,48H32a8,8,0,0,0-8,8V192a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A8,8,0,0,0,224,48Zm-8,144H40V74.19l82.59,75.71a8,8,0,0,0,10.82,0L216,74.19V192Z"></path></svg>

                </div>
                <div class="column m-right-auto g-2">
                    <strong class="font-1">{{ $contact_settings->email ?? 'null' }}</strong>
                    <small class="opacity-07">send us an email anytime</small>
                </div>
                <span class="opacity-07">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M184.49,136.49l-80,80a12,12,0,0,1-17-17L159,128,87.51,56.49a12,12,0,1,1,17-17l80,80A12,12,0,0,1,184.49,136.49Z"></path></svg>

                </span>
                
            </div>
             {{-- new row/link --}}
            <div onclick="window.open('{{ $contact_settings->whatsapp ?? 'null' }}')" class="row space-between w-full g-10 align-center">
                <div style="background:var(--primary-01);color:var(--primary)" class="column h-40 perfect-square br-10 align-center justify-center">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M152.58,145.23l23,11.48A24,24,0,0,1,152,176a72.08,72.08,0,0,1-72-72A24,24,0,0,1,99.29,80.46l11.48,23L101,118a8,8,0,0,0-.73,7.51,56.47,56.47,0,0,0,30.15,30.15A8,8,0,0,0,138,155ZM232,128A104,104,0,0,1,79.12,219.82L45.07,231.17a16,16,0,0,1-20.24-20.24l11.35-34.05A104,104,0,1,1,232,128Zm-40,24a8,8,0,0,0-4.42-7.16l-32-16a8,8,0,0,0-8,.5l-14.69,9.8a40.55,40.55,0,0,1-16-16l9.8-14.69a8,8,0,0,0,.5-8l-16-32A8,8,0,0,0,104,64a40,40,0,0,0-40,40,88.1,88.1,0,0,0,88,88A40,40,0,0,0,192,152Z"></path></svg>

                </div>
                <div class="column m-right-auto g-2">
                    <strong class="font-1">Whatsapp Chat</strong>
                    <small class="opacity-07">chat with us via whatsapp</small>
                </div>
                <span class="opacity-07">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M184.49,136.49l-80,80a12,12,0,0,1-17-17L159,128,87.51,56.49a12,12,0,1,1,17-17l80,80A12,12,0,0,1,184.49,136.49Z"></path></svg>

                </span>
                
            </div>
        </div>
       </div>
         {{-- social community --}}
       <div class="column g-10 w-full">
         {{-- heading --}}
        <div class="row align-center g-10">
            <span class="c-primary">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M164.38,181.1a52,52,0,1,0-72.76,0,75.89,75.89,0,0,0-30,28.89,12,12,0,0,0,20.78,12,53,53,0,0,1,91.22,0,12,12,0,1,0,20.78-12A75.89,75.89,0,0,0,164.38,181.1ZM100,144a28,28,0,1,1,28,28A28,28,0,0,1,100,144Zm147.21,9.59a12,12,0,0,1-16.81-2.39c-8.33-11.09-19.85-19.59-29.33-21.64a12,12,0,0,1-1.82-22.91,20,20,0,1,0-24.78-28.3,12,12,0,1,1-21-11.6,44,44,0,1,1,73.28,48.35,92.18,92.18,0,0,1,22.85,21.69A12,12,0,0,1,247.21,153.59Zm-192.28-24c-9.48,2.05-21,10.55-29.33,21.65A12,12,0,0,1,6.41,136.79,92.37,92.37,0,0,1,29.26,115.1a44,44,0,1,1,73.28-48.35,12,12,0,1,1-21,11.6,20,20,0,1,0-24.78,28.3,12,12,0,0,1-1.82,22.91Z"></path></svg>

            </span>
            <strong class="desc">Social Community</strong>
        </div>
        {{-- body/links --}}
        <div style="box-shadow:0 0 10px rgba(0,0,0,0.1)" class="w-full groups bg-light br-20 column p-20 g-10">
          @if ($social_settings->whatsapp_community != '')
               {{-- new row/link --}}
            <div onclick="window.open('{{ $social_settings->whatsapp_community ?? 'null' }}')" class="row space-between w-full g-10 align-center">
                <div style="background:var(--primary-01);color:var(--primary)" class="column h-40 perfect-square br-10 align-center justify-center">
                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M152.58,145.23l23,11.48A24,24,0,0,1,152,176a72.08,72.08,0,0,1-72-72A24,24,0,0,1,99.29,80.46l11.48,23L101,118a8,8,0,0,0-.73,7.51,56.47,56.47,0,0,0,30.15,30.15A8,8,0,0,0,138,155ZM232,128A104,104,0,0,1,79.12,219.82L45.07,231.17a16,16,0,0,1-20.24-20.24l11.35-34.05A104,104,0,1,1,232,128Zm-40,24a8,8,0,0,0-4.42-7.16l-32-16a8,8,0,0,0-8,.5l-14.69,9.8a40.55,40.55,0,0,1-16-16l9.8-14.69a8,8,0,0,0,.5-8l-16-32A8,8,0,0,0,104,64a40,40,0,0,0-40,40,88.1,88.1,0,0,0,88,88A40,40,0,0,0,192,152Z"></path></svg>
                 
                </div>
                <div class="column m-right-auto g-2">
                     <strong class="font-1">Whatsapp Group</strong>
                    <small class="opacity-07">Join our official whatsapp community</small>
                </div>
                <span class="opacity-07">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M184.49,136.49l-80,80a12,12,0,0,1-17-17L159,128,87.51,56.49a12,12,0,1,1,17-17l80,80A12,12,0,0,1,184.49,136.49Z"></path></svg>

                </span>
                
            </div>
          @endif

           @if ($social_settings->facebook_community != '')
               {{-- new row/link --}}
            <div onclick="window.open('{{ $social_settings->facebook_community ?? 'null' }}')" class="row space-between w-full g-10 align-center">
                <div style="background:var(--primary-01);color:var(--primary)" class="column h-40 perfect-square br-10 align-center justify-center">
                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M232,128a104.16,104.16,0,0,1-91.55,103.26,4,4,0,0,1-4.45-4V152h24a8,8,0,0,0,8-8.53,8.17,8.17,0,0,0-8.25-7.47H136V112a16,16,0,0,1,16-16h16a8,8,0,0,0,8-8.53A8.17,8.17,0,0,0,167.73,80H152a32,32,0,0,0-32,32v24H96a8,8,0,0,0-8,8.53A8.17,8.17,0,0,0,96.27,152H120v75.28a4,4,0,0,1-4.44,4A104.15,104.15,0,0,1,24.07,124.09c2-54,45.74-97.9,99.78-100A104.12,104.12,0,0,1,232,128Z"></path></svg>

                </div>
                <div class="column m-right-auto g-2">
                     <strong class="font-1">Facebook</strong>
                    <small class="opacity-07">Follow us for updates</small>
                </div>
                <span class="opacity-07">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M184.49,136.49l-80,80a12,12,0,0,1-17-17L159,128,87.51,56.49a12,12,0,1,1,17-17l80,80A12,12,0,0,1,184.49,136.49Z"></path></svg>

                </span>
                
            </div>
          @endif


             @if ($social_settings->instagram_community != '')
               {{-- new row/link --}}
            <div onclick="window.open('{{ $social_settings->instagram_community ?? 'null' }}')" class="row space-between w-full g-10 align-center">
                <div style="background:var(--primary-01);color:var(--primary)" class="column h-40 perfect-square br-10 align-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M176,24H80A56.06,56.06,0,0,0,24,80v96a56.06,56.06,0,0,0,56,56h96a56.06,56.06,0,0,0,56-56V80A56.06,56.06,0,0,0,176,24ZM128,176a48,48,0,1,1,48-48A48.05,48.05,0,0,1,128,176Zm60-96a12,12,0,1,1,12-12A12,12,0,0,1,188,80Zm-28,48a32,32,0,1,1-32-32A32,32,0,0,1,160,128Z"></path></svg>

                </div>
                <div class="column m-right-auto g-2">
                     <strong class="font-1">Instagram</strong>
                    <small class="opacity-07">See our latest posts</small>
                </div>
                <span class="opacity-07">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M184.49,136.49l-80,80a12,12,0,0,1-17-17L159,128,87.51,56.49a12,12,0,1,1,17-17l80,80A12,12,0,0,1,184.49,136.49Z"></path></svg>

                </span>
                
            </div>
          @endif

             @if ($social_settings->twitter_community != '')
               {{-- new row/link --}}
            <div onclick="window.open('{{ $social_settings->twitter_community ?? 'null' }}')" class="row space-between w-full g-10 align-center">
                <div style="background:var(--primary-01);color:var(--primary)" class="column h-40 perfect-square br-10 align-center justify-center">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M245.66,77.66l-29.9,29.9C209.72,177.58,150.67,232,80,232c-14.52,0-26.49-2.3-35.58-6.84-7.33-3.67-10.33-7.6-11.08-8.72a8,8,0,0,1,3.85-11.93c.26-.1,24.24-9.31,39.47-26.84a110.93,110.93,0,0,1-21.88-24.2c-12.4-18.41-26.28-50.39-22-98.18a8,8,0,0,1,13.65-4.92c.35.35,33.28,33.1,73.54,43.72V88a47.87,47.87,0,0,1,14.36-34.3A46.87,46.87,0,0,1,168.1,40a48.66,48.66,0,0,1,41.47,24H240a8,8,0,0,1,5.66,13.66Z"></path></svg>

                </div>
                <div class="column m-right-auto g-2">
                     <strong class="font-1">Twitter</strong>
                    <small class="opacity-07">Follow announcements</small>
                </div>
                <span class="opacity-07">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M184.49,136.49l-80,80a12,12,0,0,1-17-17L159,128,87.51,56.49a12,12,0,1,1,17-17l80,80A12,12,0,0,1,184.49,136.49Z"></path></svg>

                </span>
                
            </div>
          @endif

          @if ($social_settings->telegram_community != '')
               {{-- new row/link --}}
            <div onclick="window.open('{{ $social_settings->telegram_community ?? 'null' }}')" class="row space-between w-full g-10 align-center">
                <div style="background:var(--primary-01);color:var(--primary)" class="column h-40 perfect-square br-10 align-center justify-center">
             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M228.88,26.19a9,9,0,0,0-9.16-1.57L17.06,103.93a14.22,14.22,0,0,0,2.43,27.21L72,141.45V200a15.92,15.92,0,0,0,10,14.83,15.91,15.91,0,0,0,17.51-3.73l25.32-26.26L165,220a15.88,15.88,0,0,0,10.51,4,16.3,16.3,0,0,0,5-.79,15.85,15.85,0,0,0,10.67-11.63L231.77,35A9,9,0,0,0,228.88,26.19ZM175.53,208,92.85,135.5l119-85.29Z"></path></svg>

                </div>
                <div class="column m-right-auto g-2">
                     <strong class="font-1">Telegram</strong>
                    <small class="opacity-07">Join our telegram channel</small>
                </div>
                <span class="opacity-07">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M184.49,136.49l-80,80a12,12,0,0,1-17-17L159,128,87.51,56.49a12,12,0,1,1,17-17l80,80A12,12,0,0,1,184.49,136.49Z"></path></svg>

                </span>
                
            </div>
          @endif
           
             
        </div>
       </div>
    </section>
@endsection