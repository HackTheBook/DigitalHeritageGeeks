@extends('template')
@section('extraBodyClass','mobile-container')
@section('content')
<h3>Upcoming Events</h3>
<ul>
	@foreach($events as $event)
	<li><a href="{!!$event->link()!!}}">{{$event->title}}</a></li>
	@endforeach
</ul>
<h3>Latest Updates</h3>
<ul>
	@foreach($latest as $r)
	<li><a href="{!!$r->link!!}" data-original-title="{!!$r->updatedAt()!!}">{{$r->title}}</li>
	@endforeach
</ul>
@endsection
@section('extrascripts')
<script type="text/javascript"></script>
@endsection