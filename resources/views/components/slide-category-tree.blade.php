<div x-data="categoriesData()" x-init="fetchCategories()"
     :class="slideCategoryTree ? 'translate-x-0 ease-out' : 'translate-x-[-100%] ease-in'"
     class="fixed z-20 left-0 top-0 max-w-xs w-full h-full py-4 transition duration-300 transform overflow-y-auto bg-white border-l-2 border-gray-300">
    <div class="flex items-center justify-between px-5">
        <h3 class="text-2xl font-medium text-gray-700">Categories</h3>
        <button @click="slideCategoryTree = !slideCategoryTree" class="text-gray-600 focus:outline-none">
            <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                 viewBox="0 0 24 24" stroke="currentColor">
                <path d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>
    <hr class="my-3 mb-4">

    <template x-for="(category, index) in contents" :key="index">
        <div x-data="{open: false}">
            <div class="flex items-center w-full p-2">
                <a x-bind:href="baseUrl+'/'+category.slug+'/filter'"
                   x-text="category.name"
                   class="flex-1 ml-3 py-2 text-left whitespace-nowrap text-base text-gray-900 hover:text-cta hover:bg-gray-100">

                </a>
                <button type="button"
                        x-show="category.childs.length !== 0"
                        :id="$id(index)"
                         @click="
                         console.log(category.childs.length);
                            open = !open;
                            toggle(category.slug, open);
                         "
                        class="px-3 py-3 text-base text-gray-900 transition duration-75 group hover:bg-gray-100 hover:text-cta dark:text-white dark:hover:bg-gray-700">

                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="m1 1 4 4 4-4"/>
                    </svg>
                </button>
            </div>
                <ul class="hidden py-2 space-y-2"
                    :id="category.slug">
                    <template x-if="category.childs.length > 0"
                              x-for="(childCategory, key) in category.childs"
                              :key="key">
                        <li>
                            <a x-bind:href="baseUrl+'/'+childCategory.slug+'/filter'"
                               x-text="childCategory.name"
                               class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 hover:text-cta dark:text-white dark:hover:bg-gray-700">
                            </a>
                        </li>
                    </template>
                </ul>

        </div>
    </template>


</div>
{{--
@push('scripts')
    <script type="text/javascript">
        function categoriesData() {
            return {
                contents: [],
                baseUrl: '{{ url('/') }}',
                token: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                fetchCategories() {
                    fetch('{{ route('category.all.cached') }}', {
                        method: "GET",
                        headers: {
                            'X-CSRF-TOKEN': this.token,
                            'Content-Type': 'application/json'
                        },

                    })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                console.log(data.array);
                                this.contents = data.array;
                            } else {
                                console.error(data);
                            }

                        })
                        .catch(error => console.error(error));
                },
                toggle(targetEl, open) {
                    let element = document.getElementById(targetEl);
                    if (open) {
                        element.classList.remove('hidden');
                    } else {
                        element.classList.add('hidden');
                    }

                }
            }
        }

    </script>
@endpush
--}}
