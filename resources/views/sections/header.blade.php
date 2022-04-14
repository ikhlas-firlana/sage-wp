
<nav
  class="relative z-50 h-24 select-none"
  x-data="{ showMenu: false }"
>
  <div
    class="container relative flex flex-wrap items-center justify-between h-24 mx-auto overflow-hidden font-medium border-b border-gray-200 md:overflow-visible lg:justify-center sm:px-4 md:px-2"
  >
    <div class="flex items-center justify-start w-1/4 h-full pr-4">
      <a href="{{ home_url('/') }}" class="inline-block py-4 md:py-0">
                <span class="p-1 text-xl font-black leading-none text-gray-900"
                ><span>{!! $siteName !!}</span
                  ><span class="text-indigo-600">.</span></span
                >
      </a>
    </div>
    <div
      class="top-0 left-0 items-start hidden w-full h-full p-4 text-sm bg-gray-900 bg-opacity-50 md:items-center md:w-3/4 md:absolute lg:text-base md:bg-transparent md:p-0 md:relative md:flex"
      :class="{'flex fixed': showMenu, 'hidden': !showMenu }"
    >
      <div
        class="flex-col w-full h-auto overflow-hidden bg-white rounded-lg md:bg-transparent md:overflow-visible md:rounded-none md:relative md:flex md:flex-row"
      >
        <a
          href="{{ home_url('/') }}"
          class="inline-flex items-center block w-auto h-16 px-6 text-xl font-black leading-none text-gray-900 md:hidden"
        >{!! $siteName !!}<span class="text-indigo-600">.</span></a
        >
        @if (has_nav_menu('primary_navigation'))
          @php
            $mainNavArgs = [
                'theme_location' => 'primary_navigation',
                'menu_class' => '',
                'container' => '',
                'items_wrap' => '<div id="%1$s" class="%2$s flex flex-col items-start justify-center w-full space-x-6 text-center lg:space-x-8 md:w-2/3 md:mt-0 md:flex-row md:items-center" data-drilldown="" data-close-on-click>%3$s</div>',
                'walker' => new \App\Classes\NavMainWalker(),
                ];
          @endphp
          {!! wp_nav_menu($mainNavArgs) !!}
        @endif
        @if (has_nav_menu('action_navigation'))
          @php
            $mainNavActionArgs = [
                'theme_location' => 'action_navigation',
                'menu_class' => '',
                'container' => '',
                'items_wrap' => '<div class="flex flex-col items-start justify-end w-full pt-4 md:items-center md:w-1/3 md:flex-row md:py-0 %2$s">%3$s</div>',
                'walker' => new \App\Classes\NavActionWalker(),
                ];
          @endphp
          {!! wp_nav_menu($mainNavActionArgs) !!}
        @endif
      </div>
    </div>
    <div
      @click="showMenu = !showMenu"
      class="absolute right-0 flex flex-col items-center items-end justify-center w-10 h-10 bg-white rounded-full cursor-pointer md:hidden hover:bg-gray-100"
    >
      <svg
        class="w-6 h-6 text-gray-700"
        x-show="!showMenu"
        fill="none"
        stroke-linecap="round"
        stroke-linejoin="round"
        stroke-width="2"
        viewBox="0 0 24 24"
        stroke="currentColor"
        x-cloak=""
      >
        <path d="M4 6h16M4 12h16M4 18h16"></path>
      </svg>
      <svg
        class="w-6 h-6 text-gray-700"
        x-show="showMenu"
        fill="none"
        stroke="currentColor"
        viewBox="0 0 24 24"
        xmlns="http://www.w3.org/2000/svg"
        x-cloak=""
      >
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          d="M6 18L18 6M6 6l12 12"
        ></path>
      </svg>
    </div>
  </div>
</nav>
