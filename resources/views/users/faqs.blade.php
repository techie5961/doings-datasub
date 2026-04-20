@extends('layout.users.app')
@section('title')
    FAQs
@endsection
@section('css')
    <style class="css">
        .faq{
            width:100%;
            display:flex;
            flex-direction:column;
            border-radius:5px;
            padding:10px;
            background:var(--rgt-01)
        }
        .faq .question{
            font-size:1rem;
            display:flex;
            flex-direction:row;
            align-items:center;
            justify-content:space-between;
            gap:10px;
        }
        .faq .answer{
           max-height: 0;
           overflow: hidden;
           transition:all 0.2s linear;
           
        }
        .faq.active .answer{
            max-height:100000vh;
            
        }
        .faq .caret{
            transition: all 0.2s ease;
        }
        .faq.active .caret{
            transform: rotate(180deg)
        }

    </style>
@endsection
@section('main')
    <section class="w-full column g-10">
        <div style="0 0 10px rgba(0,0,0,0.1)" class="p-20 bg-light br-20 column g-10 w-full">
            {{-- head --}}
            <div class="column align-center g-10 text-center">
                {{-- icon --}}
            <div style="border:2px solid var(--primary-03);color:var(--primary)" class="h-70 perfect-square circle column align-center justify-center">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="40" width="40"><path d="M225.86,102.82c-3.77-3.94-7.67-8-9.14-11.57-1.36-3.27-1.44-8.69-1.52-13.94-.15-9.76-.31-20.82-8-28.51s-18.75-7.85-28.51-8c-5.25-.08-10.67-.16-13.94-1.52-3.56-1.47-7.63-5.37-11.57-9.14C146.28,23.51,138.44,16,128,16s-18.27,7.51-25.18,14.14c-3.94,3.77-8,7.67-11.57,9.14C88,40.64,82.56,40.72,77.31,40.8c-9.76.15-20.82.31-28.51,8S41,67.55,40.8,77.31c-.08,5.25-.16,10.67-1.52,13.94-1.47,3.56-5.37,7.63-9.14,11.57C23.51,109.72,16,117.56,16,128s7.51,18.27,14.14,25.18c3.77,3.94,7.67,8,9.14,11.57,1.36,3.27,1.44,8.69,1.52,13.94.15,9.76.31,20.82,8,28.51s18.75,7.85,28.51,8c5.25.08,10.67.16,13.94,1.52,3.56,1.47,7.63,5.37,11.57,9.14C109.72,232.49,117.56,240,128,240s18.27-7.51,25.18-14.14c3.94-3.77,8-7.67,11.57-9.14,3.27-1.36,8.69-1.44,13.94-1.52,9.76-.15,20.82-.31,28.51-8s7.85-18.75,8-28.51c.08-5.25.16-10.67,1.52-13.94,1.47-3.56,5.37-7.63,9.14-11.57C232.49,146.28,240,138.44,240,128S232.49,109.73,225.86,102.82ZM128,192a12,12,0,1,1,12-12A12,12,0,0,1,128,192Zm8-48.72V144a8,8,0,0,1-16,0v-8a8,8,0,0,1,8-8c13.23,0,24-9,24-20s-10.77-20-24-20-24,9-24,20v4a8,8,0,0,1-16,0v-4c0-19.85,17.94-36,40-36s40,16.15,40,36C168,125.38,154.24,139.93,136,143.28Z"></path></svg>
            </div>
            <strong class="desc">Frequently Asked Questions</strong>
            <span class="c-primary">Find answers to some frequently asked questions.</span>
            </div>
            {{-- body --}}
            <div class="column w-full g-10">
                {{-- new faq --}}
                <div class="faq">
                    <div onclick="
                     
                        this.closest('.faq').classList.toggle('active')
                        " class="question">
                        <strong>What is {{ config('app.name') }}?</strong>
                        <span class="caret h-fit column">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="15" width="15"><path d="M216.49,104.49l-80,80a12,12,0,0,1-17,0l-80-80a12,12,0,0,1,17-17L128,159l71.51-71.52a12,12,0,0,1,17,17Z"></path></svg>

                        </span>
                    </div>
                    <div class="answer">
                       <span class="p-top-10">
                         {{ config('app.name') }} is a Nigerian VTU (Virtual Top-Up) platform that allows you to buy airtime, data plans, pay cable TV subscriptions (DSTV, GOtv, Startimes), and electricity bills (prepaid & postpaid) instantly.

                       </span>
                    </div>
                </div>
                {{-- new faq --}}
                  <div class="faq">
                    <div onclick="
                      
                        this.closest('.faq').classList.toggle('active')
                        " class="question">
                        <strong>What services can I access on {{ config('app.name') }}?</strong>
                        <span class="caret h-fit column">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="15" width="15"><path d="M216.49,104.49l-80,80a12,12,0,0,1-17,0l-80-80a12,12,0,0,1,17-17L128,159l71.51-71.52a12,12,0,0,1,17,17Z"></path></svg>

                        </span>
                    </div>
                    <div class="answer">
                       <span class="p-top-10">
                         · Airtime – MTN, Glo, Airtel, 9mobile <br>
· Data – All networks (SME & regular plans) <br>
· Cable TV – DSTV, GOtv, Startimes <br>
· Electricity – Ikeja Electric, Eko Electric, Kano, Jos, Abuja Disco, etc. <br>
<div onclick="Redirect('{{ url('users/services') }}')" class="no-select c-primary pointer">View all services</div>

                       </span>
                    </div>
                   
            </div>

                {{-- new faq --}}
                  <div class="faq">
                    <div onclick="
                      
                        this.closest('.faq').classList.toggle('active')
                        " class="question">
                        <strong>How do I fund my wallet?</strong>
                        <span class="caret h-fit column">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="15" width="15"><path d="M216.49,104.49l-80,80a12,12,0,0,1-17,0l-80-80a12,12,0,0,1,17-17L128,159l71.51-71.52a12,12,0,0,1,17,17Z"></path></svg>

                        </span>
                    </div>
                    <div class="answer">
                       <span class="p-top-10">
                      &bull;  Go to your dashboard <br>
                        &bull;  Click add funds <br>
                         &bull;  Enter amount <br>
                          &bull;  You woud be redirected to our secure payment gateway. Wallet funds are used for all transactions.
                      
                       </span>
                    </div>
                </div>

                  {{-- new faq --}}
                  <div class="faq">
                    <div onclick="
                      
                        this.closest('.faq').classList.toggle('active')
                        " class="question">
                        <strong>How long does delivery take?</strong>
                        <span class="caret h-fit column">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="15" width="15"><path d="M216.49,104.49l-80,80a12,12,0,0,1-17,0l-80-80a12,12,0,0,1,17-17L128,159l71.51-71.52a12,12,0,0,1,17,17Z"></path></svg>

                        </span>
                    </div>
                    <div class="answer">
                       <span class="p-top-10">
                     Delivery is instant (under 1 minute) for all services. If delayed, check your transaction history or contact support.

                       </span>
                    </div>
                </div>

                {{-- new faq --}}
                  <div class="faq">
                    <div onclick="
                      
                        this.closest('.faq').classList.toggle('active')
                        " class="question">
                        <strong>What if I pay and the service isn’t delivered?</strong>
                        <span class="caret h-fit column">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="15" width="15"><path d="M216.49,104.49l-80,80a12,12,0,0,1-17,0l-80-80a12,12,0,0,1,17-17L128,159l71.51-71.52a12,12,0,0,1,17,17Z"></path></svg>

                        </span>
                    </div>
                    <div class="answer">
                       <span class="p-top-10">
                    Contact support via WhatsApp or email with your transaction ID. Refunds or manual delivery will be done within 15–30 minutes for failed transactions.

                    
                       </span>
                    </div>
                </div>

                  {{-- new faq --}}
                  <div class="faq">
                    <div onclick="
                      
                        this.closest('.faq').classList.toggle('active')
                        " class="question">
                        <strong>Can I pay postpaid electricity bills?</strong>
                        <span class="caret h-fit column">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="15" width="15"><path d="M216.49,104.49l-80,80a12,12,0,0,1-17,0l-80-80a12,12,0,0,1,17-17L128,159l71.51-71.52a12,12,0,0,1,17,17Z"></path></svg>

                        </span>
                    </div>
                    <div class="answer">
                       <span class="p-top-10">
                   Yes, you can pay both prepaid (meter token) and postpaid (monthly bill) for supported DISCOs.

                    
                       </span>
                    </div>
                </div>

                  {{-- new faq --}}
                  <div class="faq">
                    <div onclick="
                      
                        this.closest('.faq').classList.toggle('active')
                        " class="question">
                        <strong>Is {{ config('app.name') }} secure?</strong>
                        <span class="caret h-fit column">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="15" width="15"><path d="M216.49,104.49l-80,80a12,12,0,0,1-17,0l-80-80a12,12,0,0,1,17-17L128,159l71.51-71.52a12,12,0,0,1,17,17Z"></path></svg>

                        </span>
                    </div>
                    <div class="answer">
                       <span class="p-top-10">
                  Yes. {{ config('app.name') }} uses SSL encryption and secure payment gateways. We do not store your card details.

                    
                       </span>
                    </div>
                </div>
                  {{-- new faq --}}
                  <div class="faq">
                    <div onclick="
                      
                        this.closest('.faq').classList.toggle('active')
                        " class="question">
                        <strong>How do I check my transaction history?</strong>
                        <span class="caret h-fit column">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="15" width="15"><path d="M216.49,104.49l-80,80a12,12,0,0,1-17,0l-80-80a12,12,0,0,1,17-17L128,159l71.51-71.52a12,12,0,0,1,17,17Z"></path></svg>

                        </span>
                    </div>
                    <div class="answer">
                       <span class="p-top-10">
                 Go to History in your dashboard.

                    
                       </span>
                    </div>
                </div>
        </div>
    </section>
@endsection