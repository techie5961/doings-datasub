<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <!-- SEO Meta - Professional & Distinct -->
  <title>Doings DataSub | Nigeria's Premium VTU & Bill Payment Platform</title>
  <meta name="description" content="Doings DataSub – fastest VTU platform in Nigeria for data bundles, airtime recharge, electricity bills, DSTV, and API integration. Reliable, secure, 24/7.">
  <meta name="keywords" content="Doings DataSub, buy data Nigeria, cheap VTU, airtime recharge, pay bills online, SME data, API for VTU, reseller program Nigeria">
  <meta name="author" content="Doings DataSub Technologies">
  <link rel="canonical" href="https://doingsdatasub.com.ng/">
  <meta name="theme-color" content="#0a2540">
  
  <!-- Open Graph / Social -->
  <meta property="og:title" content="Doings DataSub – Instant Data, Airtime & Bills">
  <meta property="og:description" content="High-speed digital payments for modern Nigeria. Join 10,000+ active merchants and users.">
  <meta property="og:image" content="https://doingsdatasub.com.ng/assets/og-image.jpg">
  <meta property="og:url" content="https://doingsdatasub.com.ng">
  
  <!-- Fonts + Icons -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  
  <style>
    :root {
      --doings-primary: #0a2540;
      --doings-accent: #f5a623;
      --doings-soft-bg: #f9fafc;
      --doings-card-border: #eef2f6;
      --doings-gradient: linear-gradient(135deg, #0a2540 0%, #1c4e6f 100%);
    }
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      font-family: 'Inter', sans-serif;
      background: #ffffff;
      color: #1a2c3e;
      scroll-behavior: smooth;
    }
    .bg-doings { background-color: var(--doings-primary); }
    .text-doings { color: var(--doings-primary); }
    .border-doings { border-color: var(--doings-primary); }
    .btn-doings {
      background: var(--doings-primary);
      color: white;
      transition: all 0.3s ease;
      box-shadow: 0 8px 18px rgba(10,37,64,0.12);
    }
    .btn-doings:hover {
      background: #0d3555;
      transform: translateY(-2px);
      box-shadow: 0 15px 25px -8px rgba(10,37,64,0.3);
    }
    .btn-outline-doings {
      border: 2px solid var(--doings-primary);
      color: var(--doings-primary);
      transition: 0.2s;
    }
    .btn-outline-doings:hover {
      background: var(--doings-primary);
      color: white;
    }
    .stat-card {
      background: white;
      border-radius: 1.5rem;
      padding: 1.5rem;
      text-align: center;
      box-shadow: 0 5px 20px rgba(0,0,0,0.02);
      border: 1px solid var(--doings-card-border);
      transition: all 0.25s ease;
    }
    .stat-card:hover {
      transform: translateY(-6px);
      border-color: var(--doings-accent);
      box-shadow: 0 20px 30px -12px rgba(0,0,0,0.08);
    }
    .service-tile {
      background: white;
      border-radius: 1.2rem;
      padding: 1.8rem 1.2rem;
      text-align: center;
      transition: 0.25s;
      border: 1px solid #eef2f6;
    }
    .service-tile:hover {
      border-color: var(--doings-accent);
      transform: translateY(-5px);
      box-shadow: 0 20px 30px -12px rgba(0,0,0,0.1);
    }
    .icon-bg {
      background: rgba(10,37,64,0.05);
      width: 70px;
      height: 70px;
      border-radius: 20px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 1.2rem;
      transition: 0.2s;
    }
    .service-tile:hover .icon-bg {
      background: var(--doings-primary);
      color: white;
    }
    .faq-card {
      border: 1px solid #eef2f6;
      border-radius: 1rem;
      margin-bottom: 1rem;
      background: white;
    }
    .faq-question {
      padding: 1.2rem;
      font-weight: 700;
      cursor: pointer;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .faq-answer {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.35s ease;
      padding: 0 1.2rem;
      color: #4a5b6e;
    }
    .faq-answer.show {
      max-height: 300px;
      padding: 0 1.2rem 1.2rem;
    }
    .header-scroll {
      background: rgba(255,255,255,0.96);
      backdrop-filter: blur(8px);
      box-shadow: 0 1px 12px rgba(0,0,0,0.05);
    }
    .mobile-menu {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.4s cubic-bezier(0.4,0,0.2,1);
    }
    .mobile-menu.open {
      max-height: 480px;
    }
    #backToTop {
      position: fixed;
      bottom: 2rem;
      right: 2rem;
      background: var(--doings-primary);
      width: 46px;
      height: 46px;
      border-radius: 30px;
      display: none;
      align-items: center;
      justify-content: center;
      color: white;
      cursor: pointer;
      z-index: 99;
      box-shadow: 0 5px 12px rgba(0,0,0,0.2);
      transition: 0.2s;
    }
    #backToTop:hover {
      background: var(--doings-accent);
      transform: scale(1.05);
    }
    body.dark {
      background: #0f172a;
      color: #eef2ff;
    }
    body.dark .bg-white { background: #1e293b !important; }
    body.dark .bg-gray-50 { background: #0f172a !important; }
    body.dark .stat-card, body.dark .service-tile, body.dark .faq-card { background: #1e293b; border-color: #334155; }
    body.dark .text-gray-600, body.dark .text-gray-500 { color: #cbd5e6; }
    body.dark footer { background: #0f172a; border-top-color: #1e2a3a; }
    .theme-toggle {
      cursor: pointer;
      background: #eef2ff;
      width: 38px;
      height: 38px;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 12px;
    }
    .gradient-badge {
      background: linear-gradient(120deg, #f5a62310, #f5a62320);
      border-left: 4px solid #f5a623;
    }
  </style>
</head>
<body class="antialiased">

<!-- Preloader -->
<div id="preloader" style="position:fixed; inset:0; background:#fff; z-index:9999; display:flex; align-items:center; justify-content:center; transition:0.4s">
  <div class="text-center"><div class="w-12 h-12 border-4 border-doings border-t-transparent rounded-full animate-spin mx-auto mb-3"></div><p class="font-bold text-doings">Doings DataSub</p><p class="text-xs text-gray-400">loading secure portal...</p></div>
</div>

<!-- Header -->
<header class="fixed top-0 w-full z-50 bg-white/95 backdrop-blur-sm transition-all duration-300" id="mainHeader">
  <div class="max-w-7xl mx-auto px-5 lg:px-8 flex justify-between items-center h-20">
    <div class="flex items-center gap-3">
      <div class="bg-doings text-white w-10 h-10 rounded-xl flex items-center justify-center text-xl font-black">DD</div>
      <span class="text-2xl font-extrabold tracking-tight text-doings">Doings<span class="text-doings-accent" style="color:#f5a623;">DataSub</span></span>
      <div class="theme-toggle ml-2" id="darkToggle"><i class="fas fa-moon text-doings"></i></div>
    </div>
    <nav class="hidden lg:flex gap-7 font-medium text-gray-700">
      <a href="#home" class="hover:text-doings-accent transition">Home</a>
      <a href="#about" class="hover:text-doings-accent transition">About</a>
      <a href="#solutions" class="hover:text-doings-accent transition">Solutions</a>
      <a href="#services" class="hover:text-doings-accent transition">Services</a>
      <a href="#business" class="hover:text-doings-accent transition">Business</a>
      <a href="#faq" class="hover:text-doings-accent transition">FAQ</a>
    </nav>
    <div class="hidden lg:flex gap-3">
      <a href="#" class="px-5 py-2 rounded-xl border-2 border-doings text-doings font-semibold hover:bg-doings hover:text-white transition">Login</a>
      <a href="#" class="btn-doings px-6 py-2 rounded-xl font-semibold">Register</a>
    </div>
    <button id="mobileMenuTrigger" class="lg:hidden text-2xl text-doings"><i class="fas fa-bars"></i></button>
  </div>
  <div id="mobileMenuPanel" class="lg:hidden bg-white shadow-xl mobile-menu">
    <div class="flex flex-col p-6 gap-4 border-t">
      <a href="#home" class="py-2 font-medium">Home</a><a href="#about" class="py-2 font-medium">About</a><a href="#solutions" class="py-2 font-medium">Solutions</a><a href="#services" class="py-2 font-medium">Services</a><a href="#business" class="py-2 font-medium">Business</a><a href="#faq" class="py-2 font-medium">FAQ</a>
      <hr><div class="flex gap-3 pt-2"><a href="#" class="flex-1 text-center py-2 border border-doings rounded-xl">Login</a><a href="#" class="flex-1 text-center py-2 btn-doings rounded-xl">Register</a></div>
    </div>
  </div>
</header>
<div class="h-20"></div>

<!-- Hero Section - Bold, busy, professional -->
<section id="home" class="relative overflow-hidden bg-gradient-to-br from-[#fafcff] to-white py-20 md:py-28">
  <div class="max-w-7xl mx-auto px-5 lg:px-8">
    <div class="grid lg:grid-cols-2 gap-12 items-center">
      <div data-aos="fade-right">
        <div class="inline-flex items-center gap-2 bg-[#fef5e8] px-4 py-1.5 rounded-full text-doings-accent font-semibold text-sm mb-5"><i class="fas fa-bolt"></i> <span>Industry-leading speed</span></div>
        <h1 class="text-4xl md:text-6xl font-extrabold leading-tight text-doings">Powering Digital <span class="text-doings-accent">Transactions</span> Across Nigeria</h1>
        <p class="text-lg text-gray-600 mt-5 mb-8 max-w-lg">Doings DataSub delivers instant data, airtime, utility bills, and TV subscriptions. Join over 12,000 active users and 500+ business partners.</p>
        <div class="flex flex-wrap gap-4">
          <a href="#" class="btn-doings px-8 py-3 rounded-xl font-bold text-lg shadow-lg">Get Started Now</a>
          <a href="#" class="border-2 border-doings px-7 py-3 rounded-xl font-semibold text-doings hover:bg-doings hover:text-white transition">View API Docs</a>
        </div>
        <div class="flex items-center gap-6 mt-10">
          <div class="flex -space-x-3"><img src="https://randomuser.me/api/portraits/women/68.jpg" class="w-10 h-10 rounded-full border-2 border-white"><img src="https://randomuser.me/api/portraits/men/32.jpg" class="w-10 h-10 rounded-full border-2 border-white"><img src="https://randomuser.me/api/portraits/men/46.jpg" class="w-10 h-10 rounded-full border-2 border-white"><div class="w-10 h-10 rounded-full bg-doings text-white flex items-center justify-center text-sm font-bold border-2 border-white">12k+</div></div>
          <div><p class="font-bold text-gray-800">Trusted by thousands</p><div class="flex text-doings-accent"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><span class="text-gray-500 ml-1">4.9/5</span></div></div>
        </div>
      </div>
      <div data-aos="fade-left" class="relative">
        <div class="bg-white rounded-3xl shadow-2xl overflow-hidden border border-gray-100"><img src="https://images.pexels.com/photos/6694552/pexels-photo-6694552.jpeg?auto=compress&cs=tinysrgb&w=800" alt="dashboard" class="w-full h-auto"><div class="absolute -bottom-5 -left-5 bg-white p-4 rounded-2xl shadow-xl border-l-4 border-doings-accent"><p class="text-xs font-semibold text-gray-500">Average response</p><p class="font-bold text-doings text-xl">&lt; 2 seconds</p></div></div>
      </div>
    </div>
  </div>
</section>

<!-- About + Stats (Professional busy layout) -->
<section id="about" class="py-20 bg-white">
  <div class="max-w-7xl mx-auto px-5 lg:px-8">
    <div class="grid lg:grid-cols-2 gap-12 items-center">
      <div data-aos="fade-up"><span class="text-doings-accent font-semibold uppercase tracking-wider">Who we are</span><h2 class="text-3xl md:text-4xl font-bold text-doings mt-2 mb-5">Driving financial inclusion through VTU excellence</h2><p class="text-gray-600 mb-5 leading-relaxed">Doings DataSub is a next-generation VTU platform built for speed, scale, and security. We provide individuals, agents, and enterprises with seamless access to data bundles, airtime, electricity tokens, cable TV, and exam pins — all via one dashboard or API.</p><p class="text-gray-600 mb-6">Our infrastructure processes over 100k requests daily with 99.95% uptime. We partner with major telcos and banks to deliver unbeatable discounts.</p><div class="flex gap-6 mt-4"><div><span class="text-3xl font-extrabold text-doings">₦2.1B+</span><p class="text-gray-500">Processed volume</p></div><div><span class="text-3xl font-extrabold text-doings">150k+</span><p class="text-gray-500">Daily transactions</p></div><div><span class="text-3xl font-extrabold text-doings">24/7</span><p class="text-gray-500">Support squad</p></div></div></div>
      <div data-aos="fade-up" class="bg-doings-soft-bg rounded-3xl p-6 relative"><img src="https://images.unsplash.com/photo-1556741533-6e6a3bd8b0b2?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="rounded-2xl shadow-lg" alt="team"></div>
    </div>
  </div>
</section>

<!-- Trust banner -->
<div class="bg-gray-50 py-4 border-y"><div class="max-w-7xl mx-auto px-5 text-center text-gray-700"><span class="font-bold text-doings">Doings DataSub</span> — Enterprise-grade VTU platform for modern Nigeria. Reliable, affordable, lightning-fast.</div></div>

<!-- Solutions / Core Features (Busy yet professional) -->
<section id="solutions" class="py-20 bg-gray-50">
  <div class="max-w-7xl mx-auto px-5 lg:px-8">
    <div class="text-center max-w-2xl mx-auto mb-14"><span class="text-doings-accent font-semibold">Core Capabilities</span><h2 class="text-3xl md:text-4xl font-bold text-doings mt-2">Everything you need to transact</h2></div>
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-7">
      <div class="stat-card"><div class="icon-bg mx-auto mb-4 text-2xl text-doings"><i class="fas fa-tachometer-alt"></i></div><h3 class="text-xl font-bold mb-2">Ultra-fast delivery</h3><p class="text-gray-500">Data & airtime delivered in under 3 seconds. No downtime.</p></div>
      <div class="stat-card"><div class="icon-bg mx-auto mb-4 text-2xl text-doings"><i class="fas fa-chart-line"></i></div><h3 class="text-xl font-bold mb-2">Reseller discounts</h3><p class="text-gray-500">Become an agent & get premium margins on every transaction.</p></div>
      <div class="stat-card"><div class="icon-bg mx-auto mb-4 text-2xl text-doings"><i class="fas fa-code-branch"></i></div><h3 class="text-xl font-bold mb-2">Developer API</h3><p class="text-gray-500">REST API with webhooks — integrate VTU into your app seamlessly.</p></div>
      <div class="stat-card"><div class="icon-bg mx-auto mb-4 text-2xl text-doings"><i class="fas fa-shield-alt"></i></div><h3 class="text-xl font-bold mb-2">Bank-grade security</h3><p class="text-gray-500">SSL encryption, fraud detection, secure wallets.</p></div>
      <div class="stat-card"><div class="icon-bg mx-auto mb-4 text-2xl text-doings"><i class="fas fa-hand-holding-usd"></i></div><h3 class="text-xl font-bold mb-2">Automated bill payments</h3><p class="text-gray-500">Electricity, DSTV, GOTV, Startimes — instant tokens.</p></div>
      <div class="stat-card"><div class="icon-bg mx-auto mb-4 text-2xl text-doings"><i class="fas fa-robot"></i></div><h3 class="text-xl font-bold mb-2">Smart wallet system</h3><p class="text-gray-500">Fund via transfer, card, or USSD. Auto-refunds on failed tx.</p></div>
    </div>
  </div>
</section>

<!-- Services Grid (busy, showcasing all) -->
<section id="services" class="py-20 bg-white">
  <div class="max-w-7xl mx-auto px-5 lg:px-8">
    <div class="text-center mb-12"><h2 class="text-3xl md:text-4xl font-bold text-doings">Comprehensive service suite</h2><p class="text-gray-500 mt-2">One dashboard for all digital needs</p></div>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-5">
      <div class="service-tile"><div class="icon-bg mx-auto mb-3"><i class="fas fa-wifi text-2xl text-doings"></i></div><h4 class="font-bold">Data bundles</h4><p class="text-xs text-gray-500">MTN, Glo, Airtel, 9mobile</p></div>
      <div class="service-tile"><div class="icon-bg mx-auto mb-3"><i class="fas fa-phone-alt text-2xl text-doings"></i></div><h4 class="font-bold">Airtime top-up</h4><p class="text-xs text-gray-500">All networks instant</p></div>
      <div class="service-tile"><div class="icon-bg mx-auto mb-3"><i class="fas fa-bolt text-2xl text-doings"></i></div><h4 class="font-bold">Electricity bills</h4><p class="text-xs text-gray-500">Prepaid / Postpaid</p></div>
      <div class="service-tile"><div class="icon-bg mx-auto mb-3"><i class="fas fa-tv text-2xl text-doings"></i></div><h4 class="font-bold">Cable TV</h4><p class="text-xs text-gray-500">DSTV, GOtv, Startimes</p></div>
      <div class="service-tile"><div class="icon-bg mx-auto mb-3"><i class="fas fa-graduation-cap text-2xl text-doings"></i></div><h4 class="font-bold">Exam pins</h4><p class="text-xs text-gray-500">WAEC, NECO, NABTEB</p></div>
      <div class="service-tile"><div class="icon-bg mx-auto mb-3"><i class="fas fa-exchange-alt text-2xl text-doings"></i></div><h4 class="font-bold">Airtime 2 cash</h4><p class="text-xs text-gray-500">Convert excess airtime</p></div>
      <div class="service-tile"><div class="icon-bg mx-auto mb-3"><i class="fas fa-charging-station text-2xl text-doings"></i></div><h4 class="font-bold">SME data plans</h4><p class="text-xs text-gray-500">Corporate discounts</p></div>
      <div class="service-tile"><div class="icon-bg mx-auto mb-3"><i class="fas fa-gift text-2xl text-doings"></i></div><h4 class="font-bold">Referral bonus</h4><p class="text-xs text-gray-500">Earn up to 5%</p></div>
    </div>
  </div>
</section>

<!-- Business Opportunities (Agent & Vendor, redesigned) -->
<section id="business" class="py-20 bg-doings text-white">
  <div class="max-w-7xl mx-auto px-5 lg:px-8">
    <div class="grid lg:grid-cols-2 gap-12 items-center">
      <div data-aos="fade-right"><h2 class="text-3xl md:text-4xl font-bold mb-5">Grow your income with Doings DataSub</h2><p class="text-white/80 text-lg mb-4">Become an authorized agent, reseller, or API partner. Unlock wholesale prices, dedicated account manager, and white-label possibilities. Our agent network is the backbone of digital access in Nigeria.</p><ul class="space-y-3 mb-8"><li class="flex gap-2"><i class="fas fa-check-circle text-doings-accent mt-1"></i><span>Up to 15% discount on data & airtime</span></li><li class="flex gap-2"><i class="fas fa-check-circle text-doings-accent mt-1"></i><span>Free API integration support</span></li><li class="flex gap-2"><i class="fas fa-check-circle text-doings-accent mt-1"></i><span>Dedicated agent dashboard & analytics</span></li></ul><div class="flex gap-4 flex-wrap"><a href="#" class="bg-white text-doings px-7 py-3 rounded-xl font-bold shadow-lg hover:shadow-xl transition">Become an Agent</a><a href="#" class="border-2 border-white px-7 py-3 rounded-xl font-semibold hover:bg-white/10">Request API Key</a></div></div>
      <div data-aos="fade-left" class="bg-white/10 rounded-2xl p-2 backdrop-blur-sm"><img src="https://images.unsplash.com/photo-1556742031-c6961e8560b0?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="rounded-xl shadow-2xl" alt="agent dashboard"></div>
    </div>
  </div>
</section>

<!-- How It Works - Clean -->
<section class="py-20 bg-white">
  <div class="max-w-7xl mx-auto px-5 text-center"><h2 class="text-3xl md:text-4xl font-bold text-doings mb-3">Get started in 3 steps</h2><p class="text-gray-500 mb-12">Simple, transparent, and profitable</p>
    <div class="grid md:grid-cols-3 gap-8"><div><div class="w-16 h-16 bg-doings text-white rounded-2xl flex items-center justify-center text-2xl font-bold mx-auto mb-4">1</div><h4 class="font-bold text-xl">Create account</h4><p class="text-gray-500">Free registration, no hidden charges.</p></div><div><div class="w-16 h-16 bg-doings text-white rounded-2xl flex items-center justify-center text-2xl font-bold mx-auto mb-4">2</div><h4 class="font-bold text-xl">Fund wallet</h4><p class="text-gray-500">Bank transfer, card, or USSD.</p></div><div><div class="w-16 h-16 bg-doings text-white rounded-2xl flex items-center justify-center text-2xl font-bold mx-auto mb-4">3</div><h4 class="font-bold text-xl">Start transactions</h4><p class="text-gray-500">Buy data, pay bills, earn commissions.</p></div></div>
  </div>
</section>

<!-- Testimonials with busy layout -->
<section class="py-20 bg-gray-50">
  <div class="max-w-7xl mx-auto px-5"><h2 class="text-center text-3xl font-bold text-doings mb-12">Trusted by industry leaders & individuals</h2>
    <div class="grid md:grid-cols-3 gap-6">
      <div class="bg-white rounded-2xl p-6 shadow-sm"><div class="flex text-doings-accent mb-3"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div><p class="text-gray-600">“We integrated Doings DataSub API into our platform — zero downtime and amazing support. Our users love the speed.”</p><div class="flex items-center gap-3 mt-5"><img src="https://randomuser.me/api/portraits/men/11.jpg" class="w-10 h-10 rounded-full"><div><b>Chidi N.</b><p class="text-xs text-gray-400">Fintech CTO</p></div></div></div>
      <div class="bg-white rounded-2xl p-6 shadow-sm"><div class="flex text-doings-accent mb-3"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div><p class="text-gray-600">“As a reseller, the margins are incredible. Doings DataSub is my main income source now. Highly recommended!”</p><div class="flex items-center gap-3 mt-5"><img src="https://randomuser.me/api/portraits/women/45.jpg" class="w-10 h-10 rounded-full"><div><b>Amina B.</b><p class="text-xs text-gray-400">Agent</p></div></div></div>
      <div class="bg-white rounded-2xl p-6 shadow-sm"><div class="flex text-doings-accent mb-3"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div><p class="text-gray-600">“Electricity tokens arrive in seconds. No more long queues. Best VTU platform in Nigeria right now.”</p><div class="flex items-center gap-3 mt-5"><img src="https://randomuser.me/api/portraits/men/33.jpg" class="w-10 h-10 rounded-full"><div><b>Oluwaseun K.</b><p class="text-xs text-gray-400">Customer</p></div></div></div>
    </div>
  </div>
</section>

<!-- FAQ Section (professional & busy) -->
<section id="faq" class="py-20 bg-white">
  <div class="max-w-4xl mx-auto px-5"><div class="text-center mb-12"><h2 class="text-3xl md:text-4xl font-bold text-doings">Frequently asked questions</h2><p class="text-gray-500">Everything you need to know about Doings DataSub</p></div>
    <div class="space-y-4">
      <div class="faq-card"><div class="faq-question">What is Doings DataSub? <i class="fas fa-chevron-down text-doings-accent"></i></div><div class="faq-answer"><p>Doings DataSub is a leading VTU platform in Nigeria offering instant data, airtime, bill payments, and API solutions for businesses.</p></div></div>
      <div class="faq-card"><div class="faq-question">How do I become an agent? <i class="fas fa-chevron-down"></i></div><div class="faq-answer"><p>Simply register on our platform, complete KYC, and apply for the agent program. You'll get instant discounted rates.</p></div></div>
      <div class="faq-card"><div class="faq-question">Do you provide SME data plans? <i class="fas fa-chevron-down"></i></div><div class="faq-answer"><p>Yes, we have exclusive MTN SME, Airtel Corporate, and Glo Biz data at very competitive prices.</p></div></div>
      <div class="faq-card"><div class="faq-question">Is the API free to integrate? <i class="fas fa-chevron-down"></i></div><div class="faq-answer"><p>API access is free for registered users. You only pay for transactions made via the API.</p></div></div>
      <div class="faq-card"><div class="faq-question">What happens if a transaction fails? <i class="fas fa-chevron-down"></i></div><div class="faq-answer"><p>Your wallet is refunded automatically within minutes. Our support team also monitors every transaction.</p></div></div>
      <div class="faq-card"><div class="faq-question">How secure is my wallet? <i class="fas fa-chevron-down"></i></div><div class="faq-answer"><p>We use 256-bit encryption, PCI-compliant gateways, and 2FA options for withdrawals.</p></div></div>
    </div>
  </div>
</section>

<!-- Final CTA -->
<section class="py-16 bg-doings text-white text-center"><div class="max-w-3xl mx-auto px-5"><h2 class="text-3xl md:text-4xl font-bold mb-4">Ready to scale your digital transactions?</h2><p class="text-white/80 mb-8">Join the fastest growing VTU ecosystem in Nigeria today.</p><a href="#" class="inline-block bg-white text-doings px-8 py-3 rounded-xl font-bold text-lg shadow-xl hover:shadow-2xl transition">Create free account →</a></div></section>

<!-- Footer - professional -->
<footer class="bg-white border-t py-12"><div class="max-w-7xl mx-auto px-5 grid md:grid-cols-4 gap-8"><div><div class="flex items-center gap-2 mb-4"><div class="bg-doings text-white w-8 h-8 rounded-lg flex items-center justify-center">DD</div><span class="font-bold text-xl text-doings">Doings DataSub</span></div><p class="text-gray-500 text-sm">The most reliable VTU & bill payment platform in Nigeria.</p><div class="flex gap-3 mt-5"><i class="fab fa-linkedin text-gray-400"></i><i class="fab fa-twitter text-gray-400"></i><i class="fab fa-instagram text-gray-400"></i></div></div><div><h4 class="font-bold mb-4">Company</h4><ul class="space-y-2 text-sm text-gray-500"><li>About</li><li>Careers</li><li>Press</li><li>Contact</li></ul></div><div><h4 class="font-bold mb-4">Resources</h4><ul class="space-y-2 text-sm text-gray-500"><li>API Docs</li><li>Agent Program</li><li>Support Center</li><li>System Status</li></ul></div><div><h4 class="font-bold mb-4">Legal</h4><ul class="space-y-2 text-sm text-gray-500"><li>Privacy Policy</li><li>Terms of Use</li><li>Cookie Policy</li><li>Compliance</li></ul></div></div><div class="border-t mt-10 pt-6 text-center text-gray-400 text-sm">© 2025 Doings DataSub — A product of Doings Technologies. All transactions are secure.</div></footer>

<button id="backToTop"><i class="fas fa-arrow-up"></i></button>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({ duration: 600, once: true });
  window.addEventListener('load', () => { document.getElementById('preloader').style.opacity = '0'; setTimeout(()=>document.getElementById('preloader').style.display='none', 400); });
  const menuBtn = document.getElementById('mobileMenuTrigger'), mobilePanel = document.getElementById('mobileMenuPanel');
  menuBtn.addEventListener('click', () => { mobilePanel.classList.toggle('open'); menuBtn.innerHTML = mobilePanel.classList.contains('open') ? '<i class="fas fa-times"></i>' : '<i class="fas fa-bars"></i>'; });
  const darkToggleBtn = document.getElementById('darkToggle');
  darkToggleBtn.addEventListener('click', () => { document.body.classList.toggle('dark'); const icon = darkToggleBtn.querySelector('i'); if(document.body.classList.contains('dark')) icon.className = 'fas fa-sun'; else icon.className = 'fas fa-moon'; });
  document.querySelectorAll('.faq-question').forEach(q => { q.addEventListener('click', () => { const ans = q.parentElement.querySelector('.faq-answer'); const isActive = ans.classList.contains('show'); document.querySelectorAll('.faq-answer').forEach(a => a.classList.remove('show')); if(!isActive) ans.classList.add('show'); }); });
  const backTop = document.getElementById('backToTop'); window.addEventListener('scroll', () => { if(window.scrollY>400) backTop.style.display='flex'; else backTop.style.display='none'; }); backTop.addEventListener('click', () => window.scrollTo({top:0,behavior:'smooth'}));
  const header = document.getElementById('mainHeader'); window.addEventListener('scroll', () => { if(window.scrollY>20) header.classList.add('header-scroll'); else header.classList.remove('header-scroll'); });
</script>
</body>
</html>