@extends('layout')
@section('content')



<form action="two" method="POST" enctype="multipart/form-data">
	{{ csrf_field() }}
	<label>ატვირთე პირველი ფაილი: </label><br><br>
	<input type="file" name="file"><br><br>
	<input type="submit" value="ატვირთვა">
</form>



@endsection