<?php

namespace App\Http\Controllers;

use App\Models\PostHasStudent;
use Illuminate\Http\Request;

class AppliedStudentAcceptanceByInstituteController extends Controller
{
    public function index(){
        $data['appliedStudents'] = PostHasStudent::with('graduate')->with('post')->get();
        // return $data;
        return view('admin.graduate.applied.list',$data);
        return "its ok";
    }

    public function ajaxUpdateStatus(Request $request)
  {
    // return response('ssss');
    if ($request->isMethod("POST")) {
      $id = $request->post('id');
      $postStatus = $request->post('status');
      $status = strtolower($postStatus);
      $poststudent = PostHasStudent::find($id);
      if($poststudent->update(['institue_acceptance'=> $status])){
        return response('success',200);
      }
    }
  }
}
 