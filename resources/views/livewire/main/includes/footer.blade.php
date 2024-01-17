<footer class="bg-[#00966B] dark:bg-[#00966B] px-4 sm:px-6 lg:px-60 pt-20 pb-10 lg:pb-20 relative z-10">
    <div class="container mx-auto px-4">

        {{-- Grid (PAGES) --}}
        <div class="grid grid-cols-1 md:gap-x-6 gap-y-6 mb-10 lg:grid-cols-12 md:grid-cols-6 sm:grid-cols-2">

            {{-- Column 1 --}}
            <div class="col-span-3">

                {{-- Column title --}}
                <div class="font-semibold text-sm text-white text-[24px] mb-4 uppercase dark:text-white tracking-widest">
                    {{ __('messages.t_footer_column_1') }}
                </div>

                {{-- Column pages --}}
                @if (count($pages))
                    <ul>
                        @foreach ($pages as $page)
                            @if ($page->column == 1)
                                <li>
                                    @if ($page->is_link && $page->link)
                                        <a href="{{ $page->link }}" target="_blank"
                                            class="text-[18px] block font-normal text-white hover:text-white dark:text-gray-100 dark:hover:text-gray-50 mb-2">
                                            {{ $page->title }}
                                        </a>
                                    @else
                                        <a href="{{ url('page', $page->slug) }}"
                                            class="text-[18px] block font-normal text-white hover:text-white dark:text-gray-100 dark:hover:text-gray-50 mb-2">
                                            {{ $page->title }}
                                        </a>
                                    @endif
                                </li>
                            @endif
                        @endforeach
                    </ul>
                @endif

            </div>

            {{-- Column 2 --}}
            <div class="col-span-3">

                {{-- Column title --}}
                <div
                    class="font-semibold text-sm text-white text-[24px] mb-4 uppercase dark:text-white tracking-widest">
                    {{ __('messages.t_footer_column_2') }}
                </div>

                {{-- Column pages --}}
                @if (count($pages))
                    <ul>
                        @foreach ($pages as $page)
                            @if ($page->column == 2)
                                <li>
                                    @if ($page->is_link && $page->link)
                                        <a href="{{ $page->link }}" target="_blank"
                                            class="text-[18px] block font-normal text-white hover:text-white dark:text-gray-100 dark:hover:text-gray-50 mb-2">
                                            {{ $page->title }}
                                        </a>
                                    @else
                                        <a href="{{ url('page', $page->slug) }}"
                                            class="text-[18px] block font-normal text-white hover:text-white dark:text-gray-100 dark:hover:text-gray-50 mb-2">
                                            {{ $page->title }}
                                        </a>
                                    @endif
                                </li>
                            @endif
                        @endforeach
                    </ul>
                @endif

            </div>

            {{-- Column 3 --}}
            <div class="col-span-3">

                {{-- Column title --}}
                <div
                    class="font-semibold text-sm text-white text-[24px] mb-4 uppercase dark:text-white tracking-widest">
                    {{ __('messages.t_footer_column_3') }}
                </div>

                {{-- Column pages --}}
                @if (count($pages))
                    <ul>
                        @foreach ($pages as $page)
                            @if ($page->column == 3)
                                <li>
                                    @if ($page->is_link && $page->link)
                                        <a href="{{ $page->link }}" target="_blank"
                                            class="text-[18px] block font-normal text-white hover:text-white dark:text-gray-100 dark:hover:text-gray-50 mb-2">
                                            {{ $page->title }}
                                        </a>
                                    @else
                                        <a href="{{ url('page', $page->slug) }}"
                                            class="text-[18px] block font-normal text-white hover:text-white dark:text-gray-100 dark:hover:text-gray-50 mb-2">
                                            {{ $page->title }}
                                        </a>
                                    @endif
                                </li>
                            @endif
                        @endforeach
                    </ul>
                @endif

            </div>

            {{-- Column 4 --}}
            <div class="col-span-3">

                {{-- Column title --}}
                <div
                    class="font-semibold text-sm text-white text-[24px] mb-4 uppercase dark:text-white tracking-widest">
                    {{ __('messages.t_footer_column_4') }}
                </div>

                {{-- Column pages --}}
                @if (count($pages))
                    <ul>
                        @foreach ($pages as $page)
                            @if ($page->column == 4)
                                <li>
                                    @if ($page->is_link && $page->link)
                                        <a href="{{ $page->link }}" target="_blank"
                                            class="text-[18px] block font-normal text-white hover:text-white dark:text-gray-100 dark:hover:text-gray-50 mb-2">
                                            {{ $page->title }}
                                        </a>
                                    @else
                                        <a href="{{ url('page', $page->slug) }}"
                                            class="text-[18px] block font-normal text-white hover:text-white dark:text-gray-100 dark:hover:text-gray-50 mb-2">
                                            {{ $page->title }}
                                        </a>
                                    @endif
                                </li>
                            @endif
                        @endforeach
                    </ul>
                @endif

                {{-- @if (settings('footer')->is_language_switcher || settings('appearance')->is_dark_mode)
                    <div class="mt-10 grid grid-cols-1 gap-y-4">

                        @if (settings('footer')->is_language_switcher)

                            <button data-dropdown-toggle="change-footer-language-dropdown"
                                data-dropdown-placement="{{ config()->get('direction') === 'ltr' ? 'top-end' : 'top-start' }}"
                                type="button"
                                class="inline-flex items-center px-2.5 py-2 border border-gray-300 shadow-sm text-xs font-medium rounded text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-600 dark:bg-zinc-600 dark:text-gray-300 dark:border-zinc-600 dark:focus:ring-offset-zinc-600 dark:hover:bg-zinc-800 max-w-fit">
                                <img src="{{ placeholder_img() }}"
                                    data-src="{{ url('public/img/flags/rounded/' . strtolower($default_country_code) . '.svg') }}"
                                    alt="" class="lazy w-4 h-4 ltr:mr-3 rtl:ml-3">
                                <span
                                    class="text-xs font-semibold text-gray-500 dark:text-gray-300 whitespace-nowrap">{{ $default_language_name }}</span>
                                <svg class="w-4 h-4 ltr:ml-1 rtl:mr-1" stroke="currentColor" fill="currentColor"
                                    stroke-width="0" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>

                            <div id="change-footer-language-dropdown"
                                class="z-10 hidden bg-white rounded-md border w-48 dark:bg-zinc-800 dark:border-zinc-700">
                                <ul class="text-gray-700 dark:text-gray-200">
                                    @foreach (supported_languages() as $lang)
                                        <li wire:key="footer-languages-id-{{ $lang->language_code }}"
                                            @if ($default_language_code !== $lang->language_code) wire:click="setLocale('{{ $lang->language_code }}')" @endif
                                            class="py-2.5 px-4 flex w-full items-center cursor-pointer justify-between {{ $default_language_code === $lang->language_code ? 'bg-blue-50 text-blue-600 dark:bg-zinc-700 dark:text-white' : 'hover:bg-gray-50 dark:hover:bg-zinc-700' }} focus:outline-none first:rounded-t-md last:rounded-b-md">
                                            <div class="inline-flex items-center">
                                                <img src="{{ placeholder_img() }}"
                                                    data-src="{{ url('public/img/flags/rounded/' . $lang->country_code . '.svg') }}"
                                                    alt="{{ $lang->name }}" class="lazy w-5 ltr:mr-3 rtl:ml-3">
                                                <span
                                                    class="font-medium text-[13px] tracking-wide">{{ $lang->name }}</span>
                                            </div>
                                            <div wire:loading wire:target="setLocale('{{ $lang->language_code }}')">
                                                <svg role="status" class="block w-4 h-4 text-gray-700 animate-spin"
                                                    viewBox="0 0 100 101" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                                        fill="#E5E7EB" />
                                                    <path
                                                        d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                        @endif

                        @if (settings('appearance')->is_theme_switcher && current_theme() === 'light')
                            <button wire:click="switchTheme" wire:loading.attr="disabled"
                                class="inline-flex items-center px-2.5 py-2 border border-gray-300 shadow-sm text-xs font-medium rounded text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-600  disabled:cursor-not-allowed max-w-fit">

                                <div wire:loading wire:target="switchTheme">
                                    <svg role="status"
                                        class="w-4 h-4 ltr:mr-3 rtl:ml-3 block text-gray-700 animate-spin"
                                        viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                            fill="#E5E7EB" />
                                        <path
                                            d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                            fill="currentColor" />
                                    </svg>
                                </div>

                                <div wire:loading.remove wire:target="switchTheme">
                                    <svg class="w-4 h-4 ltr:mr-3 rtl:ml-3" stroke="currentColor" fill="currentColor"
                                        stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path fill="none" d="M0 0h24v24H0z"></path>
                                            <path
                                                d="M9.822 2.238a9 9 0 0 0 11.94 11.94C20.768 18.654 16.775 22 12 22 6.477 22 2 17.523 2 12c0-4.775 3.346-8.768 7.822-9.762zm8.342.053L19 2.5v1l-.836.209a2 2 0 0 0-1.455 1.455L16.5 6h-1l-.209-.836a2 2 0 0 0-1.455-1.455L13 3.5v-1l.836-.209A2 2 0 0 0 15.29.836L15.5 0h1l.209.836a2 2 0 0 0 1.455 1.455zm5 5L24 7.5v1l-.836.209a2 2 0 0 0-1.455 1.455L21.5 11h-1l-.209-.836a2 2 0 0 0-1.455-1.455L18 8.5v-1l.836-.209a2 2 0 0 0 1.455-1.455L20.5 5h1l.209.836a2 2 0 0 0 1.455 1.455z">
                                            </path>
                                        </g>
                                    </svg>
                                </div>

                                <span
                                    class="text-xs font-semibold text-gray-500 whitespace-nowrap">@lang('messages.t_dark_mode')</span>

                            </button>
                        @elseif (settings('appearance')->is_theme_switcher && current_theme() === 'dark')
                            <button wire:click="switchTheme" wire:loading.attr="disabled"
                                class="inline-flex items-center px-2.5 py-2 border border-gray-300 shadow-sm text-xs font-medium rounded text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-600  disabled:cursor-not-allowed dark:bg-zinc-600 dark:text-gray-300 dark:border-zinc-600 dark:focus:ring-offset-zinc-600 dark:hover:bg-zinc-800 max-w-fit">

                                <div wire:loading wire:target="switchTheme">
                                    <svg role="status"
                                        class="w-4 h-4 ltr:mr-3 rtl:ml-3 block text-gray-700 animate-spin"
                                        viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                            fill="#E5E7EB" />
                                        <path
                                            d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                            fill="currentColor" />
                                    </svg>
                                </div>

                                <div wire:loading.remove wire:target="switchTheme">
                                    <svg class="w-4 h-4 ltr:mr-3 rtl:ml-3" stroke="currentColor" fill="currentColor"
                                        stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path fill="none" d="M0 0h24v24H0z"></path>
                                            <path
                                                d="M12 18a6 6 0 1 1 0-12 6 6 0 0 1 0 12zM11 1h2v3h-2V1zm0 19h2v3h-2v-3zM3.515 4.929l1.414-1.414L7.05 5.636 5.636 7.05 3.515 4.93zM16.95 18.364l1.414-1.414 2.121 2.121-1.414 1.414-2.121-2.121zm2.121-14.85l1.414 1.415-2.121 2.121-1.414-1.414 2.121-2.121zM5.636 16.95l1.414 1.414-2.121 2.121-1.414-1.414 2.121-2.121zM23 11v2h-3v-2h3zM4 11v2H1v-2h3z">
                                            </path>
                                        </g>
                                    </svg>
                                </div>

                                <span
                                    class="text-xs font-semibold text-gray-300 whitespace-nowrap">@lang('messages.t_light_mode')</span>

                            </button>
                        @endif

                    </div>
                @endif --}}

            </div>

        </div>

        <div
            class="grid md:flex justify-center md:justify-between items-center border-t-2 border-gray-50 dark:border-zinc-700 pt-4">

            {{-- Logo --}}
            <div class="flex items-center justify-center md:justify-items-start mb-4 md:mb-0">

                {{-- Logo --}}
                <div>
                    <a href="{{ url('/') }}" class="h-full">
                        <img src="{{ placeholder_img() }}" data-src="{{ src(settings('footer')->logo) }}"
                            alt="{{ settings('general')->title }}" class="lazy py-2.5 max-h-20 w-auto"
                            height="{{ settings('appearance')->sizes['header_desktop_logo_height'] }}"
                            width="150">
                    </a>
                </div>

            </div>

            {{-- Social media --}}
            <div>
                <div class="flex items-center space-x-2 rtl:space-x-reverse">

                    {{-- Facebook --}}
                    @if (settings('footer')->social_facebook)
                        <a href="{{ settings('footer')->social_facebook }}" target="_blank"
                            data-tooltip-target="tooltip-follow-us-facebook"
                            class="w-10 h-10 flex items-center justify-center dark:bg-zinc-600 rounded-md group rtl:ml-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                viewBox="0 0 30 30" fill="none">
                                <path
                                    d="M30 15.0899C29.9995 12.2058 29.1776 9.38214 27.6318 6.95333C26.0859 4.52452 23.8808 2.59224 21.2774 1.38523C18.6741 0.178225 15.7815 -0.252964 12.9422 0.142714C10.1028 0.538391 7.4356 1.74436 5.25626 3.61787C3.07693 5.49137 1.47674 7.95394 0.645134 10.7141C-0.186472 13.4742 -0.214671 16.4163 0.563875 19.192C1.34242 21.9677 2.89511 24.4609 5.03813 26.3763C7.18115 28.2918 9.82475 29.5493 12.656 30V19.4529H8.84534V15.0899H12.656V11.7646C12.656 7.98238 14.8925 5.89304 18.3212 5.89304C19.4451 5.90883 20.5663 6.00718 21.6759 6.18732V9.89688H19.7835C19.4613 9.85391 19.1336 9.88441 18.8247 9.98612C18.5157 10.0878 18.2335 10.2581 17.9988 10.4844C17.7642 10.7108 17.5831 10.9873 17.469 11.2935C17.3549 11.5998 17.3107 11.9279 17.3397 12.2537V15.0899H21.4996L20.8347 19.4529H17.344V30C20.8721 29.4373 24.085 27.6266 26.4049 24.8935C28.7249 22.1604 29.9996 18.6842 30 15.0899Z"
                                    fill="white" />
                            </svg>
                        </a>
                        <div id="tooltip-follow-us-facebook" role="tooltip"
                            class="inline-block absolute invisible z-10 py-2 px-3 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip dark:bg-gray-700">
                            {{ __('messages.t_follow_us_on_facebook') }}
                        </div>
                    @endif

                    {{-- Instagram --}}
                    @if (settings('footer')->social_instagram)
                        <a href="{{ settings('footer')->social_instagram }}" target="_blank"
                            data-tooltip-target="tooltip-follow-us-instagram"
                            class="w-10 h-10 flex items-center justify-center dark:bg-zinc-600 rounded-md group">
                            <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34"
                                viewBox="0 0 34 34" fill="none">
                                <path
                                    d="M9.50098 2H24.501C25.4859 2 26.4612 2.19399 27.3711 2.5709C28.281 2.94781 29.1078 3.50026 29.8043 4.1967C30.5007 4.89314 31.0532 5.71993 31.4301 6.62987C31.807 7.53982 32.001 8.51509 32.001 9.5V24.5C32.001 25.4849 31.807 26.4602 31.4301 27.3701C31.0532 28.2801 30.5007 29.1069 29.8043 29.8033C29.1078 30.4997 28.281 31.0522 27.3711 31.4291C26.4612 31.806 25.4859 32 24.501 32H9.50098C8.51606 32 7.54079 31.806 6.63085 31.4291C5.72091 31.0522 4.89412 30.4997 4.19768 29.8033C3.50124 29.1069 2.94879 28.2801 2.57188 27.3701C2.19497 26.4602 2.00098 25.4849 2.00098 24.5V9.5C2.00098 7.51088 2.79115 5.60322 4.19768 4.1967C5.6042 2.79018 7.51185 2 9.50098 2Z"
                                    stroke="white" stroke-width="3" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M23.001 16.0555C23.1861 17.3038 22.9729 18.5788 22.3917 19.699C21.8104 20.8192 20.8907 21.7276 19.7635 22.295C18.6362 22.8624 17.3587 23.0598 16.1127 22.8594C14.8667 22.6589 13.7157 22.0706 12.8233 21.1782C11.9309 20.2858 11.3426 19.1348 11.1421 17.8888C10.9416 16.6428 11.1391 15.3653 11.7065 14.238C12.2739 13.1107 13.1823 12.1911 14.3025 11.6098C15.4227 11.0286 16.6977 10.8153 17.946 11.0005C19.2194 11.1893 20.3983 11.7826 21.3086 12.6929C22.2188 13.6032 22.8122 14.7821 23.001 16.0555Z"
                                    stroke="white" stroke-width="3" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                        <div id="tooltip-follow-us-instagram" role="tooltip"
                            class="inline-block absolute invisible z-10 py-2 px-3 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip dark:bg-gray-700">
                            {{ __('messages.t_follow_us_on_instagram') }}
                        </div>
                    @endif

                    {{-- Twitter --}}
                    @if (settings('footer')->social_twitter)
                        <a href="{{ settings('footer')->social_twitter }}" target="_blank"
                            data-tooltip-target="tooltip-follow-us-twitter"
                            class="w-10 h-10 flex items-center justify-center dark:bg-zinc-600 rounded-md group">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                viewBox="0 0 30 30" fill="none">
                                <path
                                    d="M26.9176 7.47707C26.9368 7.80541 26.9368 8.13374 26.9368 8.46105C26.9368 18.4692 20.7501 29.9999 9.44348 29.9999C6.09581 30.0108 2.81686 28.8308 0.000976562 26.6016C0.494074 26.6684 0.989921 26.6996 1.48598 26.695C4.25329 26.7037 6.94232 25.5644 9.11931 23.4609C7.83607 23.4325 6.5921 22.9112 5.5612 21.9699C4.5303 21.0286 3.76398 19.7143 3.36931 18.2106C3.75332 18.2854 4.14136 18.3245 4.53014 18.3276C5.07623 18.3258 5.61996 18.2392 6.14848 18.07C4.75624 17.7233 3.50443 16.7938 2.60572 15.4394C1.70702 14.085 1.21684 12.3893 1.21848 10.6404V10.547C2.07119 11.1343 3.02467 11.4648 4.00098 11.5115C2.69466 10.4402 1.7699 8.7952 1.41567 6.91254C1.06144 5.02988 1.30449 3.05173 2.09514 1.38233C3.63947 3.72284 5.5661 5.63756 7.75008 7.00233C9.93406 8.3671 12.3266 9.15143 14.7726 9.30447C14.6739 8.73438 14.6228 8.15334 14.6201 7.57044C14.6213 6.05202 14.9929 4.56903 15.6868 3.31378C16.3807 2.05853 17.3649 1.08892 18.5118 0.530678C19.6586 -0.0275651 20.9152 -0.14869 22.1187 0.18301C23.3221 0.514709 24.4169 1.28393 25.261 2.39093C26.638 2.06439 27.9585 1.44571 29.1635 0.562511C28.7049 2.31202 27.7437 3.79542 26.4601 4.73444C27.6813 4.56339 28.8747 4.16844 30.001 3.56269C29.1593 5.07172 28.1169 6.3951 26.9176 7.47707Z"
                                    fill="white" />
                            </svg>
                        </a>
                        <div id="tooltip-follow-us-twitter" role="tooltip"
                            class="inline-block absolute invisible z-10 py-2 px-3 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip dark:bg-gray-700">
                            {{ __('messages.t_follow_us_on_twitter') }}
                        </div>
                    @endif

                    {{-- Pinterest --}}
                    @if (settings('footer')->social_pinterest)
                        <a href="{{ settings('footer')->social_pinterest }}" target="_blank"
                            data-tooltip-target="tooltip-follow-us-pinterest"
                            class="w-10 h-10 flex items-center justify-center dark:bg-zinc-600 rounded-md group">
                            <svg class="h-6 w-6 fill-gray-500 dark:fill-gray-300 group-hover:fill-[#E60023]"
                                xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 30 30">
                                <path
                                    d="M15,3C8.373,3,3,8.373,3,15c0,5.084,3.163,9.426,7.627,11.174c-0.105-0.949-0.2-2.406,0.042-3.442 c0.218-0.936,1.407-5.965,1.407-5.965s-0.359-0.719-0.359-1.781c0-1.669,0.967-2.914,2.171-2.914c1.024,0,1.518,0.769,1.518,1.69 c0,1.03-0.655,2.569-0.994,3.995c-0.283,1.195,0.599,2.169,1.777,2.169c2.133,0,3.772-2.249,3.772-5.495 c0-2.873-2.064-4.882-5.012-4.882c-3.414,0-5.418,2.561-5.418,5.208c0,1.031,0.397,2.137,0.893,2.739 c0.098,0.119,0.112,0.223,0.083,0.344c-0.091,0.379-0.293,1.194-0.333,1.361c-0.052,0.22-0.174,0.266-0.401,0.16 c-1.499-0.698-2.436-2.889-2.436-4.649c0-3.785,2.75-7.262,7.929-7.262c4.163,0,7.398,2.966,7.398,6.931 c0,4.136-2.608,7.464-6.227,7.464c-1.216,0-2.359-0.632-2.75-1.378c0,0-0.602,2.291-0.748,2.853 c-0.271,1.042-1.002,2.349-1.492,3.146C12.57,26.812,13.763,27,15,27c6.627,0,12-5.373,12-12S21.627,3,15,3z">
                                </path>
                            </svg>
                        </a>
                        <div id="tooltip-follow-us-pinterest" role="tooltip"
                            class="inline-block absolute invisible z-10 py-2 px-3 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip dark:bg-gray-700">
                            {{ __('messages.t_follow_us_on_pinterest') }}
                        </div>
                    @endif

                    {{-- Linkedin --}}
                    @if (settings('footer')->social_linkedin)
                        <a href="{{ settings('footer')->social_linkedin }}" target="_blank"
                            data-tooltip-target="tooltip-follow-us-linkedin"
                            class="w-10 h-10 flex items-center justify-center dark:bg-zinc-600 rounded-md group">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                viewBox="0 0 30 30" fill="none">
                                <g clip-path="url(#clip0_63_173)">
                                    <rect width="30" height="30" rx="5" fill="#00966B" />
                                    <path
                                        d="M22.9688 0H7.03125C3.148 0 0 3.148 0 7.03125V22.9688C0 26.852 3.148 30 7.03125 30H22.9688C26.852 30 30 26.852 30 22.9688V7.03125C30 3.148 26.852 0 22.9688 0Z"
                                        fill="#00966B" />
                                    <path
                                        d="M22.9688 0H7.03125C3.148 0 0 3.148 0 7.03125V22.9688C0 26.852 3.148 30 7.03125 30H22.9688C26.852 30 30 26.852 30 22.9688V7.03125C30 3.148 26.852 0 22.9688 0Z"
                                        fill="#00966B" />
                                    <path
                                        d="M21.6463 25.51H25.0764C25.2007 25.51 25.3199 25.4606 25.4078 25.3727C25.4957 25.2848 25.5451 25.1656 25.5451 25.0413L25.5469 17.7942C25.5469 14.0064 24.7307 11.0948 20.3041 11.0948C18.6214 11.0323 17.0346 11.8997 16.1783 13.3481C16.1741 13.3552 16.1678 13.3606 16.1602 13.3637C16.1526 13.3668 16.1442 13.3673 16.1363 13.3651C16.1284 13.363 16.1214 13.3583 16.1164 13.3519C16.1114 13.3454 16.1087 13.3374 16.1086 13.3293V11.9133C16.1086 11.789 16.0592 11.6697 15.9713 11.5818C15.8834 11.4939 15.7642 11.4445 15.6398 11.4445H12.3847C12.2604 11.4445 12.1412 11.4939 12.0533 11.5818C11.9654 11.6697 11.916 11.789 11.916 11.9133V25.0406C11.916 25.1649 11.9654 25.2842 12.0533 25.3721C12.1412 25.46 12.2604 25.5094 12.3847 25.5094H15.8146C15.9389 25.5094 16.0581 25.46 16.146 25.3721C16.2339 25.2842 16.2833 25.1649 16.2833 25.0406V18.5516C16.2833 16.7168 16.6314 14.9399 18.9061 14.9399C21.1485 14.9399 21.1775 17.0394 21.1775 18.6704V25.0412C21.1775 25.1655 21.2269 25.2848 21.3148 25.3727C21.4027 25.4606 21.522 25.51 21.6463 25.51ZM4.45312 6.98754C4.45312 8.37797 5.5977 9.52195 6.98813 9.52195C8.3782 9.52184 9.52207 8.37715 9.52207 6.98707C9.52184 5.59699 8.37785 4.45312 6.98766 4.45312C5.59711 4.45312 4.45312 5.59723 4.45312 6.98754ZM5.26863 25.51H8.70305C8.82737 25.51 8.9466 25.4606 9.0345 25.3727C9.12241 25.2848 9.1718 25.1655 9.1718 25.0412V11.9133C9.1718 11.789 9.12241 11.6697 9.0345 11.5818C8.9466 11.4939 8.82737 11.4445 8.70305 11.4445H5.26863C5.14431 11.4445 5.02508 11.4939 4.93718 11.5818C4.84927 11.6697 4.79988 11.789 4.79988 11.9133V25.0412C4.79988 25.1655 4.84927 25.2848 4.93718 25.3727C5.02508 25.4606 5.14431 25.51 5.26863 25.51Z"
                                        fill="white" />
                                </g>
                                <rect x="1" y="1" width="28" height="28" rx="4" stroke="white"
                                    stroke-width="2" />
                                <defs>
                                    <clipPath id="clip0_63_173">
                                        <rect width="30" height="30" rx="5" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                        <div id="tooltip-follow-us-linkedin" role="tooltip"
                            class="inline-block absolute invisible z-10 py-2 px-3 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip dark:bg-gray-700">
                            {{ __('messages.t_follow_us_on_linkedin') }}
                        </div>
                    @endif

                    {{-- Github --}}
                    @if (settings('footer')->social_github)
                        <a href="{{ settings('footer')->social_github }}" target="_blank"
                            data-tooltip-target="tooltip-follow-us-github"
                            class="w-10 h-10 flex items-center justify-center dark:bg-zinc-600 rounded-md group">
                            <svg class="h-6 w-6 fill-gray-500 dark:fill-gray-300 group-hover:fill-gray-800"
                                xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 30 30">
                                <path
                                    d="M15,3C8.373,3,3,8.373,3,15c0,5.623,3.872,10.328,9.092,11.63C12.036,26.468,12,26.28,12,26.047v-2.051 c-0.487,0-1.303,0-1.508,0c-0.821,0-1.551-0.353-1.905-1.009c-0.393-0.729-0.461-1.844-1.435-2.526 c-0.289-0.227-0.069-0.486,0.264-0.451c0.615,0.174,1.125,0.596,1.605,1.222c0.478,0.627,0.703,0.769,1.596,0.769 c0.433,0,1.081-0.025,1.691-0.121c0.328-0.833,0.895-1.6,1.588-1.962c-3.996-0.411-5.903-2.399-5.903-5.098 c0-1.162,0.495-2.286,1.336-3.233C9.053,10.647,8.706,8.73,9.435,8c1.798,0,2.885,1.166,3.146,1.481C13.477,9.174,14.461,9,15.495,9 c1.036,0,2.024,0.174,2.922,0.483C18.675,9.17,19.763,8,21.565,8c0.732,0.731,0.381,2.656,0.102,3.594 c0.836,0.945,1.328,2.066,1.328,3.226c0,2.697-1.904,4.684-5.894,5.097C18.199,20.49,19,22.1,19,23.313v2.734 c0,0.104-0.023,0.179-0.035,0.268C23.641,24.676,27,20.236,27,15C27,8.373,21.627,3,15,3z">
                                </path>
                            </svg>
                        </a>
                        <div id="tooltip-follow-us-github" role="tooltip"
                            class="inline-block absolute invisible z-10 py-2 px-3 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip dark:bg-gray-700">
                            {{ __('messages.t_follow_us_on_github') }}
                        </div>
                    @endif

                    {{-- Youtube --}}
                    @if (settings('footer')->social_youtube)
                        <a href="{{ settings('footer')->social_youtube }}" target="_blank"
                            data-tooltip-target="tooltip-follow-us-youtube"
                            class="w-10 h-10 flex items-center justify-center dark:bg-zinc-600 rounded-md group">
                            <svg class="h-6 w-6 fill-gray-500 dark:fill-gray-300 group-hover:fill-[#FF0000]"
                                xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 30 30">
                                <path
                                    d="M 15 4 C 10.814 4 5.3808594 5.0488281 5.3808594 5.0488281 L 5.3671875 5.0644531 C 3.4606632 5.3693645 2 7.0076245 2 9 L 2 15 L 2 15.001953 L 2 21 L 2 21.001953 A 4 4 0 0 0 5.3769531 24.945312 L 5.3808594 24.951172 C 5.3808594 24.951172 10.814 26.001953 15 26.001953 C 19.186 26.001953 24.619141 24.951172 24.619141 24.951172 L 24.621094 24.949219 A 4 4 0 0 0 28 21.001953 L 28 21 L 28 15.001953 L 28 15 L 28 9 A 4 4 0 0 0 24.623047 5.0546875 L 24.619141 5.0488281 C 24.619141 5.0488281 19.186 4 15 4 z M 12 10.398438 L 20 15 L 12 19.601562 L 12 10.398438 z">
                                </path>
                            </svg>
                        </a>
                        <div id="tooltip-follow-us-youtube" role="tooltip"
                            class="inline-block absolute invisible z-10 py-2 px-3 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip dark:bg-gray-700">
                            {{ __('messages.t_follow_us_on_youtube') }}
                        </div>
                    @endif

                </div>
            </div>

        </div>

        {{-- Copyrights & Quick links --}}
        {{-- <div class="text-center mt-10"> --}}

            {{-- Copyrights --}}
            {{-- <div class="text-gray-400 dark:text-gray-200 font-normal text-sm mb-2">
                {!! settings('footer')->copyrights !!}
            </div> --}}

            {{-- Quick links --}}
            {{-- <div class="flex space-x-4 justify-center rtl:space-x-reverse"> --}}

                {{-- Contact --}}
                {{-- <a href="{{ url('help/contact') }}"
                    class="text-xs font-medium uppercase text-gray-600 dark:text-gray-400 dark:hover:text-gray-100 hover:underline">{{ __('messages.t_contact_us') }}</a> --}}

                {{-- Privacy policy --}}
                {{-- @if (settings('footer')->privacy)
                    <a href="{{ url('page', settings('footer')->privacy->slug) }}"
                        class="text-xs font-medium uppercase text-gray-600 dark:text-gray-400 dark:hover:text-gray-100 hover:underline">{{ __('messages.t_privacy_policy') }}</a>
                @endif --}}

                {{-- Terms --}}
                {{-- @if (settings('footer')->terms)
                    <a href="{{ url('page', settings('footer')->terms->slug) }}"
                        class="text-xs font-medium uppercase text-gray-600 dark:text-gray-400 dark:hover:text-gray-100 hover:underline">{{ __('messages.t_terms_of_service') }}</a>
                @endif --}}

                {{-- Blog --}}
                {{-- @if (settings('blog')->enable_blog)
                    <a href="{{ url('blog') }}"
                        class="text-xs font-medium uppercase text-gray-600 dark:text-gray-400 dark:hover:text-gray-100 hover:underline">{{ __('messages.t_blog') }}</a>
                @endif --}}

            {{-- </div>

        </div> --}}

    </div>

</footer>
