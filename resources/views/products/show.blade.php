@extends('layouts.app')
@section('content')
<div class="container">
<nav class="navbar navbar-right">
	<ul class="nav navbar-nav">
		<li><a href="/products/{{ $product->id }}/edit" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Edit</a></li>
		<li><a href="/products/{{ $product->name }}/delete" class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>Delete</a></li>
	</ul>
</nav>
	<h1>Product admin</h1>
	@if (count($errors) > 0)
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif

	<hr>
	<article>
		<h2>{{ $product->name }}</h2>
		<br>
		<p>{{ $product->description }}</p>
		<br>
		<h4><i>{{ $product->price }}</i></h4>
		<br>
		<label for="status"><input type="checkbox" disabled="disabled" value="{{ $product->status ? 1 : 0 }}" name="status" checked>Actief</label>
	</article>
	

</div>
@endsection
