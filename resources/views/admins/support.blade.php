@extends('layout.admins.app')
@section('title')
    Support Messages
@endsection
@section('main')
    <section class="w-full column g-10">
        @if ($messages->isEmpty())
            
        @else
            @foreach ($messages as $data)
                <div style="border:1px solid var(--rgt-01)" class="w-full br-light br-20 column p-20 g-10">
                    {{-- new row --}}
                    <div class="row align-center g-10 space-between">
                        <div class="p-5 p-x-20 br-1000 no-select" style="background:var(--rgt-01)">{{ $data->data->uniqid }}</div>
                        <div class="status {{ $data->data->status == 'unread' ? 'gold' : 'green' }}">{{ $data->data->status }}</div>
                    </div>
                    {{-- chat --}}
                    <div style="background:var(--rgt-01);border-left:4px solid var(--primary)" class="p-10 w-full">{{ $data->data->message }}</div>
                {{-- button --}}
                <div onclick="window.location.href='{{ url('admins/chat?user_id='.$data->user_id.'') }}'" style="background:var(--rgt-005);border:1px solid var(--rgt-01)" class="w-full pointer no-select br-1000 p-10 p-x-20 row align-center justify-center g-5">
                    <span>Reply Chat</span>
                    <span></span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M132,24A100.11,100.11,0,0,0,32,124v84a16,16,0,0,0,16,16h84a100,100,0,0,0,0-200Zm32,128H96a8,8,0,0,1,0-16h68a8,8,0,0,1,0,16Zm0-32H96a8,8,0,0,1,0-16h68a8,8,0,0,1,0,16Z"></path></svg>

                </div>
                </div>
            @endforeach
            @if ($messages->lastPage() > 1)
                @include('components.utilities',[
                    'paginate' => true,
                    'data' => $messages
                ])
            @endif
        @endif
    </section>
@endsection