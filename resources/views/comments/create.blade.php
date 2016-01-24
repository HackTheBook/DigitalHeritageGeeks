@extends('layouts.main')
<h3>Create Annotation</h3>
<a href="{{url('annotations')}}">Go Back</a>
<hr>
@section('content')
    {!! Form::open(array('url'=>action('AnnotationController@postUploadAssignment'), 'method'=>'post', 'class'=>'form-horizontal', 'files'=>true)) !!}
    <form action="{{url('annotations/store')}}" method="POST">
    <label>Title</label><br>
    <input type="text" name="title" />
    <hr>
     <label>Annotation</label><br>
        <textarea name="descr"></textarea>
        <hr>
        <input type="submit" value="Submit">
    </form>
@endsection