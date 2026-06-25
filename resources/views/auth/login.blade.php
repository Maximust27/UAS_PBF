<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="flex items-center justify-center mt-4">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-12 h-12 mb-4">
            <b class="text-xl font-semibold mb-4">SINTA User Login</b>
        </div>

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Username')" />
            <x-text-input-login id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input-login id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            placeholder="Password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Forgot Password -->
        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="text-sm text-blue-600 hover:text-blue-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>

        <div class="flex justify-center mt-4">
            <x-primary-button class="flex justify-center mt-4">
                {{ __('Log in') }}
            </x-primary-button>
        </div>

        <div class="flex justify-center items-center gap-1 mt-4">
            <span class="text-sm">
                Don't have an account?
            </span>

            <a class="text-sm text-blue-600 hover:text-blue-900"
               href="{{ route('register') }}">
                Register
            </a>
        </div>

        <div class="flex justify-center items-center gap-1 mt-4">
            <span class="text-sm">
                Back To
            </span>

            <a class="text-sm text-blue-600 hover:text-blue-900"
               href="{{ route('home') }}">
                Home
            </a>
        </div>
    </form>
</x-guest-layout>
