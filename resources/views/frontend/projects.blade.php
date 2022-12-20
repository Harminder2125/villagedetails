@extends('frontend.layout.main')
@section('pagetitle')
    Project
@endsection
@section('subtitlelogo')
         <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.875 1.875 0 010 3.75H5.625a1.875 1.875 0 010-3.75z" />
@endsection
@section('subtitletext')
Ongoing development projects in the village
@endsection
@section('content')
<div class="w-full  flex flex-wrap py-5">
    <h1 class="text-xl font-semibold mb-5">ONGOING PROJECTS</h1>
    <ul class="flex flex-wrap">

        <li class="bg-orange-100 p-5 border-orange-300 border p-3 rounded border-dashed mb-10 flex-2 mr-10 hover:bg-orange-200">
             <a href="#">
            <h1 class="text-xl font-semibold mb-2">MNREGA (50% completed)</h1>


                        <div class="flex p-3 rounded m-b">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.0" stroke="currentColor" class="w-5 h-5 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z" />
                            </svg>
                            <p>Repairing of Street lights and installation of new gym.</p>
                        </div>
                    </a>

        </li>
         <li class="bg-orange-100 p-5 border-orange-300 border p-3 rounded border-dashed mb-10 flex-2 mr-10 hover:bg-orange-200">
         <a href="#">
         <h1 class="text-xl font-semibold mb-2">Water Treatment Plant (48% completed)</h1>


                        <div class="flex p-3 rounded m-b ">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.0" stroke="currentColor" class="w-5 h-5 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z" />
                            </svg>
                            <p>Water treatment plant to be installed at village</p>
                        </div>
                    </a>

        </li>

        <li class="bg-orange-100 p-5 border-orange-300 border p-3 rounded border-dashed mb-10 mr-10 hover:bg-orange-200">
         <a href="#">
        <h1 class="text-xl font-semibold mb-2">Renovation of CHC (90% completed)</h1>


                        <div class="flex py-2 px-6 rounded m-b">

                            <p class="text-orange-400">Details not available.</p>
                        </div>

</a>
        </li>
    </ul>
</div>
<div class="w-full   py-5">
    <h1 class="text-xl font-semibold mb-5">Completed Projects</h1>
    <ul class="flex flex-wrap">
        <li class="bg-zinc-100 p-5 border-zinc-300 border p-3 rounded border-dashed mb-10 mr-10 hover:bg-zinc-200">
            <a href="#">
                <h1 class="text-xl font-semibold mb-2">Renovation of Hospital (100% Completed)</h1>
                <div class="flex py-2 px-6 rounded m-b">
                    <p class="text-zinc-400">click to view details.</p>
                </div>
            </a>
        </li>


    </ul>

</div>
@endsection
</div>
