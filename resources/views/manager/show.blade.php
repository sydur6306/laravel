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
    <a class="btn btn-primary btn-sm" href="{{route('manager.index')}}">Back</a>
    <div class="card shadow">
        <div class="card-body">
            <table class="table table-striped">
                <tr>
                    <td>Name</td>
                    <td>{{$single_mng->name}}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{$single_mng->email}}</td>
                </tr>
                <tr>
                    <td>Cell</td>
                    <td>{{$single_mng->cell}}</td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td>{{$single_mng->username}}</td>
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
