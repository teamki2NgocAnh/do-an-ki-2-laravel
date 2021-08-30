<div class="wrapper ">
  @include('front.admin.layouts.navbars.sidebar')
  <div class="main-panel">
    @include('front.admin.layouts.navbars.navs.auth')
    @yield('content')
    @include('front.admin.layouts.footers.auth')
  </div>
</div>
