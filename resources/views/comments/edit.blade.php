@extends('layouts.main')
<h3>Edit Annotation {{$annotation->title}}</h3>
<a href="{{url('annotations')}}">Go Back</a>
<hr>
@section('content')
    <form action="{{url('annotations/update')}}/{{$annotation->id}}" method="POST">
        <label>Title</label><br>
        <input type="text" name="title" value="{{$annotation->title}}"/>
        <hr>
        <label>Annotation</label><br>
        <textarea name="descr">{{$annotation->descr}}</textarea>
        <hr>
        {{ csrf_field() }}
        <input type="submit" value="Submit">
    </form>
@endsection