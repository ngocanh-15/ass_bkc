@extends('user/layouts')
@section('content')
<br><br>
	@if(count($errors) > 0)
		<div class="alert alert-danger">
			@foreach($errors->all() as $err)
				{{$err}}<br>
			@endforeach
		</div>
	@endif

<form method="POST" action="" enctype="multipart/form-data">
@csrf
	<center>
    <table border="1" class="table">
		@foreach ($categories as $each)
		<tr>
			<td>Category Code</td>
			<td><input class="form-control" name="categories_id" type="number" value="{{ $each->categories_id }}"></td>
		</tr>
		<tr>
			<td>Category Name</td>
			<td><input  type="text" class="form-control" name="name" value="{{ $each->name }}"></td>
		</tr>
		<tr>
			<td><center><a href="{{url('user/categories/index')}}">back</a></center></td>
			<td colspan="2"><button type="submit">edit</button></td>
		</tr>
		@endforeach
	</table>
	</center>
</form>
@endsection