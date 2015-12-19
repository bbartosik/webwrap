<!doctype HTML>
<html>
<head>
  <meta charset="utf-8">
  <title>DW15 - Bart Bartosik</title>
  <!-- Sets initial viewport load and disables zooming  -->
  <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
  <!-- Keywords -->
<meta name="keywords" content="Bart Bartosik - Portfolio">
<meta name="description" content="Web Development Educational content.">
  @include('head.fonts')
  @include('head.css')
</head>

<body>
  @include('body.nav')
<section>
  @yield('content')
</section>
  @include('body.footer')
</body>
</html>
