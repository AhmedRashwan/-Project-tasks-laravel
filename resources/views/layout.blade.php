<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
           @yield('pageTitle')
        </div>
        <div class="container-fluid">
            <div class="links">
                <a href="{{route('contact')}}">contact Us</a>
                <a href="{{route('aboutUs')}}">about us</a>
                <a href="{{route('home')}}">Home</a>
                <a href="https://blog.laravel.com">Blog</a>
                <a href="https://nova.laravel.com">Nova</a>
                <a href="https://forge.laravel.com">Forge</a>
                <a href="https://github.com/laravel/laravel">GitHub</a>
            </div>
        </div>

    </div>
</div>

@yield('footer')
</body>
</html>
