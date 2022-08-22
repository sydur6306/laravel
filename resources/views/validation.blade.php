@if($errors->any())
    <p class="alert alert-danger">{{$errors->first()}}<button class="btn-close" data-bs-dismiss="alert" style="float: right"></button></p>
@endif

@if(Session::has('success'))
    <p class="alert alert-success">{{Session::get('success')}}<button class="btn-close" data-bs-dismiss="alert" style="float: right"></button></p>
@endif
