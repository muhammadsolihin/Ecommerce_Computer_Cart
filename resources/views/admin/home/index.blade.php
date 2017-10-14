@extends('admin.main')

@section('content')
<center>
	<h1>selamat datang {{ Auth::user()->name }}</h1>
</center>
@endsection