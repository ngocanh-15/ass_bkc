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

<form method="post" action="" enctype="multipart/form-data">
@csrf
	<center>
		<table border="1" class="table">
			<tr>
				<td><center><font face="Comic Sans MS, cursive" size="+1" color="#0066CC">Category Name</center></td>
			</tr>
			<tr>
				<td><font face="Comic Sans MS, cursive" size="+1" color="#660066"><input class="form-control" type="text" name="name"></td>
			</tr>
			<tr>
				<td align="center"><font face="Comic Sans MS, cursive" size="+1" color="#660066">
					<button>Add Now</button>
					<button><center><a href="{{url('user/categories/index')}}">back</a></center></button>
				</td>
			</tr>
		</table>
	</center>
</form>
@endsection