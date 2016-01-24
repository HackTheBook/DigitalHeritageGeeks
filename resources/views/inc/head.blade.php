<meta charset="utf8">
@if(isset($meta))
<title>{{$meta->title}}</title>
<meta property="og:site_name" content="Flaneur Digital">
@foreach($meta->properties as $prop => $content)
	@if($prop == 'description' || $prop == 'keywords')
	<meta name="{{$prop}}" content="{{$content}}">
	@else
		@if($prop =='og:see_also')
			@foreach($content as $c)
			<meta property="og:see_also" content="{{$c}}">
			@endforeach
		@else
		<meta property="{{$prop}}" content="{{$content}}">
		@endif
	@endif
@endforeach
@endif
<link rel="stylesheet" type="text/css" href="{!!asset('css/bootstrap.min.css')!!}">
<link rel="stylesheet" type="text/css" href="{!!asset('css/bootstrap-theme.min.css')!!}">
<link rel="stylesheet" type="text/css" href="{!!asset('css/app.css')!!}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
@yield('extrastyles')