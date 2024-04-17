<nav class="bg-white dark:bg-gray-900 border-b-4 border-cta">

    <div class="max-w-screen-xl flex flex-wrap items-center justify-center md:justify-between mx-auto p-4">
        {{--    LOGO & TITLE    --}}
        <div class="flex items-center justify-between md:mr-5">
            <a href="/" class="flex">
                <h3 class="text-cta font-extrabold text-3xl">
                    Blog
                </h3>
            </a>
        </div>
        {{--   END LOGO & TITLE    --}}
    </div>

    <div class="bg-blue-700 md:bg-primary md:text-white md:p-4 border-t-4 border-cta">
        <div class="items-center mx-auto max-w-screen-xl">
            <div id="mega-menu-full" class="hidden md:block font-medium w-full md:w-auto md:order-1">
                <ul class="flex md:justify-between flex-col p-4 md:p-0 md:flex-row md:space-x-8 ">
                    <li>
                        <a @click="slideCategoryTree = !slideCategoryTree"
                           class="flex justify-center md:grid md:justify-items-center py-3 cursor-pointer rounded hover:bg-gray-100 md:hover:bg-transparent focus:text-cta hover:text-cta md:p-0 dark:text-white">
                            <svg class="w-6 h-6 mr-3 md:mr-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M8 8v1h4V8m4 7H4a1 1 0 0 1-1-1V5h14v9a1 1 0 0 1-1 1ZM2 1h16a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1Z"/>
                            </svg>
                            Minden kategória
                        </a>
                    </li>

                    <li class="grid grid-cols-1 content-center">
                        {{--    USER PROFILE MENU  --}}
                        @auth()
                            <div class="flex justify-center md:grid md:justify-items-center pt-3 md:pt-0">
                                <button type="button"
                                        class="flex mr-3 text-sm md:mr-0 md:text-white hover:text-cta "
                                        id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                                        data-dropdown-placement="bottom">
                                    <svg class="w-7 h-7 mt-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19a9 9 0 1 0 0-18 9 9 0 0 0 0 18Zm0 0a8.949 8.949 0 0 0 4.951-1.488A3.987 3.987 0 0 0 11 14H9a3.987 3.987 0 0 0-3.951 3.512A8.948 8.948 0 0 0 10 19Zm3-11a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                                    </svg>
                                    <div class="px-2 ">
                                            <span class="block text-sm text-left">
                                                Üdvözöljük!
                                            </span>
                                        <span class="block text-sm truncate ">
                                                {{ Auth::user()->email }}
                                            </span>
                                    </div>
                                </button>
                                <div
                                    class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                                    id="user-dropdown">
                                    <ul class="py-2" aria-labelledby="user-menu-button">
                                        <li>
                                            <a href="{{route('blog_topics')}}"
                                               class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                                Blog témák
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('profile.edit')}}"
                                               class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                                Profil
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('user-comments')}}"
                                               class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                                Hozzászólásaim
                                            </a>
                                        </li>
                                        <li>
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <a href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();this.closest('form').submit();"
                                                   class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                                    Kijelentkezés
                                                </a>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            {{--  END USER PROFILE MENU   --}}
                        @else
                            <a href="{{route('login')}}"  class="flex justify-center md:grid md:justify-items-center py-3 cursor-pointer rounded hover:bg-gray-100 md:hover:bg-transparent focus:text-cta hover:text-cta md:p-0 dark:text-white">
                                <svg class="w-6 h-6 mr-3 md:mr-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 18">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm-2 3h4a4 4 0 0 1 4 4v2H1v-2a4 4 0 0 1 4-4Z"/>
                                </svg>
                                Fiók
                            </a>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
