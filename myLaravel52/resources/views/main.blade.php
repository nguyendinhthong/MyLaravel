@include('partials._head')

<body>
    <div class="wrapper">
        @include('partials._leftbanner')
        <div class="wrapper1">
            @include('partials._header')   
            @include('partials._midbanner')   
            <div class="page-container">
                @include('partials._messages')
                @yield('content')
            </div>
            @include('partials._footer')   
        </div>
        @include('partials._rightbanner')
    </div>
</body>
</html>
