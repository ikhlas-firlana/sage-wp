<article @php(post_class())>
      <header class="mt-4 py-4 md:py-8">
        <h1 class=" text-5xl font-extrabold leading-10 tracking-tight text-left text-gray-900 md:text-left sm:leading-none md:text-6xl lg:text-7xl">
          {!! $title !!}
        </h1>
        <div class="mt-4 text-gray-500 md:mt-5 md:max-w-lg md:text-left lg:text-lg">
          @include('partials.entry-meta')
        </div>
      </header>

      <div class="entry-content">
        @php(the_content())
      </div>

      <footer>
        {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
      </footer>

      @php(comments_template())
</article>
