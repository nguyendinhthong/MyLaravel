@include('partials._head')

<body>
  <!-- Top -->
  @include('partials._top')   
  <!-- ### End Top ### -->

  <!-- Center -->
  <div class="container">
     @include('partials._messages');
     @yield('content')
  </div>
  <!-- ### End Center ### -->

  <!-- Bottom -->
  @include('partials._bottom')   
  <!-- ### End Bottom ### -->

</body>
