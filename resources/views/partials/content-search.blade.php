<article @php(post_class())>
  <header>
    <h2 class="entry-title mt-4 py-4 md:py-6">
      <a class="text-2xl font-extrabold text-gray-900" href="{{ get_permalink() }}">
        {!! $title !!}
      </a>
    </h2>

    @includeWhen(get_post_type() === 'post', 'partials.entry-meta')
  </header>

  <div class="entry-summary mb-4 md:mb-6">
    @php(the_excerpt())
  </div>
</article>
