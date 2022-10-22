<x-app-layout>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <section class="login py-5 border-top-1">
        <div class="container">
            <div class="row justify-content-center">
            <div class="col-lg-5 col-md-8 align-item-center">
                <div class="border">
                <h3 class="bg-gray p-4">Login Now</h3>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <fieldset class="p-4">
                    <input class="form-control mb-3"  type="email" name="email" :value="old('email')" placeholder="Email" required autofocus>
                    <input class="form-control mb-3" id="password" type="password" name="password" placeholder="Password" required autocomplete="current-password">
                    <div class="loggedin-forgot">
                        <input for="remember_me" type="checkbox" id="keep-me-logged-in" name="remember">
                        <label for="keep-me-logged-in" class="pt-3 pb-2" id="remember_me">{{ __('Remember me') }}</label>
                    </div>
                    <button type="submit" class="btn btn-primary font-weight-bold mt-3">Log in</button>
                    @if (Route::has('password.request'))
                    <a class="mt-3 d-block text-primary" href="{{ route('password.request') }}">Forget Password?</a>
                    @endif
                    <a class="mt-3 d-inline-block text-primary" href="{{ route('register') }}">Register Now</a>

                    </fieldset>
                </form>
                </div>
            </div>
            </div>
        </div>
    </section>
</x-app-layout>


