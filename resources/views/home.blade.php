@extends('layouts.app')

@section('content')
<h1>home</h1>
<p>Back End Developer</p>
@endsection

@section('sidebar')
	@parent
	<p>This is appended to the sidebar</p>
@endsection

