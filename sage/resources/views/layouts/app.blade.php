
@include('sections.header')

<div class="flex flex-auto overflow-hidden bg-white ">
  <div class="isolate relative flex w-full flex-col">
    <x-grid-bg></x-grid-bg>
    <main id="main" class="w-full flex-auto z-1 py-24 mt-24 sm:mt-32 lg:mt-40">
      @yield('content')
    </main>
    @hasSection('sidebar')
      <aside class="sidebar">
        @yield('sidebar')
      </aside>
    @endif

  </div>
</div>

@include('sections.footer')

