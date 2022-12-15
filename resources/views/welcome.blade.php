<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
         <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="antialiased">
        <div class="relative flex flex-col min-h-screen bg-gray-200 dark:bg-gray-900 py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="w-full flex h-80 justify-center  bg-orange-400  ">
                <div class="w-8/12 justify-center mt-auto">
                  <nav class="bg-zinc-900 opacity-90 border-gray-200 px-2 sm:px-4 py-0.5 dark:bg-gray-900">
                    <div class="container flex flex-wrap items-center justify-between mx-auto">
                      <a href="https://flowbite.com/" class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 mr-3 sm:h-9 text-white">
  <path stroke-linecap="round" stroke-linejoin="round" d="M9 6.75V15m6-6v8.25m.503 3.498l4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 00-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0z" />
</svg>


                          <span class="self-center text-xl font-semibold whitespace-nowrap text-white">Village Directory</span>
                      </a>
                      <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                      </button>
                      <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                        <ul class="flex flex-col p-4 mt-4 border border-gray-100  bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-zinc-900 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="#" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-orange-400 md:p-0 dark:text-white" >Introduction</a>
                          </li>
                        <li>
                            <a href="#" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:p-0 dark:text-white" aria-current="page">Panchayat</a>
                          </li>
                          <li>
                            <a href="#" class="block py-2 pl-3 pr-4 text-gray-300 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-orange-400 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Officers</a>
                          </li>
                          <li>
                            <a href="#" class="block py-2 pl-3 pr-4 text-gray-300 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-orange-400 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Important Places</a>
                          </li>
                          <li>
                            <a href="#" class="block py-2 pl-3 pr-4 text-gray-300 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-orange-400 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Projects</a>
                          </li>
                          <li>
                            <a href="#" class="block py-2 pl-3 pr-4 text-gray-300 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-orange-400 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Achievements</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </nav>
                </div>
            </div>
            <div class="w-full flex justify-center">
                <div class="bg-white flex h-screen w-8/12 px-4 py-10">
                  <div class="basis-3/4 pr-5">
                    <h5 class="font-bold leading-tight text-xl mt-0 mb-2 text-zinc-900">Introduction</h5>
                    <div class="bg-zinc-100 flex rounded p-2 mb-5">
                       <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4 text-orange-500">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                      </svg>
                      <h6 class="text-xs ml-1 font-bold text-orange-500">2.5 Kms from DAC</h6>
                    </div>
                    <p class="text-l font-light leading-loose text-justify">
                    Fatehabad is a village located in <span class="text-zinc-900 font-bold">Chohla Sahib</span> block of Tehsil <span class="font-bold">Khadoor Sahib</span> in district <span class="text-orange-500">Tarn Taran</span>. It is approximately 2.5 Kilometers from District Administration Complex, Tarn Taran. As per 2011 census total population of this village is 1230. There is one government senior secondary school and one government primary school in this village.
                    As of 2001 Indian census, Tarn Taran Sahib had a population of 130,587. Males constitute 51% of the population and females 49%. Tarn Taran has an average literacy rate of 70%, higher than the national average of 59.5%: male literacy is 60%, and female literacy is 40%. In Tarn Taran Sahib, 12% of the population is under 6 years of age and 15% is elderly. 3% of its residents have settled abroad. Sikhs form 89.1% of the total population of the district with Hindus being 9.8% and Christians 1.1% of the total population. It should be noted that Tarn Taran district has the highest Sikh percentage among all the districts of Punjab followed by Moga at 87%. As of 2001 Indian census, Tarn Taran Sahib had a population of 130,587. Males constitute 51% of the population and females 49%.
                  </p>
                    <h5 class="font-bold leading-tight text-xl mb-2 text-zinc-900 mt-5">Details</h5>
                    <div class="bg-zinc-100 flex rounded p-2 mb-5">
                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-orange-500">
  <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
</svg>

                      <h6 class="text-xs ml-1 font-bold text-orange-500">Important details related to village Fatehabad</h6>
                    </div>
                    <div class="flex flex-col">
                      <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                          <div class="overflow-hidden">
                            <table class="min-w-full">
                              <tr>
                                <th scope="col" class="font-semibold bg-gray-200 text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                  Village Name
                                </th>
                                <td class=" bg-gray-100 px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Fatehabad
                                </td>
                              </tr>
                                                            <tr>
                                <th scope="col" class="font-semibold bg-gray-200 text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                 Block
                                </th>
                                <td class="bg-gray-100 px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Chohla Sahib
                                </td>
                              </tr>
                              <tr>
                                <th scope="col" class="font-semibold bg-gray-200 text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                  Tehsil
                                </th>
                                <td class="bg-gray-100 px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Khadoor Sahib
                                </td>
                              </tr>
                                <tr>
                                <th scope="col" class="font-semibold bg-gray-200 text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                  Population (as per 2011 census)
                                </th>
                                <td class="bg-gray-100 px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1235
                                </td>
                              </tr>
                                 <tr>
                                <th scope="col" class="font-semibold bg-gray-200 text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                  Males (as per 2011 census)
                                </th>
                                <td class="bg-gray-100 px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">800
                                </td>
                              </tr>
                                 <tr>
                                <th scope="col" class="font-semibold bg-gray-200 text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                 Females (as per 2011 census)
                                </th>
                                <td class="bg-gray-100 px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">435
                                </td>
                              </tr>

                            </table>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                  <div class="basis-1/4 pl-5">


                    <div class="flex flex-col items-center justify-center mt-9 ">
                      <img class="h-48 w-48 rounded" src="./assets/images/MLA/drkashmirsingh.jpg"/>
                      <h6 class="mt-1 font-bold">Dr. Kashmir Singh Sohal</h6>
                      <p>Member of Legislative Assembly</p>
                      <p>Tarn Taran</p>
                    </div>
                    <div class="flex flex-col items-center justify-center mt-9 ">
                      <img class="h-48 w-48 rounded" src="./assets/images/Sarpanch/Sarpanch.jpg"/>
                      <h6 class="mt-1 font-bold">Gurmeet Singh</h6>
                      <p>Sarpanch</p>
                    </div>
                    <div class="w-full mt-10">


                    </div>
                    <div class="h-48 flex flex-col items-center justify-center mt-3  rounded py-3">
                       <canvas id="populationChart"></canvas>
                        <h5 class="font-bold leading-tight text-l mt-1 text-zinc-900 ">Population</h5>
                         <p>As per census, 2011</p>
                    </div>
                  </div>
                </div>

<script>
  const ctx = document.getElementById('populationChart');
  new Chart(ctx, {
    type: 'pie',
    data: {
      labels: ['Males', 'Females', 'Total'],
      datasets: [{
        data: [12, 19, 3],
        borderWidth: 1
      }]
    },
    options: {
        plugins: {
            legend: {
                display: false,
                position:"left",
            }
        }
      }
  });
</script>
                </div>

            </div>
        </div>
            <div class="w-full flex h-16 justify-center  bg-zinc-800  ">
                <div class="w-8/12 flex flex-col items-center mt-auto mb-auto">
                   <nav class=" border-gray-200 px-2 sm:px-4 py-0.5 dark:bg-gray-900">
                    <div class="container flex flex-wrap items-center justify-between mx-auto">


                      <div class="hidden w-full md:block md:w-auto" >
                        <ul class="flex flex-col p-4 mt-4 border md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0">
                        <li>
                            <a href="#" class="block py-2 pl-3 pr-4 text-white  rounded md:bg-transparent  md:p-0 dark:text-white" >Website Polcies</a>
                          </li>
                        <li>
                            <a href="#" class="block py-2 pl-3 pr-4 text-white rounded md:bg-transparent md:p-0 dark:text-white" aria-current="page">Help</a>
                          </li>
                          <li>
                            <a href="#" class="block py-2 pl-3 pr-4 text-gray-300 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-orange-400 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact Us</a>
                          </li>
                          <li>
                            <a href="#" class="block py-2 pl-3 pr-4 text-gray-300 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-orange-400 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Feedback</a>
                          </li>

                        </ul>
                      </div>
                    </div>
                  </nav>
                </div>
            </div>
             <div class="w-full flex h-48 justify-center  bg-zinc-900  ">
                <div class="w-8/12 flex flex-col items-center mt-auto mb-auto">
                  <p class="text-zinc-300">Content Owned by District Administration</p>
                  <p class="text-zinc-300">&#169;District Tarn Taran, Designed & Developed by <span class="text-orange-400">National Informatics Centre,</span></p>
                  <p class="text-zinc-300"><span class="text-orange-400">Ministry of Electronics & Information Technology,</span> Government of India</p>


                </div>

              </div>
         @livewireScripts
    </body>
</html>
