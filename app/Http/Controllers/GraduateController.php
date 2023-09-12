<?php

namespace App\Http\Controllers;

use App\Models\JobEvent;
use App\Models\jobFairHasParticipant;
use App\Models\PostHasStudent;
use Illuminate\Http\Request;

class GraduateController extends Controller
{
  public function appliedList()
  {
    $data['datas'] = PostHasStudent::with('post')->where('student_id',auth()->user()->id)->orderby('id', 'desc')->get();
    return view('admin.graduate.job.list', $data);
  }

  public function jobFairJobPostAppliedList($id=null)
  {
    $data['ids'] = $id;
    $data['datas'] = PostHasStudent::with('post')->where('student_id',auth()->user()->id)->orderby('id', 'desc')->get();
    // return $data;
    return view('admin.graduate.job_fair_job_post_apply.list', $data);
  }

  public function fairAttendedStudentList(Request $request)
  {
    $data['students'] = JobEvent::with('jobFairHasStudentParticipant.participant')->where('id', $request->id)->get();

    // return $data;
    return view('admin.event.job.student', $data);
  }

  public function fairList(){
    $data['fairlist'] = jobFairHasParticipant::with('jobEvent')->where('participant_id', auth()->id())->get();
    
    // return $data;
    return view('admin.Job.student_applied_fair_list', $data);
  }
}
