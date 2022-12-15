@extends('frontend.layout.main')
@section('content')
<h1 class="font-semibold text-xl mb-10">Panchayat members of village Fatehabad</h1>
<div class="flex flex-col">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <table class="min-w-full">
                    <thead class="bg-zinc-100">
                        <tr class="">
                            <th scope="col" class="px-6 font-bold  text-sm font-medium text-zinc-600 px-6 py-4 text-left">Sr. No.
                            </th>
                            <th scope="col" class="px-6 font-bold  text-sm font-medium text-zinc-600 px-6 py-4 text-left">Image
                            </th>
                            <th scope="col" class="font-bold  text-sm font-medium text-zinc-600 px-6 py-4 text-left">
                                Name
                            </th>
                            <th scope="col" class="px-6 font-bold  text-sm font-medium text-zinc-600 px-6 py-4 text-left">Designation
                            </th>
                            <th scope="col" class="px-6 font-bold  text-sm font-medium text-zinc-600 px-6 py-4 text-left">Email
                            </th>
                            <th scope="col" class="px-6 font-bold  text-sm font-medium text-zinc-600 px-6 py-4 text-left">Contact
                            </th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-zinc-200">
                            <td scope="col" class="py-3 px-6">1.</td>
                            <td scope="col" class="py-3 px-6"><img src="./assets/images/Sarpanch/Sarpanch.jpg" class="w-28 h-28 rounded"/></td>
                            <td scope="col" class="py-3 px-6">Harminder Singh</td>
                            <td scope="col" class="py-3 px-6">Sarpanch</td>
                                                    <td scope="col" class="py-3 px-6"><span class="flex"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1 mt-1">
  <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
</svg>
harminder.singh2125@gmail.com</span></td>
                            <td scope="col" class="py-3 px-6"><span class="flex"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1 mt-1">
  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
</svg>
9888983051</span></td>
                        </tr>
                         <tr class="bg-zinc-100">
                            <td scope="col" class="py-3 px-6">2.</td>
                            <td scope="col" class="py-3 px-6"><img src="./assets/images/MLA/drkashmirsingh.jpg" class="w-28 h-28 rounded"/></td>
                            <td scope="col" class="py-3 px-6">Harminder Singh</td>
                            <td scope="col" class="py-3 px-6">Sarpanch</td>
                            <td scope="col" class="py-3 px-6"><span class="flex"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1 mt-1">
  <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
</svg>
harminder.singh2125@gmail.com</span></td>
                            <td scope="col" class="py-3 px-6"><span class="flex"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1 mt-1">
  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
</svg>
9888983051</span></td>
                        </tr>
                         <tr class="bg-zinc-200">
                            <td scope="col" class="py-3 px-6">3.</td>
                            <td scope="col" class="py-3 px-6"><img src="./assets/images/Sarpanch/Sarpanch.jpg" class="w-28 h-28 rounded"/></td>
                            <td scope="col" class="py-3 px-6">Harminder Singh</td>
                            <td scope="col" class="py-3 px-6">Sarpanch</td>
                                      <td scope="col" class="py-3 px-6"><span class="flex"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1 mt-1">
  <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
</svg>
harminder.singh2125@gmail.com</span></td>
                            <td scope="col" class="py-3 px-6"><span class="flex"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1 mt-1">
  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
</svg>
9888983051</span></td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>
@endsection
