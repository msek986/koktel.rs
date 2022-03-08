<!DOCTYPE html>
<html lang="en">

<head>
  @include('basic.meta')
  @include('basic.style')
  @include('basic.title')
  @include('basic.analytics')
</head>

<body>
  @yield('content')
  @include('basic.scripts')
</body>

</html>
