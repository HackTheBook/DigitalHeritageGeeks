<!DOCTYPE html>
<html lang="en">
<head>
@include('inc.head')
</head>

<body class="@yield('extraBodyClass')">
	@include('inc.header')
	<div class="page-container">
		<div class="page-content">
			<div class="container-fluid">
			@yield('content')
			</div>
		</div>
	</div>
	@include('inc.footer')
</body>
</html>