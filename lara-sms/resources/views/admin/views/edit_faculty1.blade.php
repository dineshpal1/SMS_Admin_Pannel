@extends("admin.layouts.layout")
@section("title","Edit Faculty | Techie Dinesh")
@section("content")
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Edit Faculty
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Faculty</li>
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
            <form role="form" id="frm-add-faculty" method="post" action="{{route('saveeditfaculty1')}}" enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="faculty_id" value="{{$faculty->id}}">
              <div class="box-body">

               <div class="form-group">
                  <label for="dd_type">Choose Type</label>
                  <select class="form-control" id="dd_type" name="dd_type">
                    <option value="-1">Select Faculty Type</option>
                    @if (count($types) > 0)
                    @foreach($types as $type)
                    <option value="{{$type->id}}" @if($type->type) selected="selected" @endif>{{$type->type}}</option>
                    @endforeach
                    @endif
                    </select>

                </div>
                  <div class="form-group">
                  <label for="faculty_name">Faculty Name</label>
                  <input type="text" class="form-control" name="faculty_name" value="{{$faculty->name}}" id="faculty_name" placeholder="Enter Faculty Name">
                </div>

                <div class="form-group">
                  <label for="faculty_emial">Faculty Email</label>
                  <input type="eamil" class="form-control" name="faculty_email" id="faculty_email" placeholder="Enter Faculty email" value="{{$faculty->email}}">
                </div>


                <div class="form-group">
                  <label for="faculty_designation">Faculty Designation</label>
                  <input type="text" class="form-control" name="faculty_designation" id="faculty_designation" placeholder="Enter Faculty Designation" value="{{$faculty->designation}}">
                </div>


              <div class="form-group">
                  <label for="faculty_phone">Faculty Phone</label>
                  <input type="number" class="form-control" name="faculty_phone" id="faculty_phone" placeholder="Enter Faculty Phone" value="{{$faculty->phone_no}}">
                </div>

                <div class="form-group">
                  <label for="dd_gender">Gender</label>
                  <select class="form-control" id="dd_gender" name="dd_gender">
                  <option value="-1">Select Gender</option>
                  @if(count($genders)>0)
                  @foreach($genders as $gender)
                  <option value="{{$gender->id}}" @if($gender->type) selected="selected" @endif>{{ucfirst($gender->type)}}</option>
                  @endforeach
                  @endif
                  
                </select>
                </div>
                

               <div class="form-group">
                  <label for="faculty_photo">Profile Photo</label>
                  <input type="file" class="form-control" name="faculty_photo" id="faculty_photo" value="{{$faculty->profile_photo}}" >
                </div>

                 <div class="form-group">
                  <label for="faculty_address">Faculty Address</label>
                 <textarea class="form-control" name="faculty_address" id="faculty_address" placeholder="Enter Address" value="{{$faculty->address}}"></textarea>
                </div>


                <div class="form-group">
                  <label for="dd_status">Status</label>
                  <select class="form-control" id="dd_status" name="dd_status">
                  <option value="1"@if($faculty->status)selected="selected" @endif>Active</option>
                  <option value="0"@if(!$faculty->status) selected="selected" @endif>Inactive</option>
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


