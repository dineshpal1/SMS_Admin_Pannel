@extends("admin.layouts.layout")
@section("title","Admin Dashboard | Techie Dinesh")
@section("content")
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Add Class
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add Class</li>
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
            <form role="form" id="frm-add-class" method="post" action="{{route('saveclass')}}">
              @csrf
              <div class="box-body">

                <div class="form-group">
                  <label for="class_name">Class Name</label>
                  <input type="text" class="form-control" name="class_name" id="class_name" placeholder="Enter class Name">
                </div>

                <div class="form-group">
                  <label for="dd_section">Choose Section</label>
                  <select class="form-control" id="dd_section" name="dd_section">
                    <option value=-1>Select Section</option>
                    @if(count($sections)>0)
                    @foreach($sections as $key=>$section)
                    <option value="{{$section->id}}">{{$section->section}}</option>
                    @endforeach
                    @endif
                    </select>
                </div>
                

               <div class="form-group">
                  <label for="seats_available">Seats Available</label>
                  <input type="number" min="1"class="form-control" name="seats_available" id="seats_available" placeholder="Enter Seats">
                </div>




                <div class="form-group">
                  <label for="dd_status">Status</label>
                  <select class="form-control" id="dd_status" name="dd_status">
                  <option value="1">Active</option>
                  <option value="0">Inactive</option>
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


