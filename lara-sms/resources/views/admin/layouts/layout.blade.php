<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield("title")</title>
  <!-- Tell the browser to be responsive to screen width -->
{{--including header--}}
@include("admin.layouts.styles")
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  @include("admin.layouts.header")
  <!-- Left side column. contains the logo and sidebar -->
 @include("admin.layouts.left_sidebar")

  <!-- Content Wrapper. Contains page content -->
 @section("content")
 @show
  <!-- /.content-wrapper -->
  

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  {{--including foooter--}}
    @include("admin.layouts.footer")
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
{{--include  footer--}}
@include("admin.layouts.script")
<!-- jQuery 3 -->

</body>
</html>
