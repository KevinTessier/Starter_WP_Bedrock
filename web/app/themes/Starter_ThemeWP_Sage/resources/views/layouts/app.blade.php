@include('components.navquickly')

@include('sections.header')

  <main id="main" class="main container min-h-screen" role="main">
    @yield('content')
  </main>

  @hasSection('sidebar')
    <aside class="sidebar">
      @yield('sidebar')
    </aside>
  @endif

@include('sections.footer')
