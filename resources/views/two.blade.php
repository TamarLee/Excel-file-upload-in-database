@extends('layout')
@section('content')



	<form action="result" method="POST" enctype="multipart/form-data">
		{{ csrf_field() }}
		<label>ატვირთე მეორე ფაილი: </label><br><br>
		<input type="file" name="file"><br><br>
		<input type="submit" value="ატვირთვა">
	</form>


@endsection