<x-guest-layout>
    <div class="min-h-screen bg-gray-100 flex items-center justify-center px-4 py-12">

        
        <div class="w-full max-w-md bg-white shadow-lg rounded-lg p-8">
            <div class="flex justify-center mb-4">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-24 h-24 object-contain">
            </div>
            <div class="text-center mb-6">
                <h2 class="text-2xl font-bold text-blue-800">Register an Account</h2>
                <p class="text-sm text-orange-500">OCD MIMAROPA Inventory Management System (IMS)</p>
            </div>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                

                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Name')" class="text-blue-800" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" class="text-blue-800" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" class="text-blue-800" />
                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-blue-800" />
                    <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="flex items-center justify-between mt-6">
                    <a class="text-sm text-gray-600 hover:text-blue-700 underline" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-primary-button class="bg-orange-500 hover:bg-orange-600">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
