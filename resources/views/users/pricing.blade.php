@extends('layout.users.app')
@section('title')
    Pricing
@endsection
@section('css')
    <style class="css">
        table{
            width:100%;
            border:1px solid var(--rgt-01);
            border-collapse: collapse;
            overflow-x:auto;
           
            

        }
        tr{
            border-bottom:1px solid var(--rgt-01);
           
        }
        tr:last-of-type{
            border-bottom: none;
        }
        thead{
            background:var(--primary-01);
           
        }
       
        th{
            font-size:1rem;
            font-weight:900;
        
        }
        th,td{
            padding:10px;
            text-align:start;
            
        }
        td,th{
            border-right:1px solid var(--rgt-01);
        }
        td:last-of-type,th:last-of-type{
            border-right:none;
        }
    </style>
@endsection
@section('main')
    <section style="border:1px solid var(--rgt-01);box-shadow:0 0 10px rgba(0,0,0,0.005)" class="w-full br-20 p-20 bg-light column g-20">
      {{-- house --}}
      <div class="w-full column g-20 overflow-auto">
 {{-- all networks --}}
        <div class="column g-10 w-full">
            {{-- head --}}
            <div class="row align-center g-5">
                <span class="c-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="30" width="30"><path d="M232,108H140V92h4a20,20,0,0,0,20-20V40a20,20,0,0,0-20-20H112A20,20,0,0,0,92,40V72a20,20,0,0,0,20,20h4v16H24a12,12,0,0,0,0,24H52v24H48a20,20,0,0,0-20,20v32a20,20,0,0,0,20,20H80a20,20,0,0,0,20-20V176a20,20,0,0,0-20-20H76V132H180v24h-4a20,20,0,0,0-20,20v32a20,20,0,0,0,20,20h32a20,20,0,0,0,20-20V176a20,20,0,0,0-20-20h-4V132h28a12,12,0,0,0,0-24ZM116,44h24V68H116ZM76,204H52V180H76Zm128,0H180V180h24Z"></path></svg>

                </span>
                <strong class="font-1-5">All Networks</strong>
            </div>
            {{-- table --}}
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Network</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>MTN</td>
                    </tr>
                     <tr>
                        <td>02</td>
                        <td>GLO</td>
                    </tr>
                     <tr>
                        <td>04</td>
                        <td>AIRTEL</td>
                    </tr>
                     <tr>
                        <td>03</td>
                        <td>9MOBILE</td>
                    </tr>
                </tbody>
            </table>
        </div>
          {{-- data plans --}}
        <div class="column g-10 w-full">
            {{-- head --}}
            <div class="row align-center g-5">
                <span class="c-primary">
                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="30" width="30"><path d="M144,204a16,16,0,1,1-16-16A16,16,0,0,1,144,204ZM239.61,83.91a176,176,0,0,0-223.22,0,12,12,0,1,0,15.23,18.55,152,152,0,0,1,192.76,0,12,12,0,1,0,15.23-18.55Zm-32.16,35.73a128,128,0,0,0-158.9,0,12,12,0,0,0,14.9,18.81,104,104,0,0,1,129.1,0,12,12,0,0,0,14.9-18.81ZM175.07,155.3a80.05,80.05,0,0,0-94.14,0,12,12,0,0,0,14.14,19.4,56,56,0,0,1,65.86,0,12,12,0,1,0,14.14-19.4Z"></path></svg>

                </span>
                <strong class="font-1-5">Data Plans</strong>
            </div>
             <small class="opacity-07">Scroll horizontally to view full table.</small>
            {{-- table --}}
            <table>
                <thead>
                    <tr>
                        <th>Network</th>
                        <th>Plan ID</th>
                        <th>Plan</th>
                        <th>Subscriber</th>
                        <th>Agents</th>
                        <th>API</th>
                       

                    </tr>
                </thead>
                <tbody>
                   @foreach ($data_plans['MOBILE_NETWORK'] as $network => $plans)
             @foreach ($plans as $plan)
                 @foreach ($plan['PRODUCT'] as $data)
                    <tr>
                        <td>{{ strtoupper($network) }}</td>
                        <td>{{ $data['PRODUCT_ID'] }}</td>
                        <td>{{ $data['PRODUCT_NAME'] }}</td>
                        <td>{{ FormatPrice($data['PRODUCT_AMOUNT'],'subscriber') }}</td>
                        <td>{{ FormatPrice($data['PRODUCT_AMOUNT'],'agent') }}</td>
                        <td>{{ FormatPrice($data['PRODUCT_AMOUNT'],'api') }}</td>
                    </tr>
                 @endforeach
             @endforeach
                   @endforeach
                     
                </tbody>
            </table>
        </div>



        {{-- all tv providers --}}
        <div class="column g-10 w-full">
            {{-- head --}}
            <div class="row align-center g-5">
                <span class="c-primary">
                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="30" width="30"><path d="M216,60H157l27.52-27.52a12,12,0,0,0-17-17L128,55,88.49,15.51a12,12,0,0,0-17,17L99,60H40A20,20,0,0,0,20,80V200a20,20,0,0,0,20,20H216a20,20,0,0,0,20-20V80A20,20,0,0,0,216,60Zm-4,136H44V84H212Z"></path></svg>

                </span>
                <strong class="font-1-5">Cable TV Providers</strong>
            </div>
            {{-- table --}}
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Network</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>GOTV</td>
                    </tr>
                     <tr>
                        <td>02</td>
                        <td>DSTV</td>
                    </tr>
                     <tr>
                        <td>03</td>
                        <td>STARTIMES</td>
                    </tr>
                    
                </tbody>
            </table>
        </div>

         {{-- cable plans --}}
        <div class="column g-10 w-full">
            {{-- head --}}
            <div class="row align-center g-5">
                <span class="c-primary">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="30" width="30"><path d="M216,60H157l27.52-27.52a12,12,0,0,0-17-17L128,55,88.49,15.51a12,12,0,0,0-17,17L99,60H40A20,20,0,0,0,20,80V200a20,20,0,0,0,20,20H216a20,20,0,0,0,20-20V80A20,20,0,0,0,216,60ZM44,84h84V196H44ZM212,196H152V84h60Zm-44-80a16,16,0,1,1,16,16A16,16,0,0,1,168,116Zm32,48a16,16,0,1,1-16-16A16,16,0,0,1,200,164Z"></path></svg>

                </span>
                <strong class="font-1-5">Cable Plans</strong>
            </div>
             <small class="opacity-07">Scroll horizontally to view full table.</small>
            {{-- table --}}
            <table>
                <thead>
                    <tr>
                        <th>Provider</th>
                        <th>Plan ID</th>
                        <th>Plan</th>
                        <th>Subscriber</th>
                        <th>Agents</th>
                        <th>API</th>
                       

                    </tr>
                </thead>
                <tbody>
                   @foreach ($cable_plans['TV_ID'] as $provider => $plans)
             @foreach ($plans as $plan)
                 @foreach ($plan['PRODUCT'] as $data)
                    <tr>
                        <td>{{ strtoupper($provider) }}</td>
                        <td>{{ $data['PACKAGE_ID'] }}</td>
                        <td>{{ $data['PACKAGE_NAME'] }}</td>
                        <td>{{ FormatPrice($data['PACKAGE_AMOUNT'],'subscriber') }}</td>
                        <td>{{ FormatPrice($data['PACKAGE_AMOUNT'],'agent') }}</td>
                        <td>{{ FormatPrice($data['PACKAGE_AMOUNT'],'api') }}</td>
                    </tr>
                 @endforeach
             @endforeach
                   @endforeach
                     
                </tbody>
            </table>
        </div>





      </div>
       
    </section>
@endsection