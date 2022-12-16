@extends('frontend.layout.main')

        @section('pagetitle')
    Officers
@endsection
@section('subtitlelogo')
         <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.875 1.875 0 010 3.75H5.625a1.875 1.875 0 010-3.75z" />
@endsection
@section('subtitletext')
Officers looking after different works of this village
@endsection
@section('content')
<div class="w-full justify-center flex flex-wrap bg-zinc-100 p-10">
  <div class="flex-1 mb-10">
    <div class="w-full ">
        @component('frontend.components.officer-cards')
        @slot('photo')
            <img src="./assets/images/Sarpanch/sikh.jpg" class="w-16 h-16 rounded-full"/>
        @endslot
        @slot('badgecolor')
           border-zinc-400
        @endslot
        @slot('designation')
        <span class="bg-lime-400 text-lime-800 text-xs px-2 inline-block rounded-full  uppercase font-semibold tracking-wide">
            ADC(Development)
        </span>
        @endslot
        @slot('membername')
            <span>Harminder Singh</span>
        @endslot
        @slot('mobile')
            9888983051
        @endslot
        @slot('email')
         harminder.singh2125@gmail.com
        @endslot
        @endcomponent
    </div>
  </div>
  <div class="flex-1 mb-10">
<div class="w-full">
    @component('frontend.components.officer-cards')
    @slot('photo')
    <img src="./assets/images/Sarpanch/girl1.jpg" class="w-16 h-16 rounded-full"/>
    @endslot
    @slot('badgecolor')
    border-zinc-400
    @endslot
    @slot('designation')
    <span class="bg-orange-200 text-orange-800 text-xs px-2 inline-block rounded-full  uppercase font-semibold tracking-wide">
       Patwari
    </span>
    @endslot
    @slot('membername')
    <span>Surjit Kaur</span>
    @endslot
    @slot('mobile')
    9878980987
    @endslot
    @slot('email')
    gurpreet@gmail.com
    @endslot
    @endcomponent
</div>
  </div>
  <div class="flex-1 mb-10">
<div class="w-full">
    @component('frontend.components.officer-cards')
    @slot('photo')
    <img src="./assets/images/MLA/drkashmirsingh.jpg" class="w-16 h-16 rounded-full"/>
    @endslot
    @slot('badgecolor')
    border-zinc-400
    @endslot
    @slot('designation')
    <span class="bg-orange-200 text-orange-800 text-xs px-2 inline-block rounded-full  uppercase font-semibold tracking-wide">
        DDPO
    </span>
    @endslot
    @slot('membername')
    <span>Lovedeep Singh</span>
    @endslot
    @slot('mobile')
    8190498989
    @endslot
    @slot('email')
    lovedeep@gmail.com
    @endslot
    @endcomponent
</div>
  </div>
  <div class="flex-1 mb-10">
<div class="w-full">
    @component('frontend.components.officer-cards')
    @slot('photo')
    <img src="./assets/images/Sarpanch/Sarpanch.jpg" class="w-16 h-16 rounded-full"/>
    @endslot
    @slot('badgecolor')
    border-zinc-400
    @endslot
    @slot('designation')
    <span class="bg-orange-200 text-orange-800 text-xs px-2 inline-block rounded-full  uppercase font-semibold tracking-wide">
        BDPO
    </span>
    @endslot
    @slot('membername')
    <span>Tarsem Singh</span>
    @endslot
    @slot('mobile')
    7689875436
    @endslot
    @slot('email')
    tarsem_13@gmail.com
    @endslot
    @endcomponent
</div>
  </div>
  <div class="flex-1 mb-10 ">


<div class="w-full">
    @component('frontend.components.officer-cards')
    @slot('photo')
    <img src="./assets/images/Sarpanch/girl2.jpg" class="w-16 h-16 rounded-full"/>
    @endslot
    @slot('badgecolor')
    border-zinc-400
    @endslot
    @slot('designation')
    <span class="bg-orange-200 text-orange-800 text-xs px-2 inline-block rounded-full  uppercase font-semibold tracking-wide">
        Kanungo
    </span>
    @endslot
    @slot('membername')
    <span>Meena</span>
    @endslot
    @slot('mobile')
    8190498989
    @endslot
    @slot('email')
    lovedeep@gmail.com
    @endslot
    @endcomponent
</div>


    </div>







</div>
@endsection
</div>
