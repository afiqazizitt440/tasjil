@extends('layouts.app')
@section('content')
<h1>contact</h1>
	{!! Form::open(['url' => 'contact/submit']) !!}
    	<div class="form-group">
    		{{Form::label('name', 'Name')}}
    		{{Form::text('name', '',['class' => 'form-control', 'placeholder' => 'Enter Name'])}}
    	</div>
    	<div class="form-group">
    		{{Form::label('email', 'Email Address')}}
    		{{Form::text('email', '',['class' => 'form-control', 'placeholder' => 'Enter Email'])}}
    	</div>
    	<div class="form-group">
    		{{Form::label('message', 'Messages')}}
    		{{Form::textarea('message', '',['class' => 'form-control', 'placeholder' => 'Enter Message'])}}
    	</div>
    	<div class="form-group">
    		{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    	</div>
	{!! Form::close() !!}
@endsection