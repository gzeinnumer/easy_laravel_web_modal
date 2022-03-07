<!DOCTYPE html>
<html lang="en">
@include('homeV2.layouts.partials.head')
  <body class="hold-transition sidebar-mini">
    <div class="wrapper">
      @include('homeV2.layouts.partials.nav')
      @include('homeV2.layouts.partials.aside')

      @yield('content')

      @include('homeV2.layouts.partials.footer')
    </div>

    @include('homeV2.layouts.partials.js')

    @yield('extraJS')

  </body>
</html>

