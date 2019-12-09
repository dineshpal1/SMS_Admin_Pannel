<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\FacultyType;
use Validator;
use DB;
use DataTables;
use URL;
class FacultyTypeController extends Controller
{
    public function addFacultyType()
    {
    	return view("admin.views.add_faculty_type");
    }

    public function listFacultyTypes()
    {
    	return view("admin.views.list_staff_types");
    }

    public function listAllFacultyTypes()
    {
    	$faculty_types=FacultyType::query();
   		return Datatables::of($faculty_types)
   		->editColumn("action_btns",function($faculty_types){
   			return '<a href="'.URL::to('/edit-faculty-type/'.$faculty_types->id).'" class="btn btn-info class-section-edit" data-id="'.$faculty_types->id.'">Edit</a>' 

        .'<a href="javascript:void(0)" class="btn btn-danger btn-faculty-type-delete" data-id="'.$faculty_types->id.'">Delete</a>';
   		})

      ->editColumn("status",function($faculty_types)
      {
       if($faculty_types->status)
       {
           return "<button class='btn btn-success'>Active</button>";
       }
       else
       {
           return "<button class='btn btn-danger'>Inactive</button>";
       }
      })
   		->rawColumns(["action_btns","status"])
   		->make(true);
    }

    public function saveFacultyType(Request $request)
    {
      $validator=Validator::make([
        "type"=>$request->faculty_type,
       
      ],[
        "type"=>"required|unique:tbl_faculty_types"

      ]);
      if($validator->fails())
      {
        return redirect("add-faculty-type")->withErrors($validator)->withInput();
      }
      else
      {
        $faculty_type=new FacultyType();
        $faculty_type->type=$request->faculty_type;
        $faculty_type->status=$request->dd_status;
        $faculty_type->save();

        $request->session()->flash("message","Faculty Type created successfully");
        return redirect("add-faculty-type");

      }
    }
     public function deleteFacultyType(Request $request)
    {
     
    $id=$request->delete_id;
   $section_data= FacultyType::find($id);
   if(isset($section_data->id))
   {
    $section_data->delete();
    echo json_encode(array("status"=>1,"message"=>"Faculty Type deleted successfully"));
   }
   else
   {
     echo json_encode(array("status"=>0,"message"=>"Faculty Type does not exist"));
   }
   die();
   
}

    public function editFacultyType($id=null)
    {
      $faculty_type=FacultyType::find($id);
     
      return view("admin.views.edit_faculty",compact("faculty_type"));
    }

    public function editSaveFacultyType(Request $request)
    {
      $validator=Validator::make([
        "type"=>$request->faculty_type,
       
      ],[
        "type"=>"required"

      ]);
      $faculty_type_id=$request->faculty_type_id;
      if($validator->fails())
      {
        return redirect("edit-faculty-type/".$faculty_type_id)->withErrors($validator)->withInput();
      }
      else
      {
        $faculty_type= FacultyType::find($faculty_type_id);
        $faculty_type->type=$request->faculty_type;
        $faculty_type->status=$request->dd_status;
        $faculty_type->save();

        $request->session()->flash("message","Faculty Type updated successfully");
        return redirect("edit-faculty-type/".$faculty_type_id);

      }
    }

}
