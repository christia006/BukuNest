<x-guest-layout>
    <!-- Clock at top-right -->
    <div id="clock" style="
        position: fixed;
        top: 10px;
        right: 20px;
        font-size: 14px;
        font-weight: bold;
        color: #4b5563; /* text-gray-600 */
        z-index: 999;
    ">
        Loading time...
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    @if (session('error'))
        <div class="mb-2 text-red-600 font-semibold">
            {{ session('error') }}
        </div>
    @endif

   <form method="POST" action="{{ route('custom.login') }}">

        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full"
                          type="password"
                          name="password"
                          required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-between mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>

    <!-- Register link -->
    <div class="mt-4 text-center">
        <span class="text-sm text-gray-600">
            {{ __("Don't have an account?") }}
        </span>
        <a href="{{ route('register') }}" class="text-sm text-indigo-600 hover:underline">
            {{ __('Register') }}
        </a>
    </div>

    <!-- JS for real-time clock -->
    <script>
        function updateClock() {
            const now = new Date();
            const time = now.toLocaleTimeString();
            document.getElementById('clock').textContent = time;
        }
        setInterval(updateClock, 1000);
        updateClock();
    </script>
</x-guest-layout>
