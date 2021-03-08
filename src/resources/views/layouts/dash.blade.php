    <div class="flex flex-col w-64 border-r border-gray-200 bg-indigo-800">
        
      
      <div class="h-0 flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">

            <div class="flex items-center flex-shrink-0 px-4">
                {{-- <img class="h-7 w-auto" src="" alt="Surge Logo"> --}}
                <p class="text-white text-2xl h-7 w-auto">Surge</p>
            </div>


            <!-- Sidebar component, swap this element with another sidebar if you like -->
            <nav class="mt-5 space-y-1 flex-1 px-2 bg-indigo-800">
                <a href="/dashboard" class="group flex items-center px-2 py-2 text-sm leading-5 font-medium text-white rounded-md bg-indigo-900 focus:outline-none focus:bg-indigo-700 transition ease-in-out duration-150">
                    <svg class="mr-3 h-6 w-6 text-indigo-400 group-focus:text-indigo-300 transition ease-in-out duration-150" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l9-9 9 9M5 10v10a1 1 0 001 1h3a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1h3a1 1 0 001-1V10M9 21h6"></path>
                    </svg>
                    Dashboard
                </a>
                
            </nav>

        </div>

        {{-- <div class="flex-shrink-0 flex border-t border-indigo-700 p-4">
            <a href="/profile" class="flex-shrink-0 w-full group block">
                <div class="flex items-center">
                    <div>
                        <img class="inline-block h-9 w-9 rounded-full" src="{{ auth()->user()->avatarUrl() }}" alt="Profile Photo">
                    </div>

                    <div class="ml-3">
                        <p class="text-sm leading-5 font-medium text-white">
                            Paul Weamer
                        </p>

                        <p class="text-xs leading-4 font-medium text-indigo-300 group-hover:text-indigo-100 transition ease-in-out duration-150">
                            View profile
                        </p>
                    </div>
                </div>
            </a>
        </div> --}}

    </div>  

        
