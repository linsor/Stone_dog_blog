<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<body  class="bg-light">
   @include('layouts.header')
 {{--  @include('layouts.body')  --}}
    @yield('content')
   @include('layouts.footer')
</body>

</html>
