<!DOCTYPE html>
<html>
<head>
	<title> @yield('title') </title>
</head>
<body>
	<div class="header">
		@if (Auth::guest())
			{{ HTML::link('/','首页')}} | {{ HTML::link('posts','所有文章') }}
		@else 
			{{ HTML::link('/','首页')}} | {{ HTML::link('posts','所有文章') }} {{ HTML::link('users/manage','管理')}} {{ HTML::link('posts/create','写博文')}} {{ HTML::link('users/logout', '登出') }}
		@endif
	</div>
	
	<div class="body">
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