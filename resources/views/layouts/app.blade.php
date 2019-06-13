<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('partials._head')
<body>
    <div id="app">
        @include('partials._nav')
        <main class="py-4">
            @yield('stylesheets')
            <div class="container">
                @include('partials._validate')
            </div>
            @yield('content')
        </main>
    </div>
    @yield('javascripts')
</body>
</html>
