<?php

namespace App\Http\Controllers;

use App\Models\ClassSection;
use Illuminate\Http\Request;
use DataTables;
use App\Models\StudentClass;
use Validator;
use URL;

class ClassSectionController extends Controller
{

   public function addSchoolSection()
   {

   return view("admin.views.add_section");

   }


   public function listSchoolSection()
   {
   	return view("admin.views.list_section");

   }


   public function listAllSections()
   {
   	$student_sections=StudentClass::query();
   		return Datatables::of($student_sections)
   		->editColumn("action_btns",function($student_sections){
   			return '<a href="'.URL::to('/edit-section/'.$student_sections->id).'" class="btn btn-info class-section-edit" data-id="'.$student_sections->id.'">Edit</a>'

        .'<a href="javascript:void(0)" class="btn btn-danger class-section-delete" data-id="'.$student_sections->id.'">Delete</a>';
   		})

      ->editColumn("status",function($student_sections)
      {
        if($student_sections->status)
        {
          return '<button class="btn btn-success">Active</button>' ;
        }
        else
        {
          return '<button class="btn btn-danger">Inactive</button>' ;
        }
        
      })
   		->rawColumns(["action_btns","status"])
   		->make(true);
   }

public function saveClassSection(Request $request)

{
        $validator = Validator::make(array(
            "section"=>$request->section_name
        ),array(
            "section"=>"required|unique:tbl_class_sections",
        ),array(
         "section.required"=>"Section name must be filled",
        ));
        
        if($validator->fails()){
            
            return redirect("add-section")->withErrors($validator)->withInput();
        }else{
            
            // successfully we have passed our form
            $section = new StudentClass;
            $section->section = $request->section_name;
            $section->status = $request->dd_status;
            
            $section->save();
            
            $request->session()->flash("message","Class Section has been created successfully");
            
            return redirect("add-section");
        }
        

    }
   public function deleteSection(Request $request)
   {
    $id=$request->delete_id;
   $section_data= StudentClass::find($id);
   if(isset($section_data->id))
   {
    $section_data->delete();
    echo json_encode(array("status"=>1,"message"=>"Section deleted successfully"));
   }
   else
   {
     echo json_encode(array("status"=>0,"message"=>"Section does not exist"));
   }
   die();
   }
    public function editSchoolSection($id = null)
    {
      $class_section=StudentClass::find($id);
      return view("admin.views.edit_section",compact("class_section"));
    }

    public function editSaveClassSection(Request $request)
    {
      $validator = Validator::make(array(
            "section"=>$request->section_name
        ),array(
            "section"=>"required",
        ),array(
         "section.required"=>"Section name must be filled",
        ));
        $update_id=$request->update_id;
        if($validator->fails()){
            
            return redirect("edit-section/".$update_id)->withErrors($validator)->withInput();
        }else{
            
            // successfully we have passed our form
            $section = StudentClass::find($update_id);
            $section->section = $request->section_name;
            $section->status = $request->dd_status;
            
            $section->save();
            
            $request->session()->flash("message","Class Section has been updated successfully");
            
            return redirect("edit-section/".$update_id);
        }
        

    }
   
}
