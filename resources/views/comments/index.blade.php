@extends('layouts.main')
@section('content')
<h3>Annotations</h3>
<a href="{{url('annotations/create')}}">Create Annotation</a>
    <ul>
    @foreach($annotations as $annotation)
    <li>{{$annotation->title}} - <span><a href="{{url('annotations/edit')}}/{{$annotation->id}}">Edit</a></span> | <span><a href="{{url('annotations/delete')}}/{{$annotation->id}}">Delete</a></span> | <span><small>{{$annotation->created_at}}</small></span></li>
    @endforeach
    </ul>
@endsection
