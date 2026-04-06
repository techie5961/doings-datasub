@extends('layout.users.app')
@section('title')
    Transactions
@endsection
@section('css')
    <style class="css">
        /* media query for only mobile */
      @media(max-width:800px){
          .loop-house{
            background:var(--bg-light);
            overflow:hidden;
            border-radius:10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .loop-house .card{
            border-bottom:1px solid var(--rgt-01);
        }
        .loop-house .card:last-of-type{
            border-bottom:none;
        }
        .loop-house .card .svg-icon svg{
            height:15px;
            width:15px;
        }

      }

      /* media query for only pc */
        @media(min-width:800px){
            .loop-house{
               
            }
            .loop-house .card{
                background:var(--bg-light);
                box-shadow:0 0 10px rgba(0,0,0,0.1);
                border-radius:10px;
            }
        }
    </style>
@endsection
@section('main')
    <section class="w-full column g-10">
        @if ($transactions->isEmpty())
            @include('components.utilities',[
                'empty' => true,
                'text' => 'No Transaction Found'
            ])
        @else
            <div class="grid loop-house pc-grid-2 w-full g-10">
              @foreach ($transactions as $data)
                    <div onclick="Redirect('{{ url('users/transaction/receipt?id='.$data->id.'') }}')" class="w-full card p-10 column g-10">
                    {{-- new row --}}
                    <div class="row align-center g-10 w-full">
                        {{-- icon --}}
                        <div style="background:var(--primary-01);color:var(--primary)" class="h-30 svg-icon perfect-square no-shrink circle column align-center justify-center">
                            {!! $data->icon !!}
                        </div>
                     <div class="column g-5">
                           {{-- title --}}
                        <strong class="font-1">{{ $data->title }}</strong>
                        <div class="row align-center g-2">

                            <span>{{ $data->uniqid }}</span>
                        <span onclick="copy('{{ $data->uniqid }}')">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="15" width="15"><path d="M216,32H88a8,8,0,0,0-8,8V80H40a8,8,0,0,0-8,8V216a8,8,0,0,0,8,8H168a8,8,0,0,0,8-8V176h40a8,8,0,0,0,8-8V40A8,8,0,0,0,216,32Zm-8,128H176V88a8,8,0,0,0-8-8H96V48H208Z"></path></svg>
                            
                        </span>
                        </div>
                         {{-- date --}}
                    <small class="opacity-07">{{ $data->frame }}</small>
                     </div>
                    {{-- amount/status --}}
                        <div style="text-align:end;" class="column c-primary m-left-auto g-5">
                            <strong>{{ $currency }}{{ number_format($data->amount,2) }}</strong>
                            <div class="status m-right-auto {{ $data->status == 'success' ? 'green' : ($data->status == 'pending' ? 'gold' : 'red') }}">{{ $data->status }}</div>
                        </div>
                    </div>
                   
                </div>
              @endforeach
            </div>
           @if ($transactions->lastPage() > 1)
                @include('components.utilities',[
                'paginate' => true,
                'data' => $transactions
            ])
           @endif
        @endif
    </section>
@endsection