<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Accommodation') }}
        </h2>
    </x-slot>
    <div class="bg-contain bg-left-top bg-[url('https://img.hotimg.com/MA1.jpeg')]">

        <div class="py-12">
            <div class="max-w-5xl mx-auto sm:px-10 lg:px-22">
                <div class="opacity bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-10 text-gray-900">
                        <p>{{ __('We recommend the following hotels for reservations within walking distance of "G. S. Rakovski" Military Academy:') }}</p>
                    </div>
                </div>
            </div>

            <div class="max-w-5xl mx-auto sm:px-10 lg:px-22"></div>
            {{--<div class="max-w-7xl mx-auto sm:px-10 lg:px-22">--}}
            <div class="max-w-5xl mx-auto py-10 sm:px-10 lg:px-22">
                <div class="opacity bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-10 text-gray-900">
                        {{--<p>{{ __('We recommend the following hotels for reservations within walking distance of "G. S. Rakovski" Military Academy:') }}</p>--}}

                        <ul class="list-disc my-10 text-justify">
                            <li>{{ __('Hotel Kapri Sofia/Perfect location - ') }}
                                <a href="https://www.kaprisofia.eu/" class="font-medium text-yellow-600 dark:text-blue-500 hover:text-green-800 hover:underline" target="_blank">{{ __('Hotel Kapri Sofia') }}</a>
                            </li>
                            <li>{{ __('Crystal Palace Boutique Hotel - ') }}
                                <a href="https://www.crystalpalace-sofia.com/" class="font-medium text-yellow-600 dark:text-blue-500 hover:text-green-800 hover:underline" target="_blank">{{ __('Crystal Palace Boutique Hotel') }}</a>
                            </li>
                            <li>{{ __('Oborishte 63 Boutique Hotel - ') }}
                                <a href="https://oborishte63.com/" class="font-medium text-yellow-600 dark:text-blue-500 hover:text-green-800 hover:underline" target="_blank">{{ __('Oborishte 63 Boutique Hotel') }}</a>
                            </li>
                            <li>{{ __('Hyatt Regency Sofia - ') }}
                                <a href="https://www.hyatt.com/en-US/hotel/bulgaria/hyatt-regency-sofia/sofrs" class="font-medium text-yellow-600 dark:text-blue-500 hover:text-green-800 hover:underline" target="_blank">{{ __('Hyatt Regency Sofia') }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

