<!DOCTYPE html>
<html>
<head>
	<title>MyApp</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>

	
	@include('inc.navbar')
	@if(Request::is('/'))
		@include('inc.showcase')
	@endif
	<br>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-8">

				<!--collect error-->
				@include('inc.messages')
				<!--cloase collect error-->

				@yield('content')
			</div>
			<div class="col-md-4 col-md-4">
				@include('inc.sidebar')
			</div>
		</div>
	</div>

	<footer id="footer" class="text-center">
		<script type="text/javascript">
  			document.write(new Date().getFullYear());
		</script>
	</footer>
</body>
</html>