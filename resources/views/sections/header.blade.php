<header class="banner flex justify-between items-center p-4">
  <a class="brand w-[100px]" href="{{ home_url('/') }}">
    {{--{!! $siteName !!}--}}
    <img class="logo" src="/wp-content/themes/devhouse-sage-starter/resources/images/DHlogo-black.png" alt="DevHouse logo"/>
  </a>

  @if (has_nav_menu('primary_navigation'))
    <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav flex justify-between', 'echo' => false]) !!}
    </nav>
  @endif
</header>
