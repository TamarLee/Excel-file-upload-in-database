@extends('layout')

@section('content')

<div class="container">
	<div style="text-align:center;">
		<div>
			<h1 align="center">ექსელის ორი ფაილის შედარება</h1>
		</div>

		<div class="maindiv ">
			<a href="one">
				<button type="button" class="cdm mybutton btn btn-success btn-lg">ერთ ფაილად ატვირთვა</button> 
			</a>
		</div>

		<div class="maindiv ">
			<a href="">
				<button type="button" class="cdm mybutton btn btn-success btn-lg">ორ ფაილად ატვირთვა</button> 
			</a>
		</div>
	</div>
	<div style="text-align:right; margin-top: 150px; ">
		Created by 
		<a target="_blank" style="text-decoration: none;" href="https://github.com/TamarLee">Tamar Mekhrishvili<a>
	</div>
</div>

@endsection