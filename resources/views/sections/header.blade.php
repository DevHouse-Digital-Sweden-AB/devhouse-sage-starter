<header class="banner h-[80px] pl-[15px] pr-[15px]">
  <div class="max-w-6xl m-auto flex justify-between items-stretch">
    
    <a class="brand block h-[60px] pt-[15px] pb-[15px]" href="{{ home_url('/') }}">
      {{--{!! $siteName !!}--}}
      <img class="logo h-full w-auto" src="/wp-content/themes/devhouse-sage-starter/resources/images/DHlogo-black.png" alt="DevHouse logo"/>
    </a>
  
    @if (has_nav_menu('primary_navigation'))
      <button class="block md:hidden" type="button" aria-haspopup="true" id="hamburger-button">MENU</button>
    
      <nav class="nav-primary hidden md:block" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav flex justify-between h-full', 'echo' => false]) !!}
      </nav>
    @endif
    
  </div>
</header>
