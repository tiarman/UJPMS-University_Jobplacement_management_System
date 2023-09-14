@extends('layout.site')

@section('stylesheet')
  <style>

      .row .event-main-design-align:hover {
          transform: scale(1.001);
          box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06);
      }
      i{ color: white;}
      .job-pair-border{
        width: 50px;
        border-bottom: 3px solid #0D6EFD;
      }
      .sort-section{
        background-color: rgb(16,38,74);
        color: white;
        font-weight: bold;
        padding: 10px;
      }
      .sort-date{
        background-color: #537bbf;
        color: white;
        font-weight: bold;
        padding: 10px;
      }
      .time-align-organizer {
          background-color: #008080;
          border-radius: 8px;
          padding: 5px;
          color: #fff;
      }
      .details{
      background-color: rgb(16,38,74);
      color: white !important;
      font-weight: bold;
    }
    .details:hover{
      background-color:brown !important;
      color: white !important;
    }
    .join{
        width: 112px !important;

      background-color:#0D6EFD;
      color: white !important;
      font-weight: bold;
    }
    .join:hover{
      background-color:  brown;
      color: white !important;
    }
    .bx-location-plus{
      /* color: #0D6EFD; */
      color: red;
      font-size: 20px;
    }
    .bxs-timer{
      color: #0D6EFD;
      font-size: 20px;
    }
  </style>

@endsection

@section('content')
<!-- Start home -->
<section class="bg-half page-next-level"> 
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="text-center text-white">
                    <h4 class="text-uppercase title mb-4">Job Fair List</h4>
                    <ul class="page-next d-inline-block mb-0">
                        <li><a href="index.html" class="text-uppercase font-weight-bold">Home</a></li>
                        <li><a href="#" class="text-uppercase font-weight-bold">Jobs</a></li> 
                        <li>
                            <span class="text-uppercase text-white font-weight-bold">Job Fair List</span> 
                        </li> 
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end home -->

  {{--  <section id="hero" class="align-items-center">

    <div class="row" style="margin-top: 40px;">
      <div class="col-md-12 text-center">
        <h1 class="justify-content-center" style="font-size: xx-large;;">You Deserve A Job That Loves You Back</h1>
        <h2 class="justify-content-center" >Create An Account Or Sign In</h2>
      </div>
    </div>
    <div class="row d-flex justify-content-center">
      <div class="row d-flex justify-content-center">
        <div class="col-sm-4" >
                  <img src="{{asset('assets/frontend/img/hero-img.png')}}" class="img-fluid animated" alt="">
          <div class="input-group">
            <input type="text" class="form-control rounded" placeholder="Enter Email" aria-label="Search" aria-describedby="search-addon"/>
          </div>
        </div>
      </div>
      <div class="row d-flex justify-content-center mt-2">
        <div class="col-sm-4 ">
          <button type="button" class="btn btn-success" style="width: 100%; background-color: #008080;">Continue With Email</button>
        </div>
      </div>
    </div>

        <div class="container">
          <div class="row">
            <div class="col-lg-12 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                 data-aos="fade-up" data-aos-delay="200">
              <h1>Job Fair</h1>
            </div>
          </div>
          
        </div>
  </section>  --}}
  {{--  <div class="container" data-aos="fade-up">
    <div class="section-title mt-5">
      <h2 style="text-align: center">Job Fair List</h2>
    </div>

<div class="row">
  <div class="col-12">
      <div class="tab-content mt-2" id="pills-tabContent">
          <div class="tab-pane fade show active" id="recent-job" role="tabpanel" aria-labelledby="recent-job-tab">
              <div class="row">


                @foreach($job_events as $val)
                  <div class="col-lg-12">
                      
                      <div
                          class="job-box bg-white overflow-hidden border rounded mt-4 position-relative overflow-hidden">
                          <div class="lable text-center pt-2 pb-2">
                              <ul class="list-unstyled best text-white mb-0 text-uppercase">
                                  <li class="list-inline-item"><i class='bx bx-star'></i></li>
                              </ul>
                          </div>
                          <div class="p-4">
                              <div class="row align-items-center">
                                  <div class="col-md-2">
                                      <div class="mo-mb-2">
                                          <img src="{{ asset($val->image ?? 'assets/placeholder.png') }}" alt=""
                                              class="img-fluid mx-auto d-block">
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div>
                                          <h5 class="f-18"><a href="#" class="text-dark">{{ $val->title }}</a>
                                          </h5>
                                          <p class="text-muted mb-0">Meets future talent.</p>
                                      </div>
                                  </div>
                                  <div class="col-md-3">
                                      <div>
                                          <p class="text-muted mb-0"><i class='bx bx-location-plus'></i>{{ $val->place }}</p>
                                      </div>
                                  </div>
                                  <div class="col-md-3">
                                      <div>
                                          <p class="text-muted mb-0 mo-mb-2"> <i class='bx bxs-timer'></i>{{ date('F d, Y', strtotime($val->start_date)) }}  to {{ date('F d, Y', strtotime($val->end_date)) }}</p>
                                      </div>
                                  </div>
                                 
                              </div>
                          </div>
                          <div class="p-3 bg-light">
                              <div class="row">
                                  <div class="col-md-4">
                                      <div>
                                          <p class="text-muted mb-0 mo-mb-2"><span class="text-dark">Organized by
                                                  :</span>{{ $val->institute->name ?? '' }}</p>
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div>
                                          <p class="text-muted mb-0 mo-mb-2">Work With Us And Stop Unemployment</p>
                                      </div>
                                  </div>
                                  <div class="col-md-4 d-flex justify-content-end">
                                      <div class="">
                                          <a href="{{ route('jobfair.details',$val->id) }}" class="details btn">Details</a>
                                      </div>
                                      @if((!\App\Helper\CustomHelper::canView('', 'Institute Head')))
                                      @if (!empty($participant))
                                      <div class=" ms-2">
                                        <button id="{{$val->id}}" class="join btn">{{\App\Helper\CustomHelper::checkEventParticipant($participant,$val->id,auth()->id())}}</button>
                                    </div>
                                      @else
                                      <button id="{{$val->id}}" class="join btn">Apply</button>
                                      @endif
                                      @endif
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                @endforeach
              </div>
          </div>
      </div>
  </div>
</div>
    

  </div>  --}}


  <!-- all jobs start -->
<section class="section bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title title-line pb-5">Attend a Job Fair</h4>
                    <p class="text-muted para-desc mx-auto mb-1">Find your desire job and apply now</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="tab-content mt-2" id="pills-tabContent">
                   

                  <div class="tab-pane fade show active" id="recent-job" role="tabpanel" aria-labelledby="recent-job-tab">
                    <div class="row">
                        <div class="col-lg-12">

                            
                            @foreach($job_events as $val)
                            <div class="job-box bg-white overflow-hidden border rounded mt-4 position-relative overflow-hidden">
                                <div class="lable text-center pt-2 pb-2">
                                    <ul class="list-unstyled best text-white mb-0 text-uppercase">
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    </ul>
                                </div>
                                <div class="p-4">
                                    <div class="row align-items-center">
                                        <div class="col-md-2">
                                            <div class="mo-mb-2">
                                                <img style="height: 84px; width: 84px" src="{{ asset($val->image ?? 'assets/placeholder.png') }}" alt="" class="img-fluid mx-auto d-block">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div>
                                                <h5 class="f-18"><a href="#" class="text-dark">{{ $val->title }}</a></h5>
                                                {{--  <p class="text-muted mb-0">{{$val->place}}</p>  --}}
                                                <p class="text-muted mb-0">{{ date('F d, Y', strtotime($val->start_date)) }}  to {{ date('F d, Y', strtotime($val->end_date)) }}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div>
                                                <p class="text-muted mb-0"><i class="mdi mdi-map-marker text-primary mr-2"></i>{{$val->place}}</p>
                                                {{--  <p class="text-muted mb-0"><i class="mdi mdi-map-marker text-primary mr-2"></i>{{ $val->location }}</p>  --}}
                                            </div>
                                        </div>
                                        {{-- <div class="col-md-2">
                                            <div>
                                                <p class="text-muted mb-0 mo-mb-2"><span class="text-primary">${{$val->salary}}</p>
                                            </div>
                                        </div> --}}
                                        <div class="col-md-2">
                                            <div>
                                                <p class="text-muted mb-0">{{$val->employment_status}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-3 bg-light">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div>
                                                <p class="text-muted mb-0 mo-mb-2"><span class="text-dark">Organize By :</span> {{ $val->institute->name_en ?? '' }}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                              <div style="
                                              display: flex;
                                              justify-content: space-evenly;
                                          ">
                                                <div class="">
                                                    <a href="{{ route('jobfair.details',$val->id) }}" class="details btn">Details</a>
                                                </div>
                                                @if((!\App\Helper\CustomHelper::canView('', 'Institute Head')))
                                                @if (!empty($participant))
                                                <div>
                                                  <button id="{{$val->id}}" class="join btn">{{\App\Helper\CustomHelper::checkEventParticipant($participant,$val->id,auth()->id())}}</button>
                                              </div>
                                                @else
                                                <button id="{{$val->id}}" class="join btn">Apply</button>
                                                @endif
                                                @endif
                                            </div>
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @endforeach

                            

                            

                        </div>
                    </div>
                </div>
                  
                </div>
            </div>
        </div>
        <!-- end row -->

        <!-- end row -->
        <div class="row">
            <div class="col-lg-12 mt-4 pt-2">
                <nav aria-label="Page navigation example">
                    <ul class="pagination job-pagination mb-0 justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                <i class="mdi mdi-chevron-double-left f-15"></i>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">
                                <i class="mdi mdi-chevron-double-right f-15"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- end containar -->
</section>
<!-- all jobs end -->

@endsection
@section('script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  $(document).on('click','.join',function(){
    let fairId = $(this).attr('id');
    // let joinOrNot = $(`#${fairId}`).text();
    // console.log('click',joinOrNot);
    // if(joinOrNot == 'Join'){
      $.ajax({
      type:"POST",
      url:"{{route('ajax.jobfair.apply')}}",
      dataType:"json",
      data: {'id': fairId},
      success: function(data){
        if(data == 400){
          Swal.fire("Sorry!", "Please Login First!", "error");
        }
        else{
          $( `#${fairId}`).text(data);
          Swal.fire("Congrats!", "Your request send for approval!", "success");
        //   console.log('get fair id');
        }
        
      }
    })
    // }

  });
</script>
@endsection
