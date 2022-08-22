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
        @include('validation');
        <a class="btn btn-primary btn-sm" href="{{route('manager.create')}}">Add Manager</a>
		<div class="class-card shadow">
			<div class="card-body">
				<h2>All data</h2>
					<table class="table table-striped">
						<thead>
							<tr>
								<th>id</th>
								<th>name</th>
								<th>email</th>
								<th>cell</th>
								<th>uname</th>
								<th>Time</th>
								<th>Action</th>
							</tr>
						</thead>


						 <tbody>
                         @foreach($all_manager as $mng)
                             <tr>
                                 <td>{{$loop ->index+1}}</td>
                                 <td>{{$mng->name}}</td>
                                 <td>{{$mng->email}}</td>
                                 <td>{{$mng->cell}}</td>
                                 <td>{{$mng->username}}</td>
                                 <td>{{date('F d,Y',strtotime($mng->created_at))}}</td>
                                 <td style="width:250px;">
                                     <a class="btn btn-sm btn-primary" href="{{route('manager.show',$mng->id)}}">View</a>
                                     <a class="btn btn-sm btn-info" href="{{route('manager.edit',$mng->id)}}">edit</a>
                                     <form method="post" style="display: inline;" action="{{route('manager.destroy',$mng->id)}}">
                                         @csrf
                                         @method('DELETE')
                                         <button class="btn btn-danger btn-sm">Delete</button>
                                     </form>
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
