@extends('frontend.layout.main')
@section('pagetitle')
    Ongoing Project
@endsection
@section('subtitlelogo')
         <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.875 1.875 0 010 3.75H5.625a1.875 1.875 0 010-3.75z" />
@endsection
@section('subtitletext')
Ongoing development projects in the village
@endsection
@section('content')
<div class="w-full  flex flex-wrap py-5">
   <ul class="flex flex-wrap">

        <li class="bg-zinc-100 p-5 border-zinc-300 border p-3 rounded border-dashed mb-10 flex-2 mr-10">
            <h1 class="text-xl font-semibold mb-2">Schools (2)</h1>
            <ul>
                <li class="mb-1">
                    <a href="#">
                        <div class="flex p-3 rounded m-b border-b hover:bg-zinc-200">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.0" stroke="currentColor" class="w-5 h-5 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z" />
                            </svg>
                            <p>Government Senior Secondary School, Fatehabad</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="flex p-3 rounded m-b border-b hover:bg-zinc-200">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.0" stroke="currentColor" class="w-5 h-5 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z" />
                            </svg>
                            <p>Government Middle School, Fatehabad</p>
                        </div>
                    </a>
                </li>
            </ul>
        </li>
         <li class="bg-zinc-100 p-5 border-zinc-300 border p-3 rounded border-dashed mb-10 flex-2 mr-10">
            <h1 class="text-xl font-semibold mb-2">College (1)</h1>
            <ul>
                <li class="mb-1">
                    <a href="#">
                        <div class="flex p-3 rounded m-b  hover:bg-zinc-200">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.0" stroke="currentColor" class="w-5 h-5 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z" />
                            </svg>
                            <p>Punjab Law College, Fatehabad</p>
                        </div>
                    </a>
                </li>

            </ul>
        </li>

        <li class="bg-zinc-100 p-5 border-zinc-300 border p-3 rounded border-dashed mb-10 mr-10">
            <h1 class="text-xl font-semibold mb-2">Universities (0)</h1>
            <ul>
                <li class="mb-1">

                        <div class="flex py-2 px-6 rounded m-b  hover:bg-zinc-200">

                            <p class="text-zinc-400">No University at this place.</p>
                        </div>

                </li>

            </ul>
        </li>
       <li class="bg-zinc-100 p-5 border-zinc-300 border p-3 rounded border-dashed mb-10 mr-10">
            <h1 class="text-xl font-semibold mb-2">Hospitals (0)</h1>
            <ul>
                <li class="mb-1">

                        <div class="flex py-2 px-6 rounded m-b  hover:bg-zinc-200">

                            <p class="text-zinc-400">No hospital at this place.</p>
                        </div>

                </li>

            </ul>
        </li>
         <li class="bg-zinc-100 p-5 border-zinc-300 border p-3 rounded border-dashed mb-10 mr-10">
            <h1 class="text-xl font-semibold mb-2">Community Health Centres (0)</h1>
            <ul>
                <li class="mb-1">

                        <div class="flex py-2 px-6 rounded m-b  hover:bg-zinc-200">

                            <p class="text-zinc-400">No CHC at this place.</p>
                        </div>

                </li>

            </ul>
        </li>
          <li class="bg-zinc-100 p-5 border-zinc-300 border p-3 rounded border-dashed mb-10 mr-10 ">
            <h1 class="text-xl font-semibold mb-2">Other Government Offices (0)</h1>
            <ul>
                <li class="mb-1">

                        <div class="flex py-2 px-6 rounded m-b  hover:bg-zinc-200">

                            <p class="text-zinc-400">No Government Offices at this place. </p>
                        </div>

                </li>

            </ul>
        </li>
    </ul>
</div>
@endsection
</div>
