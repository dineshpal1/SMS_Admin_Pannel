@extends("admin.layouts.auth_layout")
@section("title","Admin Login")

@section("content")
<div class="login-box">
  <div class="login-logo">
    <a href="javascript:void(0)"><b>Admin</b>SMS</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Login Panel</p>
    
	@if(count($errors)>0)
	<div class="alert alert-danger">
	@foreach($errors->all() as $error)
	<p>{{$error}}</p>
	@endforeach	
	</div>
	@endif
    <form action="{{route('checklogin')}}" method="post">
    	@csrf
      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="email" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

        
  </div>
  <!-- /.login-box-body -->
</div>

@endsection