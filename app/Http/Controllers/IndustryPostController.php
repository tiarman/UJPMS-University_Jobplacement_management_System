<?php

namespace App\Http\Controllers;

use App\Helper\RedirectHelper;
use App\Models\IndustryPost;
use App\Models\JobEvent;
use App\Models\jobFairHasParticipant;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndustryPostController extends Controller
{
  public function index()
  {

    $role =  Auth::User()->roles()->first();
    // check institute and industry for job post
    if ($role->name == 'Institute Head') {
      $data['datas'] = IndustryPost::where('institute_id', auth()->user()->id)->orderby('id', 'desc')->get();
    } else {
      $data['datas'] = IndustryPost::where('industry_id', auth()->user()->id)->orderby('id', 'desc')->get();
    }


    return view('admin.job.post.list', $data);
  }

  public function fairList()
  {
    $data['datas'] = jobFairHasParticipant::with('jobEvent')->where('participant_id', auth()->id())->get();
    // $data['datas'] = JobEvent::find(2)->jobFairHasParticipant;
    // return $data;
    return view('admin.Job.applied_fair_list', $data);
  }

  public function fairAttendedIndustriesList(Request $request)
  {
    $data['industries'] = JobEvent::with('jobFairHasIndustryParticipant.participant')->where('id', $request->id)->get();

    // return $data;
    return view('admin.event.job.industry', $data);
  }


  public function create()
  {
    // $data['industry_posts'] = IndustryPost::where('industry_id', auth()->user()->id)->get();
    $data['datas'] = Tag::orderby('id', 'desc')->get();

    $instituteId = auth()->user()->id;

    //   $dataa = IndustryPost::where('institute_id', $instituteId)->where('industry_id', '<>', null)->get();
    // return $dataa;

    return view('admin.job.post.create', $data);
  }

  public function createEventPost($id = null)
  {
    $data['event_id'] = $id;
    $data['industry_posts'] = IndustryPost::where('industry_id', auth()->user()->id)->get();
    return view('admin.job.post.create', $data);
  }

  public function manage($id = null)
  {
    if ($data['industry_post'] = IndustryPost::find($id)) {
      return view('admin.job.post.manage', $data);
    }
    return RedirectHelper::routeWarning('admin.job.post.create', '<strong>Sorry!!!</strong> Job Post not found');
  }

  public function store(Request $request)

  {
    $message = '<strong>Congratulations!!!</strong> Post successfully ';
    $rules = [
      'job_title' => 'required|string',
      'position' => 'required|string',
      'application_deadline' => 'required',
      'vacancy' => 'nullable|string',
      'ntvqf_level' => 'nullable|string',
      'employment_status' => 'nullable|string',
      'experience_requirement' => 'nullable|string',
      'salary' => 'nullable|string',
      'compensation' => 'nullable|string',
      'job_responsibility' => 'nullable|string',
      'additional_requirement' => 'nullable|string',
      'educational_requirement' => 'nullable|string',
      'job_context' => 'nullable|string',
      'location' => 'nullable|string',
      'company_name' => 'nullable|string',
      //        'technology'=> 'nullable|string',
      'tag' => 'nullable|string',
    ];
    if ($request->has('id')) {
      $job_event = IndustryPost::find($request->id);
      $message = $message . ' updated';
    } else {
      $job_event = new IndustryPost();
      $message = $message . ' created';
    }
    $request->validate($rules);
    try {
      $role =  Auth::User()->roles()->first();
      // check institute and industry for job post
      if ($role->name == 'Institute Head') {
        $job_event->institute_id = auth()->user()->id;
      } else {
        $job_event->industry_id = auth()->user()->id;
      }

      if ($request->has('job_event_id')) {
        $job_event->job_event_id = $request->job_event_id;
      }
      $job_event->job_title = $request->job_title;
      $job_event->position = $request->position;
      $job_event->vacancy = $request->vacancy;
      $job_event->location = $request->job_location;
      $job_event->job_context = $request->job_context;
      $job_event->experience_requirement = $request->experience_requirement;
      $job_event->additional_requirement = $request->additional_requirement;
      $job_event->salary = $request->salary;
      $job_event->compensation = $request->compensation;
      $job_event->educational_requirement = $request->educational_requirement;
      $job_event->job_responsibility = $request->job_responsibility;
      $job_event->application_deadline = $request->application_deadline;
      $job_event->employment_status = $request->employment_status;
      $job_event->company_name = $request->company_name;
      $job_event->ntvqf_level = $request->ntvqf_level;
      //      $job_event->technology = $request->technology;
      $job_event->tag = $request->tag;
      $job_event->status = IndustryPost::$statusArrays[0];
      // return $job_event;
      if ($job_event->save()) {
        return RedirectHelper::routeSuccess('admin.job.post.list', $message);
        //        return redirect()->back()->with($message);
      }
      return RedirectHelper::backWithInput();
    } catch (QueryException $e) {
      return $e;
      return RedirectHelper::backWithInputFromException();
    }
  }

  public function destroy(Request $request)
  {
    $id = $request->post('id');
    try {
      $industry_post = IndustryPost::find($id);
      if ($industry_post->delete()) {
        return 'success';
      }
    } catch (\Exception $e) {
    }
  }

  public function ajaxUpdateStatus(Request $request)
  {
    if ($request->isMethod("POST")) {
      $id = $request->post('id');
      $postStatus = $request->post('status');
      $status = strtolower($postStatus);
      $user = IndustryPost::find($id);
      if ($user->update(['status' => $status])) {
        return "success";
      }
    }
  }

  public function updateAjaxJobFairIndustryStatus(Request $request)
  {

    if ($request->isMethod("POST")) {

      $id           = $request->post('id');
      $postStatus   = $request->post('status');
      $status       = strtolower($postStatus);
      $participant  = jobFairHasParticipant::find($id);

      if ($participant->update(['status' => $status])) {
        return "success";
      }
    }
  }
}
