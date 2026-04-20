@extends('layout.admins.app')
@section('title')
    Upgrade Configuration
@endsection
@section('main')
    <section class="w-full column g-10">
           {{-- CONTACT SETTINGS --}}
        <form method="POST" onsubmit="PostRequest(event,this)" action="{{ url('admins/post/cost/configuration/process') }}" style="border:1px solid var(--rgt-01);box-shadow:0 5px 10px rgba(0,0,0,0.1)" class="w-full column contact-settings-form settings-form g-10 bg-light br-20 p-20">
           
            <div class="row m-bottom-10 c-primary g-5 align-center">
                <span>
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="30" width="30"><path d="M223.16,68.42l-16-32A8,8,0,0,0,200,32H56a8,8,0,0,0-7.16,4.42l-16,32A8.08,8.08,0,0,0,32,72V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V72A8.08,8.08,0,0,0,223.16,68.42Zm-57.5,73.24a8,8,0,0,1-11.32,0L136,123.31V184a8,8,0,0,1-16,0V123.31l-18.34,18.35a8,8,0,0,1-11.32-11.32l32-32a8,8,0,0,1,11.32,0l32,32A8,8,0,0,1,165.66,141.66ZM52.94,64l8-16H195.06l8,16Z"></path></svg>
             </span>
                <strong class="desc">Upgrade Configuration</strong>
            </div>
            {{-- csrf token --}}
            <input type="hidden" class="inp input" name="_token" value="{{ @csrf_token() }}">
            {{-- new input --}}
            <div class="column g-5 w-full">
               <div class="column g-2">
                 <label>Agent Cost</label>
                <small class="opacity-05">Enter the fee required to upgrade to agent(in &#8358;), set to zero(0) if no fee required(i.e if its free)</small>
                </div> 
                <div class="cont">
                    <input value="{{ $settings->agent ?? 0 }}" name="agent" type="number" placeholder="E.g ₦5,000" class="inp required input">
                </div>
              
                  </div>
              {{-- new input --}}
            <div class="column g-5 w-full">
               <div class="column g-2">
                 <label>Vendor Cost</label>
                <small class="opacity-05">Enter the fee required to upgrade to vendor(in &#8358;), set to zero(0) if no fee required(i.e if its free)</small>
                </div> 
               <div class="cont">
                    <input value="{{ $settings->vendor ?? 0 }}" name="vendor" type="number" placeholder="E.g ₦5,000" class="inp required input">
                </div>
              
                  </div>
                   {{-- new input --}}
            <div class="column g-5 w-full">
               <div class="column g-2">
                 <label>API Cost</label>
                <small class="opacity-05">Enter the fee required to access API(in &#8358;), set to zero(0) if no fee required(i.e if its free)</small>
                </div> 
                <div class="cont">
                    <input value="{{ $settings->api ?? 0 }}" name="api" type="number" placeholder="E.g ₦5,000" class="inp required input">
                </div>
              
                  </div>
           

           
           
           
            {{-- submit button --}}
            <button class="post">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M208,32H83.31A15.86,15.86,0,0,0,72,36.69L36.69,72A15.86,15.86,0,0,0,32,83.31V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM128,184a32,32,0,1,1,32-32A32,32,0,0,1,128,184ZM172,80a4,4,0,0,1-4,4H88a4,4,0,0,1-4-4V48h88Z"></path></svg>

                </span>
                <span>Save Changes</span>
            </button>
        </form>
    </section>
@endsection