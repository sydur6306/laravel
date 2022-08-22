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

    <a class="btn btn-primary btn-sm" href="{{route('employee.index')}}">Back</a>
		<div class="card">
			<div class="card-body">
				<table class="table table-striped">
                    <tr>
                        <td>Name</td>
                        <td>{{$all_employee->name}}</td>
                    </tr>

                    <tr>
                        <td>Email</td>
                        <td>{{$all_employee->email}}</td>
                    </tr>

                    <tr>
                        <td>Cell</td>
                        <td>{{$all_employee->cell}}</td>
                    </tr>

                    <tr>
                        <td>Username</td>
                        <td>{{$all_employee->username}}</td>
                    </tr>

                    <tr>
                        <td>Age</td>
                        <td>{{$all_employee->age}}</td>
                    </tr>
                </table>
			</div>
		</div>
	</div>

<script type="text/javascript"src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
</body>
</html>
