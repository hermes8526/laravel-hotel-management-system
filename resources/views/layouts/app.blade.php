<html lang="{{ app()->getLocale() }}">
@include('layouts.head')
<body>
    <div id="app">
        @include('layouts.nav')
        @yield('content')
    </div>
    @include('layouts.footer')
    @stack('scripts')
</body>
</html>