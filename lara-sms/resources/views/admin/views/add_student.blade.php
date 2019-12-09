@extends("admin.layouts.layout")
@section("title","Admin Dashboard | Techie Dinesh")
@section("content")
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Add Student
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add Student </li>
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

            @if(count($errors))
             <div class="alert alert-danger">
              @foreach($errors->all() as $error)

              <p>{{$error}}</p>
              @endforeach
            </div>
             @endif

            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" id="frm-add-student" method="post" action="{{route('savestudent')}}" enctype="multipart/form-data">
              @csrf
              <div class="box-body">

              <div class="form-group">
                  <label for="reg_no">Registration Number</label>
                  <input type="text" class="form-control" name="reg_no" id="reg_no" placeholder="Enter Registration Number">
                </div>
              
              <div class="form-group">
                  <label for="dd_gender">Gender</label>
                  <select class="form-control" id="dd_gender" name="dd_gender">
                    <option value="-1">Select Gender</option>
                    @if(count($genders))
                      @foreach($genders as $gender)
                      <option value="{{$gender->id}}">{{$gender->type}}</option>
                      @endforeach
                    @endif
                </select>
                </div>
                
                <div class="form-group">
                  <label for="student_name">Student Name</label>
                  <input type="text" class="form-control" name="student_name" id="student_name" placeholder="Enter Student Name">
                </div>

                <div class="form-group">
                  <label for="student_emial">Student Email</label>
                  <input type="eamil" class="form-control" name="student_email" id="student_email" placeholder="Enter Student email">
                </div>


                <div class="form-group">
                  <label for="roll_no">Roll No</label>
                  <input type="number" class="form-control" name="roll_no" id="roll_no" placeholder="Enter Roll Number">
                </div>


              <div class="form-group">
                  <label for="student_phone">Student Phone</label>
                  <input type="number" class="form-control" name="student_phone" id="student_phone" placeholder="Enter Student Phone">
                </div>
        
               <div class="form-group">
                  <label for="student_address">Student Address</label>
                 <textarea class="form-control" name="student_address" id="student_address" placeholder="Enter Address"></textarea>
                </div>
                

               <div class="form-group">
                  <label for="student_photo">Student Photo</label>
                  <input type="file" class="form-control" name="student_photo" id="student_photo" >
                </div>
              
              <div class="form-group">
                  <label for="father_name">Father's Name</label>
                  <input type="text" class="form-control" name="father_name" id="father_name" placeholder="Enter Father's Name" >
                </div>

                 <div class="form-group">
                  <label for="mother_name">Mother's Name</label>
                  <input type="text" class="form-control" name="mother_name" id="mother_name" placeholder="Enter Mother's Name" >
                </div>
                
                 <div class="form-group">
                  <label for="student_age">Student Age</label>
                  <input type="number" min="5" class="form-control" name="student_age" id="student_age" placeholder="Enter Student Age" >
                </div>

                 <div class="form-group">
                  <label for="dd_class">Class</label>
                  <select class="form-control" id="dd_class" name="dd_class">
                    <option value="-1">Select Class</option>
                    @if(count($classes))
                      @foreach($classes as $class)
                      <option value="{{$class->id}}">{{$class->name}}</option>
                      @endforeach
                    @endif
                </select>
                </div>
              
                  <div class="form-group">
                  <label for="dd_section">Section</label>
                  <select class="form-control" id="dd_section" name="dd_section">
                    <option value="-1">Select Section</option>
                    @if(count($sections))
                      @foreach($sections as $section)
                      <option value="{{$section->id}}">{{$section->section}}</option>
                      @endforeach
                    @endif
                </select>
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


