<x-app-layout>
    {{--<script src="https://cdn.tailwindcss.com"></script>--}}
    <style>
        .min-h-screen { background-color: #B3C0D7;}
        .bg-main { background-color: #ffffffc4; }
        </style>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Panels') }}
        </h2>
    </x-slot>

    <div class="py-12" style="background: url('/images/just_background.svg') no-repeat center center fixed; background-size: cover;height: 90vh;background-position-y: unset;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-main overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("THEME FIELDS") }}
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" style="padding: 22px;">
            <ul class="text-md p-9 bg-main text-gray-900" style="list-style: disc;margin: 10px;border-radius: 6px;">
                <li><strong>{{ __("POLICIES, STRATEGIES, LEADERSHIP") }}</strong></li>
                <li><strong>{{ __("RESEARCH, ANALYSES, PREDICTIONS") }}</strong></li>
                <li><strong>{{ __("INTEROPERABILITY") }}</strong></li>
            </ul>
        </div>
    </div>

</x-app-layout>
