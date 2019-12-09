@extends("admin.layouts.layout")
@section("title","Edit Faculty | Techie Dinesh")
@section("content")
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Edit Faculty Type
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Faculty Type</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
       
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
             @if(session()->has("message"))
              <div class="alert alert-success">
              <p>{{session("message")}}</p>
              </div>
             @endif

             @if(count($errors)>0)
              <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                <p>{{$error}}</p>
                @endforeach
              </div>
             @endif
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" id="frm-add-faculty_type" method="post" action="{{route('editsavefacultytype')}}">
              @csrf
              <input type="hidden" name="faculty_type_id" value="{{$faculty_type->id}}">
              <div class="box-body">
                <div class="form-group">
                  <label for="faculty_type">Faculty Type</label>
                  <input type="text" class="form-control" value="{{ ucfirst($faculty_type->type)}}"name="faculty_type" id="faculty_type" placeholder="Enter Faculty Type">
                </div>
                <div class="form-group">
                  <label for="dd_status">Status</label>
                  <select class="form-control" id="dd_status" name="dd_status">
                  <option value="1"@if($faculty_type->status)selected="selected" @endif>Active</option>
                  <option value="0"@if(!$faculty_type->status)selected="selected" @endif>Inactive</option>
                  </select>
                  
                </div>
                
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

          
        </div>
       
       
        </div>
        <!-- ./col -->
      </section>
      <!-- /.row -->
      <!-- Main row -->
      
  </div>

@endsection


