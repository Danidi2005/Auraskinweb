<x-guest-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-50">
        <div>
            <!-- Logo removed/hidden as per previous edit, keeping structure -->
            <h2 class="text-3xl font-bold text-center mb-6 text-black">Welcome to AuraSkin</h2>
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-8 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <h3 class="text-xl font-semibold text-center mb-6 text-gray-800">Login</h3>
            
            <x-validation-errors class="mb-4" />

            @session('status')
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ $value }}
                </div>
            @endsession

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    <x-input id="email" class="block mt-1 w-full border-gray-300 focus:border-orange-500 focus:ring-orange-500 rounded-md shadow-sm" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Email" />
                </div>

                <div class="mt-4">
                    <x-input id="password" class="block mt-1 w-full border-gray-300 focus:border-orange-500 focus:ring-orange-500 rounded-md shadow-sm" type="password" name="password" required autocomplete="current-password" placeholder="Password" />
                </div>

                <div class="flex justify-between items-center mt-2">
                     
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500" href="{{ route('password.request') }}">
                            {{ __('Forgot Password?') }}
                        </a>
                    @endif
                </div>

                <div class="mt-6">
                    <x-button class="w-full justify-center !bg-[#333333] hover:!bg-black focus:!bg-black active:!bg-black focus:!ring-orange-500">
                        {{ __('Login') }}
                    </x-button>
                </div>

                <div class="mt-4 text-center">
                    <a href="{{ route('register') }}" class="text-sm text-gray-600 hover:text-orange-500 underline">
                        Create Account
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
