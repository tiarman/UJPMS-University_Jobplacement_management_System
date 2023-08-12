<?php

namespace App\Http\Controllers;

use App\Models\IndustryPost;
use App\Models\PostHasStudent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppliedStudentAcceptanceByInstituteController extends Controller
{
    public function index(){
      $role =  Auth::User()->roles()->first();
      // check institute and industry for job post
      if($role->name == 'Institute Head'){
        // getting specific institute job post id (array)
        $post_ids = IndustryPost::select('id')->where('institute_id', auth()->id())->get();
      
        $data['appliedStudents'] = PostHasStudent::whereIn('post_id', $post_ids)->with('graduate')->with('post')->get();
        
      }
      else{
        // getting specific industry job post id (array)
        $post_ids = IndustryPost::select('id')->where('industry_id', auth()->id())->get();

        $data['appliedStudents'] = PostHasStudent::whereIn('post_id', $post_ids)->with('graduate')->with('post')->get();

      }
        return view('admin.graduate.applied.list',$data);
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
 