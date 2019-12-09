@extends("admin.layouts.layout")
@section("title","Edit Section | Techie Dinesh")
@section("content")
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Edit Section
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Section</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
       
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">

            @if(session()->has("message"))
            <div class="alert alert-success">
              
              <p>{{session("message")}}</p>
            </div>

            @endif
            <div class="box-header with-border">
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
            <form role="form" id="frm-add-section" method="post" action="{{route('editsubmitsection')}}">
              @csrf
              <input type="hidden" value="{{$class_section->id}}" name="update_id">
              <div class="box-body">
                <div class="form-group">
                  <label for="section_name">Section Name</label>
                  <input type="text" class="form-control" value="{{$class_section->section}}" name="section_name" id="section_name" placeholder="Enter section Name">
                </div>
                <div class="form-group">
                  <label for="dd_status">Status</label>
                  <select class="form-control" id="dd_status" name="dd_status">
                  <option value="1" @if($class_section->status) selected=""  @endif>Active</option>
                  <option value="0" @if(!$class_section->status) selected=""  @endif>Inactive</option>
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


