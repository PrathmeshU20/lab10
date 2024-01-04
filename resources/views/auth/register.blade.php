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
    <h1 style="text-align: center; font-size:28px; font-weight:bold; padding-top: 2%; ">Register</h1>
    <form method="POST" action="{{ route('register') }}" style="padding: 0px 50px 20px 50px;">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" style="color: #1e1e1e; font-weight:bold; font-size:20px;" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" style="background-color: #ececec; color: #1e1e1e;"/>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" style="color: #1e1e1e; font-weight:bold; font-size:20px;" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" style="background-color: #ececec; color: #1e1e1e;" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" style="color: #1e1e1e; font-weight:bold; font-size:20px;"/>

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" style="background-color: #ececec; color: #1e1e1e;"/>

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" style="color: #1e1e1e; font-weight:bold; font-size:20px;"/>

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" style="background-color: #ececec; color: #1e1e1e;" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="mt-4" >
            <div style="display:flex; justify-content:center; align-items: center;">
            <x-primary-button class="ms-4" style="display:flex; justify-content:center; align-items: center;     margin-left: 0px;">
                {{ __('Register') }}
            </x-primary-button>
        </div>
            <br>
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}" style="color: #1e1e1e; display:flex; justify-content:center; align-items: center; text-align:center;">
                {{ __('Already registered?') }}
            </a>


        </div>
    </form>
</x-guest-layout>
