<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/fontawesome.css')}}">
  	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
  	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/all.css')}}">
  	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">

	<title>Project</title>
</head>
<body>

	<div class="wrap-table log">
        @include('validation')
        <a class="btn btn-primary btn-sm" href="{{route('employee.create')}}">Add Employee</a>
		<div class="class-card shadow">
			<div class="card-body">
				<a class="btn btn-primary" href="index.php">Home</a>
				<h2>All data</h2>
					<table class="table table-striped">
						<thead>
							<tr>
								<th>id</th>
								<th>name</th>
								<th>email</th>
								<th>cell</th>
								<th>Uname</th>
								<th>Photo</th>
								<th>Action</th>
							</tr>
						</thead>


						 <tbody>
                         @foreach($all_emp as $emp)
						<tr>
							<td>{{$loop->index+1}}</td>
							<td>{{$emp->name}}</td>
							<td>{{$emp->email}}</td>
							<td>{{$emp->cell}}</td>
							<td>{{$emp->username}}</td>
							<td><img style="width:50px;height:50px;" src="public/media/stuff/{{$emp->photo}}"></td>
						<td style="width:250px;">
								<a class="btn btn-sm btn-primary" href="{{route('employee.show',$emp->id)}}">View</a>
								<a class="btn btn-sm btn-info" href="">edit</a>
								<a class="btn btn-sm btn-warning" href="{{route('employee.delete',$emp->id)}}">delete</a>
							</td>

						 </tr>
                         @endforeach

						 </tbody>

					</table>

			</div>
		 </div>
	</div>

<script type="text/javascript"src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>

</body>
</html>
