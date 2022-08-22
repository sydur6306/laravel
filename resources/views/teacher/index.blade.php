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
        <a class="btn btn-primary btn-sm" href="{{route('teacher.create1')}}">Add Teachers</a>
		<div class="class-card shadow">
			<div class="card-body">
				<h2>All Teachers</h2>
					<table class="table table-striped">
						<thead>
							<tr>
								<th>id</th>
								<th>name</th>
								<th>email</th>
								<th>cell</th>
                                <th>age</th>
                                <th>time</th>
								<th>Photo</th>
								<th>Action</th>
							</tr>
						</thead>


						 <tbody>
                         @foreach($all_teacher as $teacher)
						<tr>
							<td>01</td>
							<td>{{$teacher->name}}</td>
							<td>{{$teacher->email}}</td>
							<td>{{$teacher->cell}}</td>
							<td>{{$teacher->age}}</td>
							<td>{{date('F d,Y',strtotime($teacher->created_at))}}</td>
							<td><img style="width:50px;height:50px;" src="{{asset('assets/photo/Tipu.JPG')}}"></td>
						<td style="width:250px;">
								<a class="btn btn-sm btn-primary" href="">View</a>
								<a class="btn btn-sm btn-info" href="">edit</a>
								<a class="btn btn-sm btn-warning" href="">delete</a>
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
