<a class="sr-only focus:not-sr-only" href="#main">
  {{ __('Skip to content') }}
</a>

<section class="w-full px-6 pb-12 antialiased bg-white">
  <div class="mx-auto max-w-7xl">

    @include('sections.header')

      <main id="main" class="container max-w-lg px-4 mx-auto md:max-w-none">
        @yield('content')
      </main>
      @hasSection('sidebar')
        <aside class="sidebar bg-gray-50">
          @yield('sidebar')
        </aside>
      @endif
    @include('sections.footer')
  </div>
</section>

