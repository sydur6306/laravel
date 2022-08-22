<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Project</title>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/fontawesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/all.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">

</head>
<body>

<div class="wrap">
    @include('validation')
    <a class="btn btn-primary btn-sm" href="{{route('student.index')}}">back</a>
		<div class="card">
			<div class="card-body">
				<h2>Edit {{$edit_data->name}}</h2>
				<form action="{{route('student.update',$edit_data->id)}}" method="POST">
                    @csrf
                    @method('PATCH')
					<div class="form-group">
						<label>Name</label>
						<input type="text" value="{{$edit_data->name}}" name="name" class="form-control">
					</div>

					<div class="form-group">
						<label>Email</label>
						<input type="text" value="{{$edit_data->email}}" name="email" class="form-control">
					</div>

					<div class="form-group">
						<label>Cell</label>
						<input type="text" value="{{$edit_data->cell}}" name="cell" class="form-control">
					</div>

					<div class="form-group">
						<label>Username</label>
						<input type="text" value="{{$edit_data->uname}}" name="uname" class="form-control">
					</div>

					<div class="form-group">
						<input type="submit" name="submit" class="btn btn-primary" value="Update">
					</div>
				</form>
			</div>
		</div>
	</div>
<script type="text/javascript"src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
</body>
</html>
