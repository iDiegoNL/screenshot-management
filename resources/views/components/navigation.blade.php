<nav class="bg-indigo-600 border-b border-indigo-300 border-opacity-25 lg:border-none">
    <div class="max-w-7xl mx-auto px-2 sm:px-4 lg:px-8">
        <div
            class="relative h-16 flex items-center justify-between lg:border-b lg:border-indigo-400 lg:border-opacity-25">
            <div class="px-2 flex items-center lg:px-0">
                <div class="flex-shrink-0">
                    <h1 class="text-xl font-medium text-white">{{ config('app.name') }}</h1>
                </div>
                <div class="hidden lg:block lg:ml-10">
                    <div class="flex space-x-4">
                        <x-navigation-items/>
                    </div>
                </div>
            </div>
            <div class="flex-1 px-2 flex justify-center lg:ml-6 lg:justify-end">
                <div class="max-w-lg w-full lg:max-w-xs">
                    <label for="search" class="sr-only">Search</label>
                    <div class="relative text-gray-400 focus-within:text-gray-600">
                        <div class="pointer-events-none absolute inset-y-0 left-0 pl-3 flex items-center">
                            <!-- Heroicon name: solid/search -->
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                 fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                      d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                      clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <input id="search"
                               class="block w-full bg-white py-2 pl-10 pr-3 border border-transparent rounded-md leading-5 text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-indigo-600 focus:ring-white focus:border-white sm:text-sm"
                               placeholder="Search" type="search" name="search">
                    </div>
                </div>
            </div>
            <div class="flex lg:hidden">
                <!-- Mobile menu button -->
                <button type="button"
                        class="bg-indigo-600 p-2 rounded-md inline-flex items-center justify-center text-indigo-200 hover:text-white hover:bg-indigo-500 hover:bg-opacity-75 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-indigo-600 focus:ring-white"
                        aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <!--
                      Heroicon name: outline/menu

                      Menu open: "hidden", Menu closed: "block"
                    -->
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <!--
                      Heroicon name: outline/x

                      Menu open: "block", Menu closed: "hidden"
                    -->
                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
            <div class="hidden lg:block lg:ml-4">
                <div class="flex items-center">
                    <!-- Profile dropdown -->
                    <div class="ml-3 relative flex-shrink-0">
                        <div>
                            <button
                                class="bg-indigo-600 rounded-full flex text-sm text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-indigo-600 focus:ring-white"
                                id="user-menu" aria-haspopup="true">
                                <span class="sr-only">Open user menu</span>
                                <img class="rounded-full h-8 w-8"
                                     src="{{ Auth::user()->profile_picture ?? '' }}"
                                     alt="{{ Auth::user()->name ?? '' }}">
                            </button>
                        </div>
                        <!--
                          Profile dropdown panel, show/hide based on dropdown state.

                          Entering: "transition ease-out duration-100"
                            From: "transform opacity-0 scale-95"
                            To: "transform opacity-100 scale-100"
                          Leaving: "transition ease-in duration-75"
                            From: "transform opacity-100 scale-100"
                            To: "transform opacity-0 scale-95"
                        -->
{{--                        <div--}}
{{--                            class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5"--}}
{{--                            role="menu" aria-orientation="vertical" aria-labelledby="user-menu">--}}
{{--                            <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100"--}}
{{--                               role="menuitem">--}}
{{--                                Your Profile--}}
{{--                            </a>--}}

{{--                            <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100"--}}
{{--                               role="menuitem">--}}
{{--                                Settings--}}
{{--                            </a>--}}

{{--                            <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100"--}}
{{--                               role="menuitem">--}}
{{--                                Sign out--}}
{{--                            </a>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="lg:hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <x-navigation-items/>
        </div>
        <div class="pt-4 pb-3 border-t border-indigo-700">
            <div class="px-5 flex items-center">
                <div class="flex-shrink-0">
                    <img class="rounded-full h-10 w-10"
                         src="{{ Auth::user()->profile_picture ?? '' }}"
                         alt="{{ Auth::user()->name ?? '' }}">
                </div>
                <div class="ml-3">
                    <div class="text-base font-medium text-white">{{ Auth::user()->name ?? '' }}</div>
                    <div class="text-sm font-medium text-indigo-300">{{ Auth::user()->email ?? '' }}</div>
                </div>
            </div>
{{--            <div class="mt-3 px-2 space-y-1">--}}
{{--                <a href="#"--}}
{{--                   class="block rounded-md py-2 px-3 text-base font-medium text-white hover:bg-indigo-500 hover:bg-opacity-75">--}}
{{--                    Your Profile--}}
{{--                </a>--}}

{{--                <a href="#"--}}
{{--                   class="block rounded-md py-2 px-3 text-base font-medium text-white hover:bg-indigo-500 hover:bg-opacity-75">--}}
{{--                    Settings--}}
{{--                </a>--}}

{{--                <a href="#"--}}
{{--                   class="block rounded-md py-2 px-3 text-base font-medium text-white hover:bg-indigo-500 hover:bg-opacity-75">--}}
{{--                    Sign out--}}
{{--                </a>--}}
{{--            </div>--}}
        </div>
    </div>
</nav>
