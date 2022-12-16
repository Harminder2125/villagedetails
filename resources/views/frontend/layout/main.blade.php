@include('frontend.layout.header')
            <div class="w-full  flex justify-center">
                <div class="bg-white  w-9/12 px-4 py-10 2xl:w-8/12">
                  <h5 class="font-bold leading-tight text-xl mt-0 mb-2 text-zinc-900">@yield('pagetitle')</h5>
                  <div class="bg-zinc-100 flex rounded p-2 mb-5">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-orange-500">
                        @yield('subtitlelogo')
                    </svg>
                    <h6 class="text-s ml-1 font-normal text-orange-500">@yield('subtitletext')</h6>

                  </div>
                  <div>

                        @yield('content')

                  </div>
              </div>

            <!-- </div> -->
        </div> <!-- White Body Tag Ends -->
@include('frontend.layout.footer')
