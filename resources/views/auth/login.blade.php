<link rel="stylesheet" href="css/login.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form class="dashboard_form"  method="POST" action="{{ route('login') }}">
        @csrf
        <div class="login-form-header">
            <span class="login_form_head_img"><img src="assets/img/short-brandclever-logo.png" alt="logo"> Brandclever</span>
            <h4 >Welcome to Brandclever!<span class="hand_icon"> 👋 </span></h4>
            <p>Please login to your account and start the adventure</p>
        </div>
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
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>

        <div class="login-form-footer">
            <p>New on our platform? <a href="{{ route('register') }}">Create an account</a></p>
        </div>
        <div class="footer_line_icon">
            <div class="or_line_main">
                <div class="line_one"></div>
                <div class="line_text">or</div>
                <div class="line_one"></div>
            </div>
        </div>
        <div class="footer_icons">
            <a href="#"><i class="fa fa-github" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-google" aria-hidden="true"></i></a>
        </div>
    </form>
</x-guest-layout>
