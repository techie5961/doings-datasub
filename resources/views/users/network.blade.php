@extends('layout.users.app')
@section('title')
    Network Status
@endsection
@section('main')
    <section class="w-full column g-10">
        {{-- heading --}}
        <strong class="font-1-5">Network Status</strong>
     <div class="w-full g-10 grid place-center pc-grid-2">
         {{-- new status --}}
        <div style="box-shadow:0 0 10px rgba(0,0,0,0.1)" class="bg-light w-full br-10 p-20 column align-center g-10">
            <div style="background:var(--rgt-005)" class="h-70 circle w-70 min-w-70 min-h-70 column align-center justify-center">
                    <img src="{{ asset('photos/networks/mtn-logo-png_seeklogo-95716.png') }}" alt="" class="w-40 h-40">
            </div>
            <strong class="desc">MTN NG</strong>
            <div class="w-full br-1000 bg-green c-white p-x-10 p-2">100% Stable</div>
        </div>
        {{-- new status --}}
        <div style="box-shadow:0 0 10px rgba(0,0,0,0.1)" class="bg-light w-full br-10 p-20 column align-center g-10">
            <div style="background:var(--rgt-005)" class="h-70 circle w-70 min-w-70 min-h-70 column align-center justify-center">
                    <img src="{{ asset('photos/networks/airtel-logo-png_seeklogo-168290.png') }}" alt="" class="w-40 h-40">
            </div>
            <strong class="desc">Airtel NG</strong>
            <div class="w-full br-1000 bg-green c-white p-x-10 p-2">100% Stable</div>
        </div>
        {{-- new status --}}
        <div style="box-shadow:0 0 10px rgba(0,0,0,0.1)" class="bg-light w-full br-10 p-20 column align-center g-10">
            <div style="background:var(--rgt-005)" class="h-70 circle w-70 min-w-70 min-h-70 column align-center justify-center">
                    <img src="{{ asset('photos/networks/glo-limited-logo-png_seeklogo-491131.png') }}" alt="" class="w-40 h-40">
            </div>
            <strong class="desc">Glo NG</strong>
            <div class="w-full br-1000 bg-green c-white p-x-10 p-2">100% Stable</div>
        </div>
        {{-- new status --}}
        <div style="box-shadow:0 0 10px rgba(0,0,0,0.1)" class="bg-light w-full br-10 p-20 column align-center g-10">
            <div style="background:var(--rgt-005)" class="h-70 circle w-70 min-w-70 min-h-70 column align-center justify-center">
                    <img src="{{ asset('photos/networks/9mobile-logo-png_seeklogo-481168.png') }}" alt="" class="w-40 h-40">
            </div>
            <strong class="desc">9Mobile</strong>
            <div style="background:var(--rgt-01)" class="w-full overflow-hidden br-1000">
                <div style="width:5%" class="ws-nowrap bg-red c-white p-x-10 p-2">5% Stable</div>
            </div>
        </div>
     </div>
    </section>
@endsection