@extends("admin.layouts.layout")
@section("title","Admin Dashboard | Techie Dinesh")
@section("content")
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       List Classes
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">List Classes</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
       
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
             
            </div>
            <!-- /.box-header -->
           <table class="table table-borderd" id="list-classes">
             <thead>
              <tr>
                <th>Id</th>
                <th>Class Name</th>
                <th>Class Section</th>
                <th>Seats Available</th>
                <th>Status</th>
                <th>Action</th>

              </tr>
          </thead>
           </table>
           
          </div>
          <!-- /.box -->

          
        </div>
       
       
        </div>
        <!-- ./col -->
      </section>
      <!-- /.row -->
      <!-- Main row -->
      
  </div>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    
  </script>
<script type="text/javascript">
  $(document).ready(function(){
  
    $(document).on("click",".btn-class-delete",function(){
     var conf=confirm("are you sure want to delete ?");
     if(conf)
     {
       //ajax call functions
      var delete_id=$(this).attr("data-id"); //delete id of delete button
      var postdata={
        "_token":"{{csrf_token()}}",
        "delete_id":delete_id
      }
      $.post("{{route('deleteclass')}}",postdata,function(response){
       var data=$.parseJSON(response);
       if(data.status==1)
       {
        location.reload();
       }
       else
       {
        alert(data.message);
       }
      })
     }
     
    });
  });

</script>
@endsection


