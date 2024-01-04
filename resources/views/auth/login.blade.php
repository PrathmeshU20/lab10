<x-guest-layout>
    <div class="text-white p-8 transition-transform transform" style="background-color: #1e1e1e; height: 134px;">
        <div class="container mx-auto flex items-center justify-between">
            <div>
                 <img src="./images/logo.png" alt="" style="max-height: 80px; max-width: 250px; border-radius:60%; height:70px; width:70px;">
            </div>
            <div style="max-width: 600px; margin: 0 auto; transform: translateY(-15px) translateX(-42px) ;">
                <h1 style="font-weight: 800; color: #ececec; font-size: 2.5rem;">Movie Bloggers</h1>
                <p style="color: #ececec; font-size: 1.2rem; white-space: nowrap; text-align: center;">Exploring the Reel World</p>
            </div>
        </div>
    </div>
    <h1 style="text-align: center; font-size:28px; font-weight:bold; padding-top: 2%; ">Login</h1>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')"  />

    <form method="POST" action="{{ route('login') }}" style="padding: 0px 50px 20px 50px;">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" style="color: #1e1e1e; font-weight:bold; font-size:20px;"/>
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" style="background-color: #ececec; color: #1e1e1e;"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" style="color: #1e1e1e; font-weight:bold; font-size:20px;"/>

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" style="background-color: #ececec; color: #1e1e1e;"/>

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4" >
            <label for="remember_me" class="inline-flex items-center" style="color: #1e1e1e; font-weight:bold; font-size:20px;">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-white-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember" >
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400" style="color: #1e1e1e;  font-size:15px;" >{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class=" mt-4">
            <div class="flex items-center justify-center" style="display:flex; justify-content:center; align-items: center; margin-left: 0px; margin-bottom:15px; ">
                <x-primary-button class="ms-3 ">
                {{ __('Log in') }}
                </x-primary-button>
            </div>

            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800 flex items-center justify-center" href="{{ route('password.request') }}" style="color: #1e1e1e;">
                    {{ __('Forgot your password?') }}
                </a>
            @endif


        </div>
    </form>
</x-guest-layout>
