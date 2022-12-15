@include('frontend.layout.header')
            <div class="w-full flex justify-center">
                <div class="bg-white h-screen w-8/12 px-4 py-10">
                  @yield('content')
                </div>
              </div>

            </div>
        </div>
@include('frontend.layout.footer')
