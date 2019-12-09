<?php
Route::group(["middleware"=>"admin"],function(){

Route::get("/","AdminHomeController@dashboard");

//Classes routes

Route::get("/add-section","ClassSectionController@addSchoolSection")->name("addclasssection");
Route::get("/list-sections","ClassSectionController@listSchoolSection")->name("listclasssection");
Route::get("/list-section-data","ClassSectionController@listAllSections")->name("listallsection");
Route::post("/save-section","ClassSectionController@saveClassSection")->name("savesection");

Route::post("/delete-section","ClassSectionController@deleteSection")->name("deletesection");
Route::get("/edit-section/{id?}","ClassSectionController@editSchoolSection")->name("editclasssection");
Route::post("/edit-section-data","ClassSectionController@editSaveClassSection")->name("editsubmitsection");


Route::get("/add-class","SchoolClassController@addSchoolClass")->name("addschoolclass");
Route::get("/list-classes","SchoolClassController@listSchoolClasses")->name("listschoolclasses");
Route::get("/list-classes-data","SchoolClassController@listAllClasses")->name("listallclasses");
Route::post("/save-class","SchoolClassController@saveClassData")->name("saveclass");
Route::post("/delete-class","SchoolClassController@deleteClass")->name("deleteclass");
Route::get("/edit-class/{id?}","SchoolClassController@editClassData")->name("editclassdata");
Route::post("/edit-save-class","SchoolClassController@editSaveClassData")->name("editsaveclass");



//Faculty routes

Route::get("/add-faculty-type","FacultyTypeController@addFacultyType")->name("addfacultyType");
Route::get("/list-faculty-types","FacultyTypeController@listFacultyTypes")->name("listfacultyTypes");
//Route::get("/list-faculty-types-data","FacultyTypeController@listAllFacultyTypes")->name("listallstafftypes");
Route::get("/list-faculty-types-data", "FacultyTypeController@listAllFacultyTypes")->name("listallstafftypes");
Route::post("/save-faculty-type", "FacultyTypeController@saveFacultyType")->name("savefacultytype");
Route::post("/delete-faculty-type", "FacultyTypeController@deleteFacultyType")->name("deletefacultytype");

Route::get("/edit-faculty-type/{id?}","FacultyTypeController@editFacultyType")->name("editfacultytype");
Route::post("/edit-save-faculty-type","FacultyTypeController@editSaveFacultyType")->name("editsavefacultytype");


Route::get("/add-faculty","FacultyController@addFaculty")->name("addfaculty");
Route::get("/list-faculties","FacultyController@listFaculties")->name("listfaculties");
 Route::get("/list-all-faculties", "FacultyController@listAllFaculties")->name("listallfaculties");

 Route::post("/save-faculty", "FacultyController@saveFaculty")->name("savefaculty");
Route::post("/delete-faculty", "FacultyController@deleteFaculty")->name("deletefaculty");

Route::get("/edit-faculty/{id?}", "FacultyController@editFaculty")->name("editfaculty");
Route::post("/save-edit-faculty1", "FacultyController@saveEditFaculty1")->name("saveeditfaculty1");


//Student routes

Route::get("/add-student","StudentController@addStudent")->name("addstudent");
Route::get("/list-students","StudentController@listStudents")->name("liststudents"); 
Route::get("/list-all-students","StudentController@listAllStudents")->name("listallstudents");
Route::post("/save-student","StudentController@saveStudent")->name("savestudent");
Route::post("/delete-student","StudentController@deleteStudent")->name("deletestudent");

});


//ForLogin
Route::get("/login","AdminController@adminLoginForm")->name("adminlogin");
Route::post("/check-login","AdminController@checkUserLogin")->name("checklogin");
Route::get("/logout","AdminController@logout")->name("adminlogout");
