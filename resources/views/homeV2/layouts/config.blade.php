<!DOCTYPE html>
<html lang="en">
@yield('head')
<!-- @include('homeV2.layouts.partials.head') -->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
        @yield('nav')
  <!-- @include('homeV2.layouts.partials.nav') -->
  @yield('aside')
  <!-- @include('homeV2.layouts.partials.aside') -->

  @yield('content')

  @yield('footer')
  <!-- @include('homeV2.layouts.partials.footer') -->
</div>

  @yield('js')
<!-- @include('homeV2.layouts.partials.js') -->

@yield('extraJS')

</body>
</html>
