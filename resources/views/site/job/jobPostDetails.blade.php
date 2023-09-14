@extends('layout.site')

@section('stylesheet')
  
@endsection

@section('content')


<!-- Start home -->
<section class="bg-half page-next-level"> 
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="text-center text-white">
                    <h4 class="text-uppercase title mb-4">Job Detail</h4>
                    <ul class="page-next d-inline-block mb-0">
                        <li><a href="index.html" class="text-uppercase font-weight-bold">Home</a></li>
                        <li><a href="#" class="text-uppercase font-weight-bold">Jobs</a></li> 
                        <li>
                            <span class="text-uppercase text-white font-weight-bold">Job Detail</span> 
                        </li> 
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end home -->

<!-- JOB DETAILS START -->
<section class="section">
    <div class="container">
        {{--  <div class="row">
            <div class="col-lg-12">
                <h4 class="text-dark mb-3">Web Developer</h4>
            </div>
        </div>  --}}

        <div class="row">
            <div class="col-lg-8 col-md-7">
                <div class="job-detail border rounded p-4">
                    <div class="job-detail-content">
                        <img style="width: 100px; height: 100px;" src="{{asset($job_post_details->user->image ?? 'assets/placeholder.png')}}" alt="" class="img-fluid float-left mr-md-3 mr-2 mx-auto d-block">
                        <div class="job-detail-com-desc overflow-hidden d-block">
                            <h4 class="mb-2"><a href="#" class="text-dark">{{ $job_post_details->job_title ?? ''}}</a></h4>
                            <p class="text-muted mb-0"><i class="mdi mdi-link-variant mr-2"></i>{{ $job_post_details->position ?? ''}}</p>
                            <p class="text-muted mb-0"><i class="mdi mdi-map-marker mr-2"></i>{{ $job_post_details->location ?? ''}}</p>
                        </div>
                    </div>

                    <div class="job-detail-desc mt-4">
                        <p class="text-muted mb-3">{{$job_post_details->job_context ?? ''}}</p>

                        {{--  <p class="text-muted mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praelsentium voluptatum at deleniti atque corrupti quos dolores quas molestias excepturi occaecati cupiditate non provident, similique sunt culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga Temporibus autem quibusdam aut Ut at as enim ad minima veniam quis nostrum that exercitationem ullam corporis suscipit laboriosam officiis debitis aut rerum necessitatibus.</p>  --}}
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <h5 class="text-dark mt-4">Educational Requirement :</h5>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="job-detail border rounded mt-2 p-4">
                            <div class="job-detail-desc">
                                <p class="text-muted mb-3">{!!$job_post_details->educational_requirement!!}</p>

                                {{--  <p class="text-muted mb-0">Itaque earum rerum hic tenetur sapiente delectus aut reiciendis voluptatibus maiores that alias consequatur aut perferendis doloribus asperiores repellat Sed ut perspiciatis unde omnis iste sit at natus error sit voluptatem accusantium doloremque laudantium niti totame rem aperiam eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>  --}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <h5 class="text-dark mt-4">Job Requirment :</h5>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="job-detail border rounded mt-2 p-4">
                            <div class="job-detail-desc">



                                <div class="job-details-desc-item">
                                    {!!$job_post_details->job_responsibility!!}
                                </div>

                             

                                

                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <h5 class="text-dark mt-4">Compensation & Other Benefits :</h5>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="job-detail border rounded mt-2 p-4">
                            <div class="job-detail-desc">


                                <div class="job-details-desc-item">
                                    {{$job_post_details->compensation}}
                                </div>

                                

                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-5 mt-4 mt-sm-0">
                <div class="job-detail border rounded p-4">
                  
                  
                  
                  <div class="job-detail border rounded mt-4" style="background: #2f55d4; text-align: center;color: white">
                    {{--  <a href="#" class="btn btn-primary btn-block">Apply For Job</a>  --}}
                    @if(auth()->user())
                          @if(\App\Helper\CustomHelper::canView('', 'Student'))
                            @if($IsApplied == 1)
                              <button class="btn btn-success btn-job-list" disabled>You have applied</button>
                            @else
                              <button type="submit" class="btn btn-primary btn-job-list btn-apply" style="color: white">Apply Now</button>
                            @endif
                            {{--                        @endif--}}
                            {{--                        @if(auth()->user()->role('Student'))--}}
                          @else
                            <button type="submit" class="btn btn-job-list btn-apply-warning" style="color: white">Apply Now</button>
                          @endif
                        @else
                          <a class="btn btn-primary btn-job-list" style="color: white" href="{{ route('login') }}">Apply Now</a>
                        @endif
                </div>



                    <div class="job-detail-location pt-4">
                        {{--  <div class="job-details-desc-item">
                            <div class="float-left mr-2">
                                <i class="mdi mdi-bank text-muted"></i>
                            </div>
                            <p class="text-muted mb-2">: Web Themes.pvt.Ltd</p>
                        </div>  --}}

                        <div class="job-details-desc-item">
                            <div class="float-left mr-2">
                                <i class="mdi mdi-email text-muted"></i>
                            </div>
                            <p class="text-muted mb-2">: {{ $job_post_details->contact_mail ?? ''}}</p>
                        </div>

                        {{--  <div class="job-details-desc-item">
                            <div class="float-left mr-2">
                                <i class="mdi mdi-web text-muted"></i>
                            </div>
                            <p class="text-muted mb-2">: https://www.WebThemes.com</p>
                        </div>  --}}

                        <div class="job-details-desc-item">
                            <div class="float-left mr-2">
                                <i class="mdi mdi-cellphone-iphone text-muted"></i>
                            </div>
                            <p class="text-muted mb-2">: {{ $job_post_details->contact_phone ?? ''}}</p>
                        </div>

                        <div class="job-details-desc-item">
                            <div class="float-left mr-2">
                                <i class="mdi mdi-currency-bdt text-muted"></i>
                            </div>
                            <p class="text-muted mb-2">: {{ $job_post_details->salary ?? ''}}</p>
                        </div>

                        <div class="job-details-desc-item">
                            <div class="float-left mr-2">
                                <i class="mdi mdi-security text-muted"></i>
                            </div>
                            <p class="text-muted mb-2">: {{ $job_post_details->experience_requirement ?? ''}}Years Experience</p>
                        </div>

                        <div class="job-details-desc-item">
                            <div class="float-left mr-2">
                                <i class="mdi mdi-clock-outline text-muted"></i>
                            </div>
                            <p class="text-muted mb-2">: {{ $job_post_details->application_deadline ?? ''}} Application Deadline</p>
                        </div>

                        {{--  <h6 class="text-dark f-17 mt-3 mb-0">Share Job :</h6>
                        <ul class="social-icon list-inline mt-3 mb-0">
                            <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-google-plus"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-whatsapp"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-linkedin"></i></a></li>
                        </ul>  --}}
                    </div>
                </div>

                <div class="job-detail border rounded mt-4 p-4">
                    <h5 class="text-muted text-center pb-2"><i class="mdi mdi-clock-outline mr-2"></i>Opening Hours</h5>

                    <div class="job-detail-time border-top pt-4">
                        <ul class="list-inline mb-0">
                            <li class="clearfix text-muted border-bottom pb-3">
                                <div class="float-left">Monday</div>
                                <div class="float-right">
                                    <h5 class="f-13 mb-0">9AM - 7PM</h5>
                                </div>
                            </li>

                            <li class="clearfix text-muted border-bottom pb-3">
                                <div class="float-left">Tuesday</div>
                                <div class="float-right">
                                    <h5 class="f-13 mb-0">9AM - 7PM</h5>
                                </div>
                            </li>

                            <li class="clearfix text-muted border-bottom pb-3">
                                <div class="float-left">Wednesday</div>
                                <div class="float-right">
                                    <h5 class="f-13 mb-0">9AM - 7PM</h5>
                                </div>
                            </li>

                            <li class="clearfix text-muted border-bottom pb-3">
                                <div class="float-left">Thursday</div>
                                <div class="float-right">
                                    <h5 class="f-13 mb-0">9AM - 7PM</h5>
                                </div>
                            </li>

                            <li class="clearfix text-muted border-bottom pb-3">
                                <div class="float-left">Friday</div>
                                <div class="float-right">
                                    <h5 class="f-13 mb-0">9AM - 7PM</h5>
                                </div>
                            </li>

                            <li class="clearfix text-muted border-bottom pb-3">
                                <div class="float-left">Saturday</div>
                                <div class="float-right">
                                    <h5 class="f-13 mb-0">9AM - 7PM</h5>
                                </div>
                            </li>

                            <li class="clearfix text-muted pb-0">
                                <div class="float-left">Sunday</div>
                                <div class="float-right">
                                    <h5 class="f-13 mb-0">Closed</h5>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="job-detail border rounded mt-4" style="background: #2f55d4; text-align: center;color: white">
                    {{--  <a href="#" class="btn btn-primary btn-block">Apply For Job</a>  --}}
                    @if(auth()->user())
                          @if(\App\Helper\CustomHelper::canView('', 'Student'))
                            @if($IsApplied == 1)
                              <button class="btn btn-success btn-job-list" disabled>You have applied</button>
                            @else
                              <button type="submit" class="btn btn-primary btn-job-list btn-apply" style="color: white">Apply Now</button>
                            @endif
                            {{--                        @endif--}}
                            {{--                        @if(auth()->user()->role('Student'))--}}
                          @else
                            <button type="submit" class="btn btn-job-list btn-apply-warning" style="color: white">Apply Now</button>
                          @endif
                        @else
                          <a class="btn btn-primary btn-job-list" style="color: white" href="{{ route('login') }}">Apply Now</a>
                        @endif
                </div>
            </div>
        </div>
    </div>
</section>
<!-- JOB DETAILS END -->





  <div class="modal fade" id="warningModal" tabindex="-1" role="dialog" aria-labelledby="warningModal"
       aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 25%">
      <div class="modal-content">
        <div style="justify-content: right;">
        <div class="modal-header" style="justify-content: right;">
{{--          <h4>Delete User</h4>--}}
          <button type="button" class="btn btn-secondary btn-sm"  data-bs-dismiss="modal" >Close</button>
        </div>
{{--        <button type="button" class="btn btn-secondary btn-sm"  data-bs-dismiss="modal" >close</button>--}}
        <div class="modal-body" style="text-align: center;">
          <strong>Sorry!!! Only Students Can Apply</strong>
        </div>

        <div class="modal-footer mb-4">
{{--          <button type="button" class="btn btn-secondary btn-sm"  data-bs-dismiss="modal" >close</button>--}}
{{--          <button type="button" class="btn btn-success btn-sm yes-btn">Yes</button>--}}
        </div>
      </div>
    </div>
  </div>
  </div>
@endsection

@section('script')
  <script>
    $(document).on('click', '.btn-apply-warning', function () {
      $('#warningModal').modal('show')
    });
    // $(document).on('click', '.btn-apply-warning', function () {
    //   $('#warningModal').modal('show')
    // });
    $(document).on('click', '.btn-apply', function () {
      {{--var id = {{ request('id') }};--}}
      const pid = {{ request('id') }};
        $('.btn-apply').text("You have applied");
        $(this).addClass("btn-success");
        $(this).attr("disabled", true);
        $.ajax({
          type: "post",
          {{--url: "{{ url('tablet-data') }}/" + id,--}}
          url: "{{ route('ajax.post.apply') }}",
          dataType: "json",
          data: {'id': pid},
          success: function (data) {
            console.log(data);
            // if (data === "success") {
            //   $('.btn-apply').text("You have applied");
            //   $(this).addClass("btn-success");
            //   $(this).attr("disabled", true);
            // }
          }
        })
      // }
    })

    $(document).on('click', '.btn-delete', function () {
      var pid = $(this).data('id');
      $('.yes-btn').data('id', pid);
      $('#DeleteModal').modal('show')
    });
  </script>
@endsection
