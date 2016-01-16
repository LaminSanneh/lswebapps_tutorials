<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Blog</title>
    <link rel="stylesheet prefetch" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <ul class="nav nav-pills" >
        <li><a href="/posts">Posts</a></li>
        <li><a href="/posts/create">Create New Posts</a></li>
      </ul>
      @yield('content')
    </div>
  </body>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
