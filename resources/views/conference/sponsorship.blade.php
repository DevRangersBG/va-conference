<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Sponsorship') }}
        </h2>

    </x-slot>
    <div class="bg-contain bg-left-top bg-[url('https://img.hotimg.com/MA1.jpeg')]">

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="opacity py-6 max-w-md mx-auto mt-10 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-2 text-gray-900">

                        <div class='flex flex-col items-center '>
                        <button type="button" class="min-w-60 bg-yellow-600 hover:bg-green-800 text-white font-bold py-4 px-5 rounded my-8">
                        <a href={{ __('Platinium-link') }} target="_blank">{{ __('Platinium Package') }}</a>
                        </button>

                        <button type="button" class="min-w-60 bg-yellow-600 hover:bg-green-800 text-white font-bold py-4 px-5 rounded my-8">
                        <a href={{ __('Gold-link') }} target="_blank">{{ __('Gold Package') }}</a>
                        </button>

                        <button type="button" class="min-w-60 bg-yellow-600 hover:bg-green-800 text-white font-bold py-4 px-5 rounded my-8">
                        <a href={{ __('Silver-link') }} target="_blank" >{{ __('Silver Package') }}</a>
                        </button>

                        <button type="button" class="min-w-60 bg-yellow-600 hover:bg-green-800 text-white font-bold py-4 px-5 rounded my-8">
                        <a href={{ __('Bronze-link') }} target="_blank">{{ __('Bronze Package') }}</a>
                        </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>


