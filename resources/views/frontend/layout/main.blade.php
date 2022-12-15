@include('frontend.layout.header')
            <div class="w-full  flex justify-center">
                <div class="bg-white  w-9/12 px-4 py-10 2xl:w-8/12">
                  @yield('content')
                </div>
              </div>

            <!-- </div> -->
        </div> <!-- White Body Tag Ends -->
@include('frontend.layout.footer')
