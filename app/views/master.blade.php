<!DOCTYPE html>
<html>
<head>
	<title> @yield('title') </title>
</head>
<body>
	<div class="header">
		@yield('head')
	</div>
	
	<div class="body">
		<a href="{{ route('posts.create') }}">发表博文</a>
		<div class="content">
			@yield('content')
		</div>
		<div class="sidebar">
			
		</div>
	</div>
	
	<div class="footer">
		@yield('footer')
	</div>
</body>
</html>