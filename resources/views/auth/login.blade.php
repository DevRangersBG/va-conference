<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login', app()->getLocale()) }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="border-yellow-600 focus:border-lime-800 focus:ring-lime-800 block mt-1
            w-full " type="email" name="email" :value="old
            ('email')"
                          required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="border-yellow-600 focus:border-lime-800 focus:ring-lime-800 block mt-1
             w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-yellow-600 text-lime-800 shadow-sm
                focus:ring-lime-800" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            {{-- TODO --}}
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none
                focus:ring-2 focus:ring-offset-2 focus:ring-lime-800" href="{{ route('password.request', app()
                ->getLocale()) }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent
            rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700
             active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-lime-800 focus:ring-offset-2 transition
             ease-in-out duration-150 ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
