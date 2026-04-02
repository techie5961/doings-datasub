@extends('layout.users.app')
@section('title')
    USSD Codes
@endsection
@section('css')
    <style class="css">
        table{
            border-collapse: collapse;
            border-radius:10px;
            overflow:hidden;
            background:var(--bg-light);
            box-shadow: 0 0 10px rgba(0,0,0,0.1);

        }
        thead{
            background:var(--primary);
            color:var(--primary-text);
        }
       
        th{
            padding:20px;
            text-align:start;
        }
        td{
            padding:20px;
            
        }
        td.code{
            color:var(--primary);
            font-weight:bold;
            text-align:center;
        }
        td{
            border-bottom: 1px solid var(--rgt-01);
        }
        .contact-btn{
            background:rgb(92, 250, 0);
            color:white;
            width:fit-content;
            padding:20px;
            border-radius:10px;
            font-size:1rem;
            user-select:none;
        }
        @media(min-width:800px){
            .contact-btn{
                cursor:pointer;
            }
        }
    </style>
@endsection
@section('main')
    <section class="w-full column g-10">
        {{-- table --}}
        <table>
            <thead>
                <tr>
                    <th>Network</th>
                    <th class="text-center">USSD Code</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="bold">ALL Network</td>
                    <td class="code">*312#</td>
                    <td>Buy Data</td>

                </tr>
                <tr>
                    <td class="bold">ALL Network</td>
                    <td class="code">*303#</td>
                    <td>Borrow Services</td>

                </tr>
                <tr>
                    <td class="bold">ALL Network</td>
                    <td class="code">*311#</td>
                    <td>Recharge</td>

                </tr>
                 <tr>
                    <td class="bold">ALL Network</td>
                    <td class="code">*321#</td>
                    <td>Data Share</td>

                </tr>
                <tr>
                    <td class="bold">ALL Network</td>
                    <td class="code">*310#</td>
                    <td>Check Balance</td>

                </tr>
                <tr>
                    <td class="bold">ALL Network</td>
                    <td class="code">*323#</td>
                    <td>Data Balance</td>

                </tr>
                <tr>
                    <td class="bold">ALL Network</td>
                    <td class="code">*305#</td>
                    <td>VAS</td>

                </tr>
                
            </tbody>
        </table>
        {{-- need help --}}
        <div style="box-shaadow:0 0 10px rgba(0,0,0,0.1);" class="w-full br-20 g-10 p-20 column bg-light">
            <strong class="desc">Need Help?</strong>
            <span>If you cannot find the USSD code you need, contact our supportt team.</span>
            <div onclick="Redirect('{{ url('users/support') }}')" class="contact-btn">Contact Support</div>

        </div>
    </section>
@endsection