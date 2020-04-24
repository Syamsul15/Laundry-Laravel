@extends('layouts.master')

	<title>Dashboard</title>

@section('content')
	
	<div class="mt-5 text-center">
		@if(auth()->user()->role == 'admin')
			<h1>Selamat Datang {{auth()->user()->role}}
		@else
			<h1>Selamat Datang {{auth()->user()->role}} {{auth()->user()->outlet->nama}}</h1>
		@endif
		<br>
		<h2>Hi {{auth()->user()->nama}}</h2>
	</div>

@endsection