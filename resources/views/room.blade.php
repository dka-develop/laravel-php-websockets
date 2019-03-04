@extends('layouts.app')

@section('content')
	@if (Auth::check())
		<div class="container">
			<private-chat :room="{{$room}}" :user="{{Auth::user()}}"></private-chat>
		</div>
	@endif
@endsection