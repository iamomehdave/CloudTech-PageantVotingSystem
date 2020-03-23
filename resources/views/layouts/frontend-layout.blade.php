<!DOCTYPE html>
<html>
<head>
  <title>@yield('title','Learning Laravel 5.8')</title>
</head>
<body>
  <div>
  <ul>
  <li><a href="/">Home</a> </li>
  <li><a href="about">About</a> </li>
  <li><a href="contact">Contact</a> </li>
  <li><a href="/customers">Customers</a> </li>
</ul>
</div>
  <div>
    @yield('content')
  </div>

</body>
</html>