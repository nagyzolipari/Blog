<footer class="bg-white dark:bg-gray-900">
    <div class="container mx-auto p-4 py-6 lg:py-8">
        <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0">
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
            <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                <div>
                    <h2 class="mb-4 text-sm font-semibold text-gray-900 uppercase dark:text-white border-b-2 border-cta">Oldalak</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-2">
                            <a href="{{ route('index') }}" class="hover:underline hover:text-cta">
                                Fóoldal
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="{{ route('login') }}" class="hover:underline hover:text-cta">
                                Fiók
                            </a>
                        </li>
                    </ul>
                </div>
                <div>

                </div>
                <div>

                </div>
            </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <div class="sm:flex sm:items-center sm:justify-between">
          <span class="text-sm text-gray-500 sm:text-center">
              © {{ config('globals.current_year') }} <a href="{{ route('index') }}" class="hover:underline">Blog™</a>
          </span>
        </div>
    </div>
</footer>
