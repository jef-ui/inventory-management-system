<x-guest-layout>
    <div class="min-h-screen bg-gray-100 flex items-center justify-center px-4 py-12">
        <div class="w-full max-w-md bg-white shadow-lg rounded-lg p-8">
            
            <!-- Logo Inside Box -->
            <div class="flex justify-center mb-4">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-24 h-24 object-contain">
            </div>

            <div class="text-center mb-6">
                <h2 class="text-2xl font-bold text-blue-800">Login to Your Account</h2>
                <p class="text-sm text-orange-500">OCD MIMAROPA Inventory Management System (IMS)</p>
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" class="text-blue-800" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" class="text-blue-800" />
                    <x-text-input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-orange-500 shadow-sm focus:ring-orange-400" name="remember">
                        <span class="ms-2 text-sm text-gray-700">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-between mt-6">
                    @if (Route::has('password.request'))
                        <a class="text-sm text-gray-600 hover:text-blue-700 underline" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <x-primary-button class="bg-orange-500 hover:bg-orange-600">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
