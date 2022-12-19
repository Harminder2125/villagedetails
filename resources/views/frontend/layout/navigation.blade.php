<div class="w-full flex h-80 justify-center  bg-orange-400  ">

  <div class="w-9/12 justify-center mt-auto 2xl:w-8/12">
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
              <a href="/" class="block py-2 pl-3 pr-4 text-white rounded md:bg-transparent {{ Route::is('home') ? 'md:text-orange-400' : '' }} md:hover:text-orange-400 md:p-0 dark:text-white" >Introduction</a>
            </li>
          <li>
              <a href="/panchayat" class="block py-2 pl-3 pr-4 text-white rounded {{ Route::is('panchayat') ? 'md:text-orange-400' : '' }} md:bg-transparent md:p-0 dark:text-white" aria-current="page">Panchayat</a>
            </li>
            <li>
              <a href="/officers" class="block py-2 pl-3 pr-4 text-white rounded {{ Route::is('officers') ? 'md:text-orange-400' : '' }} hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-orange-400 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Officers</a>
            </li>
            <li>
              <a href="/buildings" class="block py-2 pl-3 pr-4 text-gray-300 rounded {{ Route::is('buildings') ? 'md:text-orange-400' : '' }} hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-orange-400 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Important Places</a>
            </li>
            <li>
              <a href="/projects" class="block py-2 pl-3 pr-4 text-gray-300 rounded  {{ Route::is('projects') ? 'md:text-orange-400' : '' }} hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-orange-400 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Projects</a>
            </li>
            <li>
              <a href="/achievements" class="block py-2 pl-3 pr-4 text-gray-300 rounded  {{ Route::is('achievements') ? 'md:text-orange-400' : '' }} hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-orange-400 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Achievements</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</div>
