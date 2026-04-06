@extends('layout.users.app')
@section('title')
    Transaction Receipt
@endsection
@section('css')
    <style class="css">
        .trx-icon{
            height:70px;
            width:70px;
            border:2px solid var(--primary);
            color:var(--primary);
            display:flex;
            flex-direction:column;
            align-items:center;
            justify-content: center;
            border-radius: 50%;
        }
        .trx-icon svg{
            height:40px;
            width:40px;
        }
    </style>
@endsection
@section('main')
   <section class="w-full column g-10">
    <div style="box-shadow:0 0 10px rgba(0,0,0,0.1)" class="column text-center g-10 align-center w-full br-10 p-10 bg-light">
     {{-- icon --}}
        <div class="trx-icon">{!! $data->icon !!}</div>
        {{-- title --}}
        <strong class="font-1-5 c-primary">{{ $data->title }}</strong>
        {{-- amount --}}
          <div style="border-top:1px solid var(--rgt-01)" class="w-full row bold p-10 align-center space-between g-10">
            <span>Amount</span>
            <div class="row align-center g-2">
                <span>{{ $currency }}{{ number_format($data->amount,2) }}</span>
            </div>
        </div>
        {{-- fee --}}
          <div style="border-top:1px solid var(--rgt-01)" class="w-full row bold p-10 align-center space-between g-10">
            <span>Fee</span>
            <div class="row align-center g-2">
                <span>{{ $currency }}{{ number_format($data->fee,2) }}</span>
            </div>
        </div>
        {{-- status --}}
          <div style="border-top:1px solid var(--rgt-01)" class="w-full row bold p-10 align-center space-between g-10">
            <span>Status</span>
            <div class="row align-center g-2">
                <div class="status {{ $data->status == 'success' ? 'green' : ($data->status == 'pending' ? 'gold' : 'red') }}">{{ $data->status }}</div>
            </div>
        </div>

        {{-- reference --}}
        <div style="border-top:1px solid var(--rgt-01)" class="w-full p-10 row bold align-center space-between g-10">
            <span>Transaction ID</span>
            <div class="row align-center g-2">
                <span>{{ $data->uniqid }}</span>
                <span>
                    <span onclick="copy('{{ $data->uniqid }}')">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M216,32H88a8,8,0,0,0-8,8V80H40a8,8,0,0,0-8,8V216a8,8,0,0,0,8,8H168a8,8,0,0,0,8-8V176h40a8,8,0,0,0,8-8V40A8,8,0,0,0,216,32Zm-8,128H176V88a8,8,0,0,0-8-8H96V48H208Z"></path></svg>
                        
                    </span>
                </span>
            </div>
        </div>
        {{-- date --}}
          <div style="border-top:1px solid var(--rgt-01)" class="w-full row bold p-10 align-center space-between g-10">
            <span>Date</span>
            <div class="row align-center g-2">
                <span>{{ $data->frame }}</span>
            </div>
        </div>
     @isset($data->data)
            {{-- data loops --}}
        @foreach (json_decode($data->data ?? '{}') as $key => $value)
              <div style="border-top:1px solid var(--rgt-01)" class="w-full row bold p-10 align-center space-between g-10">
            <span>{{ ucwords($key) }}</span>
            <div class="row align-center g-2">
                <span>{{ $value }}</span>
            </div>
        </div>
        @endforeach
     @endisset

    </div>

    <button class="btn-primary-3d h-50 w-full br-5 clip-5">
        <span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M74.34,85.66A8,8,0,0,1,85.66,74.34L120,108.69V24a8,8,0,0,1,16,0v84.69l34.34-34.35a8,8,0,0,1,11.32,11.32l-48,48a8,8,0,0,1-11.32,0ZM240,136v64a16,16,0,0,1-16,16H32a16,16,0,0,1-16-16V136a16,16,0,0,1,16-16H84.4a4,4,0,0,1,2.83,1.17L111,145A24,24,0,0,0,145,145l23.8-23.8A4,4,0,0,1,171.6,120H224A16,16,0,0,1,240,136Zm-40,32a12,12,0,1,0-12,12A12,12,0,0,0,200,168Z"></path></svg>
            
        </span>
        <span>Download Receipt</span>
    </button>
    </section> 
@endsection