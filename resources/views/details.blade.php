@extends('template')
@section('extraBodyClass','mobile-container')
@section('content')
<h1>{{$poi->title}}</h1>
@if(isset($poi->thumb))

@endif

@foreach($poi->feeds as $feed)
@include('components.'$feed->type)
@endforeach

@endsection