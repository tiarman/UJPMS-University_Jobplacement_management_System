@extends('layout.site')

@section('stylesheet')
  <style>
    .about-t-s {
      /* margin-top: -50px; */
    }

    .touch-solve {
      font-weight: bold;
    }

    .about-t-s-container {
      color: whitesmoke !important;
      /* background-color: rgba(82, 122, 190, 0.993); */
      background-color: rgba(14, 36, 73, 0.993);
    }

    .about-ts {
      color: lightgray;
    }

    .client-head {
      font-weight: bold;
    }

    {{--<<<<<<< HEAD--}}

    .welcome-container {
      background-color: rgb(234, 234, 241);
    }

    .welcome-container > div {
      border: 1px solid rgba(34, 33, 33, 0.322);
    }

    .welcome-head {
      font-family: 'Times New Roman', Times, serif;
      font-size: 50px;
    }

    .welcome-bottom {
      width: 80px;
      border-bottom: 3px solid rgb(61, 114, 252);
    }

    .welcome-text {
      font-family: 'Times New Roman', Times, serif;
      color: rgb(102, 92, 92);
      text-align: justify;
      font-size: 22px;
    }

    /* [1] The container */
    .img-hover-zoom {
      /* height: 300px; [1.1] Set it as per your need */
      position: relative;
      overflow: hidden; /* [1.2] Hide the overflowing of child elements */
    }

    /* [2] Transition property for smooth transformation of images */
    .img-hover-zoom img {
      transition: transform .5s ease;
    }

    /* [3] Finally, transforming the image when container gets hovered */
    .img-hover-zoom:hover img {
      transform: scale(1.2);
      /* padding: 3px; */
    }

    .img-hover-zoom:hover {

      border-bottom: 3px solid rgb(61, 114, 252);
    }

    .img-hover-zoom {

      border-bottom: 3px solid rgb(43, 42, 42);
    }

    .img-text {
      position: absolute;
      bottom: 0px;
      left: 0px;
      padding: 5px 10px;
      background-color: rgb(61, 114, 252);
      color: white;
      font-weight: bold;
      font-size: 18px;
      /* z-index: 111; */
    }

    .graduates-list > a {
      text-decoration: none;
      color: white;

    }

    .graduates-list:hover i {
      transition: ease-in-out .5s;
      color: lightgreen;
      transform: scale(1.5);
    }
  </style>
@endsection


@section('content')


<!-- Start Home -->
<section class="bg-home" style="background: url('{{asset('assets/frontend/images/bg-home.jpg')}}') center center;">
    <div class="bg-overlay"></div>
    <div class="home-center">
        <div class="home-desc-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="title-heading text-center text-white">
                            <h6 class="small-title text-uppercase text-light mb-3">Find jobs, create trackable resumes and enrich your applications.</h6>
                            <h1 class="heading font-weight-bold mb-4">The Easiest Way to Get Your New Job</h1>
                        </div>
                    </div>
                </div>
                <div class="home-form-position">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="home-registration-form p-4 mb-3">
                                <form class="registration-form">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6">
                                            <div class="registration-form-box">
                                                <i class="fa fa-briefcase"></i>
                                                <input type="text" id="exampleInputName1" class="form-control rounded registration-input-box" placeholder="Job keybords...">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="registration-form-box">
                                                <i class="fa fa-location-arrow"></i>
                                                <select id="select-country" class="demo-default">
                                                    <option value="">Location</option>
                                                    <option value="AF">Afghanistan</option>
                                                    <option value="AX">&Aring;land Islands</option>
                                                    <option value="AL">Albania</option>
                                                    <option value="DZ">Algeria</option>
                                                    <option value="AS">American Samoa</option>
                                                    <option value="AD">Andorra</option>
                                                    <option value="AO">Angola</option>
                                                    <option value="AI">Anguilla</option>
                                                    <option value="AQ">Antarctica</option>
                                                    <option value="AG">Antigua
                                                    <option value="ZW">Zimbabwe</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="registration-form-box">
                                                <i class="fa fa-list-alt"></i>
                                                <select id="select-category" class="demo-default">
                                                    <option value="">Categories...</option>
                                                    <option value="4">Accounting</option>
                                                    <option value="1">IT & Software</option>
                                                    <option value="3">Marketing</option>
                                                    <option value="5">Banking</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="registration-form-box">
                                                <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary btn-block" value="Submit">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end home -->



<!-- popular category start -->
<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title title-line pb-5">Popular Category</h4>
                    <p class="text-muted para-desc mx-auto mb-1">Post a job to tell us about your project. We'll quickly match you with the right freelancers.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 mt-4 pt-2">
                <a href="javascript:void(0)">
                    <div class="popu-category-box bg-light rounded text-center p-4">
                        <div class="popu-category-icon mb-3">
                            <i class="mdi mdi-account d-inline-block rounded-pill h3 text-primary"></i>
                        </div>
                        <div class="popu-category-content">
                            <h5 class="mb-2 text-dark title">Developer</h5>
                            <p class="text-success mb-0 rounded">780 Jobs</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 mt-4 pt-2">
                <a href="javascript:void(0)">
                    <div class="popu-category-box bg-light rounded text-center p-4">
                        <div class="popu-category-icon mb-3">
                            <i class="mdi mdi-desktop-classic d-inline-block rounded-pill h3 text-primary"></i>
                        </div>
                        <div class="popu-category-content">
                            <h5 class="mb-2 text-dark title">Technology</h5>
                            <p class="text-success mb-0 rounded">1270 Jobs</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 mt-4 pt-2">
                <a href="javascript:void(0)">
                    <div class="popu-category-box bg-light rounded text-center p-4">
                        <div class="popu-category-icon mb-3">
                            <i class="mdi mdi-bank d-inline-block rounded-pill h3 text-primary"></i>
                        </div>
                        <div class="popu-category-content">
                            <h5 class="mb-2 text-dark title">Government</h5>
                            <p class="text-success mb-0 rounded">2024 Jobs</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 mt-4 pt-2">
                <a href="javascript:void(0)">
                    <div class="popu-category-box bg-light rounded text-center p-4">
                        <div class="popu-category-icon mb-3">
                            <i class="mdi mdi-auto-fix d-inline-block rounded-pill h3 text-primary"></i>
                        </div>
                        <div class="popu-category-content">
                            <h5 class="mb-2 text-dark title">Accounting / Finance</h5>
                            <p class="text-success mb-0 rounded">786 Jobs</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 mt-4 pt-2">
                <a href="javascript:void(0)">
                    <div class="popu-category-box bg-light rounded text-center p-4">
                        <div class="popu-category-icon mb-3">
                            <i class="mdi mdi-office-building d-inline-block rounded-pill h3 text-primary"></i>
                        </div>
                        <div class="popu-category-content">
                            <h5 class="mb-2 text-dark title">Construction / Facilities</h5>
                            <p class="text-success mb-0 rounded">2156 Jobs</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 mt-4 pt-2">
                <a href="javascript:void(0)">
                    <div class="popu-category-box bg-light rounded text-center p-4">
                        <div class="popu-category-icon mb-3">
                            <i class="mdi mdi-telegram d-inline-block rounded-pill h3 text-primary"></i>
                        </div>
                        <div class="popu-category-content">
                            <h5 class="mb-2 text-dark title">Tele-communications</h5>
                            <p class="text-success mb-0 rounded">256 Jobs</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 mt-4 pt-2">
                <a href="javascript:void(0)">
                    <div class="popu-category-box bg-light rounded text-center p-4">
                        <div class="popu-category-icon mb-3">
                            <i class="mdi mdi-television-classic d-inline-block rounded-pill h3 text-primary"></i>
                        </div>
                        <div class="popu-category-content">
                            <h5 class="mb-2 text-dark title">Design & Multimedia</h5>
                            <p class="text-success mb-0 rounded">585 Jobs</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 mt-4 pt-2">
                <a href="javascript:void(0)">
                    <div class="popu-category-box bg-light rounded text-center p-4">
                        <div class="popu-category-icon mb-3">
                            <i class="mdi mdi-human d-inline-block rounded-pill h3 text-primary"></i>
                        </div>
                        <div class="popu-category-content">
                            <h5 class="mb-2 text-dark title">Human Resource</h5>
                            <p class="text-success mb-0 rounded">548 Jobs</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 text-center mt-4 pt-2">
                <a href="javascript:void(0)" class="btn btn-primary-outline">Browse All Categories <i class="mdi mdi-chevron-right"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- popular category end -->


<!-- counter start -->
<section class="section bg-counter position-relative" style="background: url('{{asset('assets/frontend/images/bg-counters.jpg')}}') center center;">
    <div class="bg-overlay bg-overlay-gradient"></div>
    <div class="container">
        <div class="row" id="counter">
            <div class="col-md-3 col-6">
                <div class="home-counter pt-4 pb-4">
                    <div class="float-left counter-icon mr-3">
                        <i class="mdi mdi-bank h1 text-white"></i>
                    </div>
                    <div class="counter-content overflow-hidden">
                        <h1 class="counter-value text-white mb-1" data-count="{{$numberofindustries ?? '0'}}">{{$numberofindustries ?? '0'}}+</h1>
                        <p class="counter-name text-white text-uppercase mb-0">Companies</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-6">
                <div class="home-counter pt-4 pb-4">
                    <div class="float-left counter-icon mr-3">
                        <i class="mdi mdi-file-document-box h1 text-white"></i>
                    </div>
                    <div class="counter-content overflow-hidden">
                        <h1 class="counter-value text-white mb-1" data-count="{{$numberoffair ?? '0'}}">{{$numberoffair ?? '0'}}+</h1>
                        <p class="counter-name text-white text-uppercase mb-0">Job fair Organized</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-6">
                <div class="home-counter pt-4 pb-4">
                    <div class="float-left counter-icon mr-3">
                        <i class="mdi mdi-calendar-multiple-check h1 text-white"></i>
                    </div>
                    <div class="counter-content overflow-hidden">
                        <h1 class="counter-value text-white mb-1" data-count="{{$numberofjobs ?? '0'}}">{{$numberofjobs ?? '0'}}+</h1>
                        <p class="counter-name text-white text-uppercase mb-0">Job Posted</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="home-counter pt-4 pb-4">
                    <div class="float-left counter-icon mr-3">
                        <i class="mdi mdi-account-multiple-plus h1 text-white"></i>
                    </div>
                    <a href="{{route('graduate.list')}}" class="counter-content overflow-hidden">
                        <h1 class="counter-value text-white mb-1" data-count="{{$numberofstudents ?? '0'}}">{{$numberofstudents ?? '0'}}+</h1>
                        <p class="counter-name text-white text-uppercase mb-0">Students</p>
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- counter end -->

<!-- all jobs start -->
<section class="section bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title title-line pb-5">Find Your Jobs</h4>
                    <p class="text-muted para-desc mx-auto mb-1">Post a job to tell us about your project. We'll quickly match you with the right freelancers.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9 text-center mt-4 pt-2">
                <ul class="nav nav-pills nav nav-pills bg-white rounded nav-justified flex-column flex-sm-row" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link rounded active" id="recent-job-tab" data-toggle="pill" href="#recent-job" role="tab" aria-controls="recent-job" aria-selected="true">Recent Jobs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link rounded" id="featured-job-tab" data-toggle="pill" href="#featured-job" role="tab" aria-controls="featured-job" aria-selected="false">Featured Jobs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link rounded" id="part-job-tab" data-toggle="pill" href="#part-job" role="tab" aria-controls="part-job" aria-selected="false">Part Time</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link rounded" id="full-job-tab" data-toggle="pill" href="#full-job" role="tab" aria-controls="full-job" aria-selected="false">Full Time</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="tab-content mt-2" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="recent-job" role="tabpanel" aria-labelledby="recent-job-tab">
                        <div class="row">
                            <div class="col-lg-12">

                                
                                @foreach($jobpost as $val)
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
                                                    <img style="height: 84px; width: 84px" src="{{asset($val->user->image ?? 'assets/placeholder.png')}}" alt="" class="img-fluid mx-auto d-block">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div>
                                                    <h5 class="f-18"><a href="#" class="text-dark">{{ $val->job_title }}</a></h5>
                                                    <p class="text-muted mb-0">Web Themes pvt.Ltd</p>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div>
                                                    <p class="text-muted mb-0"><i class="mdi mdi-map-marker text-primary mr-2"></i>{{ $val->location }}</p>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div>
                                                    <p class="text-muted mb-0 mo-mb-2"><span class="text-primary">${{$val->salary}}</p>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div>
                                                    <p class="text-muted mb-0">{{$val->employment_status}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 bg-light">
                                        <div class="row">
                                            <div class="col-md-10">
                                                <div>
                                                    <p class="text-muted mb-0 mo-mb-2"><span class="text-dark">Experience :</span> {{$val->experience_requirement}} years</p>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div>
                                                    <a href="{{ route('job_post_details',$val->id) }}" class="text-primary">Job Details <i class="mdi mdi-chevron-double-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @endforeach

                                

                                

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="featured-job" role="tabpanel" aria-labelledby="featured-job-tab">
                        <div class="row">
                            <div class="col-lg-12">

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
                                                    <img src="{{asset('assets/frontend/images/featured-job/img-2.png')}}" alt="" class="img-fluid mx-auto d-block">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div>
                                                    <h5 class="f-18"><a href="#" class="text-dark">Php Developer</a></h5>
                                                    <p class="text-muted mb-0">Web Themes pvt.Ltd</p>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div>
                                                    <p class="text-muted mb-0"><i class="mdi mdi-map-marker text-primary mr-2"></i>Berkshire Circle Knoxville</p>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div>
                                                    <p class="text-muted mb-0 mo-mb-2"><span class="text-primary">$</span>900-1100/m</p>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div>
                                                    <p class="text-muted mb-0">Full Time</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 bg-light">
                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="mo-mb-2">
                                                    <p class="text-muted mb-0 mo-mb-2"><span class="text-dark">Experience :</span> 2 - 3 years</p>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div>
                                                    <a href="#" class="text-primary">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="job-box bg-white overflow-hidden border rounded mt-4 position-relative overflow-hidden">
                                    <div class="lable text-center pt-2 pb-2">
                                        <ul class="list-unstyled best text-white mb-0 text-uppercase">
                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="p-4">
                                        @foreach($jobpost as $val)
                                        <div class="row align-items-center">
                                            <div class="col-md-2">
                                                <div class="mo-mb-2">
                                                    <img src="{{asset($val->user->image ?? 'assets/placeholder.png')}}" alt="" class="img-fluid mx-auto d-block">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div>
                                                    <h5 class="f-18"><a href="#" class="text-dark">{{ $val->job_title }}</a></h5>
                                                    <p class="text-muted mb-0">Web Technology pvt.Ltd</p>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div>
                                                    <p class="text-muted mb-0"><i class="mdi mdi-map-marker text-primary mr-2"></i>Oakridge Lane Richardson</p>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div>
                                                    <p class="text-muted mb-0 mo-mb-2"><span class="text-primary">$</span>1000-1200/m</p>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div>
                                                    <p class="text-muted mb-0">Full Time</p>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="p-3 bg-light">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div>
                                                    <p class="text-muted mb-0 mo-mb-2"><span class="text-dark">Experience :</span> 1 - 2 years</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div>
                                                    <p class="text-muted mb-0 mo-mb-2"><span class="text-dark">Notes :</span> languages only differ in their grammar. </p>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div>
                                                    <a href="#" class="text-primary">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{--  <div class="job-box bg-white overflow-hidden border rounded mt-4 position-relative overflow-hidden">
                                    <div class="lable text-center pt-2 pb-2">
                                        <ul class="list-unstyled best text-white mb-0 text-uppercase">
                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="p-4">
                                        <div class="row align-items-center">
                                            <div class="col-md-2">
                                                <div class="mo-mb-2">
                                                    <img src="{{asset('assets/frontend/images/featured-job/img-4.png')}}" alt="" class="img-fluid mx-auto d-block">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div>
                                                    <h5 class="f-18"><a href="#" class="text-dark">UI/UX Designer</a></h5>
                                                    <p class="text-muted mb-0">Web Themes pvt.Ltd</p>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div>
                                                    <p class="text-muted mb-0"><i class="mdi mdi-map-marker text-primary mr-2"></i>Pinewood Drive Chicago</p>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div>
                                                    <p class="text-muted mb-0 mo-mb-2"><span class="text-primary">$</span>1000-1200/m</p>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div>
                                                    <p class="text-muted mb-0">Freelancer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 bg-light">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div>
                                                    <p class="text-muted mb-0 mo-mb-2"><span class="text-dark">Experience :</span> 1 - 2 years</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div>
                                                    <p class="text-muted mb-0 mo-mb-2"><span class="text-dark">Notes :</span> languages only differ in their grammar. </p>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div>
                                                    <a href="#" class="text-primary">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>  --}}

                                {{--  <div class="job-box bg-white overflow-hidden border rounded mt-4 position-relative overflow-hidden">
                                    <div class="lable text-center pt-2 pb-2">
                                        <ul class="list-unstyled best text-white mb-0 text-uppercase">
                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="p-4">
                                        <div class="row align-items-center">
                                            <div class="col-md-2">
                                                <div class="mo-mb-2">
                                                    <img src="{{asset('assets/frontend/images/featured-job/img-3.png')}}" alt="" class="img-fluid mx-auto d-block">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div>
                                                    <h5 class="f-18"><a href="#" class="text-dark">Graphic Designer</a></h5>
                                                    <p class="text-muted mb-0">Web Technology pvt.Ltd</p>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div>
                                                    <p class="text-muted mb-0"><i class="mdi mdi-map-marker text-primary mr-2"></i>Sumner Street Anaheim</p>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div>
                                                    <p class="text-muted mb-0 mo-mb-2"><span class="text-primary">$</span>800-1000/m</p>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div>
                                                    <p class="text-muted mb-0">Part Time</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 bg-light">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div>
                                                    <p class="text-muted mb-0 mo-mb-2"><span class="text-dark">Experience :</span> 0 - 1 years</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div>
                                                    <p class="text-muted mb-0 mo-mb-2"><span class="text-dark">Notes :</span> languages only differ in their grammar. </p>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div>
                                                    <a href="#" class="text-primary">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>  --}}

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="part-job" role="tabpanel" aria-labelledby="part-job-tab">
                        <div class="row">
                            <div class="col-lg-12">

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
                                                    <img src="{{asset('assets/frontend/images/featured-job/img-1.png')}}" alt="" class="img-fluid mx-auto d-block">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div>
                                                    <h5 class="f-18"><a href="#" class="text-dark">Web Developer</a></h5>
                                                    <p class="text-muted mb-0">Web Technology pvt.Ltd</p>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div>
                                                    <p class="text-muted mb-0"><i class="mdi mdi-map-marker text-primary mr-2"></i>Oakridge Lane Richardson</p>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div>
                                                    <p class="text-muted mb-0 mo-mb-2"><span class="text-primary">$</span>1000-1200/m</p>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div>
                                                    <p class="text-muted mb-0">Full Time</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 bg-light">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div>
                                                    <p class="text-muted mb-0 mo-mb-2"><span class="text-dark">Experience :</span> 1 - 2 years</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div>
                                                    <p class="text-muted mb-0 mo-mb-2"><span class="text-dark">Notes :</span> languages only differ in their grammar. </p>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div>
                                                    <a href="#" class="text-primary">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

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
                                                    <img src="{{asset('assets/frontend/images/featured-job/img-2.png')}}" alt="" class="img-fluid mx-auto d-block">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div>
                                                    <h5 class="f-18"><a href="#" class="text-dark">Php Developer</a></h5>
                                                    <p class="text-muted mb-0">Web Themes pvt.Ltd</p>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div>
                                                    <p class="text-muted mb-0"><i class="mdi mdi-map-marker text-primary mr-2"></i>Berkshire Circle Knoxville</p>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div>
                                                    <p class="text-muted mb-0 mo-mb-2"><span class="text-primary">$</span>900-1100/m</p>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div>
                                                    <p class="text-muted mb-0">Full Time</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 bg-light">
                                        <div class="row">
                                            <div class="col-md-10">
                                                <div>
                                                    <p class="text-muted mb-0 mo-mb-2"><span class="text-dark">Experience :</span> 2 - 3 years</p>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div>
                                                    <a href="#" class="text-primary">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

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
                                                    <img src="{{asset('assets/frontend/images/featured-job/img-3.png')}}" alt="" class="img-fluid mx-auto d-block">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div>
                                                    <h5 class="f-18"><a href="#" class="text-dark">Graphic Designer</a></h5>
                                                    <p class="text-muted mb-0">Web Technology pvt.Ltd</p>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div>
                                                    <p class="text-muted mb-0"><i class="mdi mdi-map-marker text-primary mr-2"></i>Sumner Street Anaheim</p>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div>
                                                    <p class="text-muted mb-0 mo-mb-2"><span class="text-primary">$</span>800-1000/m</p>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div>
                                                    <p class="text-muted mb-0">Part Time</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 bg-light">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div>
                                                    <p class="text-muted mb-0 mo-mb-2"><span class="text-dark">Experience :</span> 0 - 1 years</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div>
                                                    <p class="text-muted mb-0 mo-mb-2"><span class="text-dark">Notes :</span> languages only differ in their grammar. </p>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div>
                                                    <a href="#" class="text-primary">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

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
                                                    <img src="{{asset('assets/frontend/images/featured-job/img-4.png')}}" alt="" class="img-fluid mx-auto d-block">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div>
                                                    <h5 class="f-18"><a href="#" class="text-dark">UI/UX Designer</a></h5>
                                                    <p class="text-muted mb-0">Web Themes pvt.Ltd</p>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div>
                                                    <p class="text-muted mb-0"><i class="mdi mdi-map-marker text-primary mr-2"></i>Pinewood Drive Chicago</p>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div>
                                                    <p class="text-muted mb-0 mo-mb-2"><span class="text-primary">$</span>1000-1200/m</p>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div>
                                                    <p class="text-muted mb-0">Freelancer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 bg-light">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div>
                                                    <p class="text-muted mb-0 mo-mb-2"><span class="text-dark">Experience :</span> 1 - 2 years</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div>
                                                    <p class="text-muted mb-0 mo-mb-2"><span class="text-dark">Notes :</span> languages only differ in their grammar. </p>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div>
                                                    <a href="#" class="text-primary">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="full-job" role="tabpanel" aria-labelledby="full-job-tab">
                        <div class="row">
                            <div class="col-lg-12">

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
                                                    <img src="{{asset('assets/frontend/images/featured-job/img-2.png')}}" alt="" class="img-fluid mx-auto d-block">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div>
                                                    <h5 class="f-18"><a href="#" class="text-dark">Php Developer</a></h5>
                                                    <p class="text-muted mb-0">Web Themes pvt.Ltd</p>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div>
                                                    <p class="text-muted mb-0"><i class="mdi mdi-map-marker text-primary mr-2"></i>Berkshire Circle Knoxville</p>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div>
                                                    <p class="text-muted mb-0 mo-mb-2"><span class="text-primary">$</span>900-1100/m</p>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div>
                                                    <p class="text-muted mb-0">Full Time</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 bg-light">
                                        <div class="row">
                                            <div class="col-md-10">
                                                <div>
                                                    <p class="text-muted mb-0 mo-mb-2"><span class="text-dark">Experience :</span> 2 - 3 years</p>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div>
                                                    <a href="#" class="text-primary">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

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
                                                    <img src="{{asset('assets/frontend/images/featured-job/img-1.png')}}" alt="" class="img-fluid mx-auto d-block">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div>
                                                    <h5 class="f-18"><a href="#" class="text-dark">Web Developer</a></h5>
                                                    <p class="text-muted mb-0">Web Technology pvt.Ltd</p>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div>
                                                    <p class="text-muted mb-0"><i class="mdi mdi-map-marker text-primary mr-2"></i>Oakridge Lane Richardson</p>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div>
                                                    <p class="text-muted mb-0 mo-mb-2"><span class="text-primary">$</span>1000-1200/m</p>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div>
                                                    <p class="text-muted mb-0">Full Time</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 bg-light">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div>
                                                    <p class="text-muted mb-0 mo-mb-2"><span class="text-dark">Experience :</span> 1 - 2 years</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div>
                                                    <p class="text-muted mb-0 mo-mb-2"><span class="text-dark">Notes :</span> languages only differ in their grammar. </p>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div>
                                                    <a href="#" class="text-primary">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

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
                                                    <img src="{{asset('assets/frontend/images/featured-job/img-4.png')}}" alt="" class="img-fluid mx-auto d-block">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div>
                                                    <h5 class="f-18"><a href="#" class="text-dark">UI/UX Designer</a></h5>
                                                    <p class="text-muted mb-0">Web Themes pvt.Ltd</p>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div>
                                                    <p class="text-muted mb-0"><i class="mdi mdi-map-marker text-primary mr-2"></i>Pinewood Drive Chicago</p>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div>
                                                    <p class="text-muted mb-0 mo-mb-2"><span class="text-primary">$</span>1000-1200/m</p>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div>
                                                    <p class="text-muted mb-0">Freelancer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 bg-light">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div>
                                                    <p class="text-muted mb-0 mo-mb-2"><span class="text-dark">Experience :</span> 1 - 2 years</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div>
                                                    <p class="text-muted mb-0 mo-mb-2"><span class="text-dark">Notes :</span> languages only differ in their grammar. </p>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div>
                                                    <a href="#" class="text-primary">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

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
                                                    <img src="{{asset('assets/frontend/images/featured-job/img-3.png')}}" alt="" class="img-fluid mx-auto d-block">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div>
                                                    <h5 class="f-18"><a href="#" class="text-dark">Graphic Designer</a></h5>
                                                    <p class="text-muted mb-0">Web Technology pvt.Ltd</p>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div>
                                                    <p class="text-muted mb-0"><i class="mdi mdi-map-marker text-primary mr-2"></i>Sumner Street Anaheim</p>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div>
                                                    <p class="text-muted mb-0 mo-mb-2"><span class="text-primary">$</span>800-1000/m</p>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div>
                                                    <p class="text-muted mb-0">Part Time</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 bg-light">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div>
                                                    <p class="text-muted mb-0 mo-mb-2"><span class="text-dark">Experience :</span> 0 - 1 years</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div>
                                                    <p class="text-muted mb-0 mo-mb-2"><span class="text-dark">Notes :</span> languages only differ in their grammar. </p>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div>
                                                    <a href="#" class="text-primary">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- end row -->
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

<!-- How it Work start -->
<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title title-line pb-5">How It Work</h4>
                    <p class="text-muted para-desc mx-auto mb-1">Post a job to tell us about your project. We'll quickly match you with the right freelancers.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mt-4 pt-2">
                <div class="how-it-work-box bg-light p-4 text-center rounded shadow">
                    <div class="how-it-work-img position-relative rounded-pill mb-3">
                        <img src="{{asset('assets/frontend/images/how-it-work/img-1.png')}}" alt="" class="mx-auto d-block" height="50">
                    </div>
                    <div>
                        <h5>Register an account</h5>
                        <p class="text-muted">Donec pede justo fringilla vel aliquet nec vulputate eget arcu. In enim justo rhoncus ut a, justo.</p>
                        <a href="#" class="text-primary">Read more <i class="mdi mdi-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-4 pt-2">
                <div class="how-it-work-box bg-light p-4 text-center rounded shadow">
                    <div class="how-it-work-img position-relative rounded-pill mb-3">
                        <img src="{{asset('assets/frontend/images/how-it-work/img-2.png')}}" alt="" class="mx-auto d-block" height="50">
                    </div>
                    <div>
                        <h5>Search your job</h5>
                        <p class="text-muted">Aliquam lorem ante dapibus in, viverra feugiatquis a tellus. Phasellus viverra nulla ut Quisque rutrum.</p>
                        <a href="#" class="text-primary">Read more <i class="mdi mdi-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-4 pt-2">
                <div class="how-it-work-box bg-light p-4 text-center rounded shadow">
                    <div class="how-it-work-img position-relative rounded-pill mb-3">
                        <img src="{{asset('assets/frontend/images/how-it-work/img-3.png')}}" alt="" class="mx-auto d-block" height="50">
                    </div>
                    <div>
                        <h5>Apply for job</h5>
                        <p class="text-muted">Nullam dictum felis eu pede mollis pretiumetus Integer tincidunt. Cras dapibus. semper nisi.</p>
                        <a href="#" class="text-primary">Read more <i class="mdi mdi-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- How it Work end -->


<!-- testimonial start -->
<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title title-line pb-5">Our Success Stories</h4>
                    <p class="text-muted para-desc mx-auto mb-1">Post a job to tell us about your project. We'll quickly match you with the right freelancers.</p>
                </div>
            </div>
        </div>
        <div class="row pt-4">
            <div class="col-lg-12">
                <div id="owl-testi" class="owl-carousel owl-theme">
                    <div class="item testi-box rounded p-4 mr-3 ml-2 mb-4 bg-light position-relative">
                        <p class="text-muted mb-5">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consecteturqui adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam</p>
                        <div class="clearfix">
                            <div class="testi-img float-left mr-3">
                                <img src="{{asset('assets/frontend/images/testi/img-1.png')}}" height="64" alt="" class="rounded-circle shadow">
                            </div>
                            <h5 class="f-18 pt-1">Kevin Stewart</h5>
                            <p class="text-muted mb-0">Web Designer at xyz Company</p>
                            <div class="testi-icon">
                                <i class="mdi mdi-format-quote-open display-2"></i>
                            </div>
                        </div>
                    </div>

                    <div class="item testi-box rounded p-4 mr-3 ml-2 bg-light position-relative">
                        <p class="text-muted mb-5">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo</p>
                        <div class="clearfix">
                            <div class="testi-img float-left mr-3">
                                <img src="{{asset('assets/frontend/images/testi/img-2.png')}}" height="64" alt="" class="rounded-circle shadow">
                            </div>
                            <h5 class="f-18 pt-1">Charles Garrett</h5>
                            <p class="text-muted mb-0">Marketing manager at abc Company</p>
                            <div class="testi-icon">
                                <i class="mdi mdi-format-quote-open display-2"></i>
                            </div>
                        </div>
                    </div>

                    <div class="item testi-box rounded p-4 mr-3 ml-2 bg-light position-relative">
                        <p class="text-muted mb-5">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consecteturqui adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam</p>
                        <div class="clearfix">
                            <div class="testi-img float-left mr-3">
                                <img src="{{asset('assets/frontend/images/testi/img-3.png')}}" height="64" alt="" class="rounded-circle shadow">
                            </div>
                            <h5 class="f-18 pt-1">Perry Martinez</h5>
                            <p class="text-muted mb-0">Marketing manager at abc Company</p>
                            <div class="testi-icon">
                                <i class="mdi mdi-format-quote-open display-2"></i>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container mt-100 mt-60">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title title-line pb-5">Our Client's</h4>
                    <p class="text-muted para-desc mx-auto mb-1">Post a job to tell us about your project. We'll quickly match you with the right freelancers.</p>
                </div>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-2 col-md-4 col-6 mt-4 pt-2 text-center">
                <img src="{{asset('assets/frontend/images/clients/1.png')}}" height="50" alt="">
            </div><!--end col-->
            <div class="col-lg-2 col-md-4 col-6 mt-4 pt-2 text-center">
                <img src="{{asset('assets/frontend/images/clients/2.png')}}" height="50" alt="">
            </div><!--end col-->
            <div class="col-lg-2 col-md-4 col-6 mt-4 pt-2 text-center">
                <img src="{{asset('assets/frontend/images/clients/3.png')}}" height="50" alt="">
            </div><!--end col-->
            <div class="col-lg-2 col-md-4 col-6 mt-4 pt-2 text-center">
                <img src="{{asset('assets/frontend/images/clients/4.png')}}" height="50" alt="">
            </div><!--end col-->
            <div class="col-lg-2 col-md-4 col-6 mt-4 pt-2 text-center">
                <img src="{{asset('assets/frontend/images/clients/1.png')}}" height="50" alt="">
            </div><!--end col-->
            <div class="col-lg-2 col-md-4 col-6 mt-4 pt-2 text-center">
                <img src="{{asset('assets/frontend/images/clients/2.png')}}" height="50" alt="">
            </div><!--end col-->
        </div>
    </div>
</section>
<!-- testimonial end -->

<!-- blog start -->
<section class="section bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title title-line pb-5">Career advice</h4>
                    <p class="text-muted para-desc mx-auto mb-1">Post a job to tell us about your project. We'll quickly match you with the right freelancers.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="blog position-relative overflow-hidden shadow rounded">
                    <div class="position-relative overflow-hidden">
                        <img src="{{asset('assets/frontend/images/blog/img-1.jpg')}}" class="img-fluid rounded-top" alt="">
                        <div class="overlay rounded-top bg-dark"></div>
                        <div class="likes">
                            <ul class="list-unstyled mb-0">
                                <li class="list-inline-item mr-2"><a href="javascript:void(0)" class="text-white like"><i class="mdi mdi-heart-outline mr-1"></i>33</a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="text-white comments"><i class="mdi mdi-comment-outline mr-1"></i>08</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="content p-4">
                        <h4><a href="javascript:void(0)" class="title text-dark">How apps is the IT world</a></h4>
                        <p class="text-muted">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium, totam rem aperiam</p>
                        <a href="#" class="text-dark readmore">Read more <i class="mdi mdi-chevron-right"></i></a>
                    </div>
                    <div class="author">
                        <p class=" mb-0"><i class="mdi mdi-account text-light"></i> <a href="javascript:void(0)" class="text-light user">Dirio Walls</a></p>
                        <p class="text-light mb-0 date"><i class="mdi mdi-calendar-check"></i> 25 Sep, 2019</p>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="blog position-relative overflow-hidden shadow rounded">
                    <div class="position-relative overflow-hidden">
                        <img src="{{asset('assets/frontend/images/blog/img-2.jpg')}}" class="img-fluid rounded-top" alt="">
                        <div class="overlay rounded-top bg-dark"></div>
                        <div class="likes">
                            <ul class="list-unstyled mb-0">
                                <li class="list-inline-item mr-2"><a href="javascript:void(0)" class="text-white like"><i class="mdi mdi-heart-outline mr-1"></i>33</a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="text-white comments"><i class="mdi mdi-comment-outline mr-1"></i>08</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="content p-4">
                        <h4><a href="javascript:void(0)" class="title text-dark">Vestibulum ante ipsum primis</a></h4>
                        <p class="text-muted">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium, totam rem aperiam</p>
                        <a href="#" class="text-dark readmore">Read more <i class="mdi mdi-chevron-right"></i></a>
                    </div>
                    <div class="author">
                        <p class=" mb-0"><i class="mdi mdi-account text-light"></i> <a href="javascript:void(0)" class="text-light user">Dirio Walls</a></p>
                        <p class="text-light mb-0 date"><i class="mdi mdi-calendar-check"></i> 25 Sep, 2019</p>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="blog position-relative overflow-hidden shadow rounded">
                    <div class="position-relative overflow-hidden">
                        <img src="{{asset('assets/frontend/images/blog/img-3.jpg')}}" class="img-fluid rounded-top" alt="">
                        <div class="overlay rounded-top bg-dark"></div>
                        <div class="likes">
                            <ul class="list-unstyled mb-0">
                                <li class="list-inline-item mr-2"><a href="javascript:void(0)" class="text-white like"><i class="mdi mdi-heart-outline mr-1"></i>33</a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="text-white comments"><i class="mdi mdi-comment-outline mr-1"></i>08</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="content p-4">
                        <h4><a href="javascript:void(0)" class="title text-dark">Maecenas tempus tellus eget</a></h4>
                        <p class="text-muted">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium, totam rem aperiam</p>
                        <a href="#" class="text-dark readmore">Read more <i class="mdi mdi-chevron-right"></i></a>
                    </div>
                    <div class="author">
                        <p class=" mb-0"><i class="mdi mdi-account text-light"></i> <a href="javascript:void(0)" class="text-light user">Dirio Walls</a></p>
                        <p class="text-light mb-0 date"><i class="mdi mdi-calendar-check"></i> 25 Sep, 2019</p>
                    </div>
                </div>
            </div><!--end col-->
        </div>
    </div>
</section>
<!-- blog end -->

<!-- subscribe start -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-5">
                <div class="float-left position-relative notification-icon mr-2">
                    <i class="mdi mdi-bell-outline text-primary"></i>
                    <span class="badge badge-pill badge-danger">1</span>
                </div>
                <h5 class="mt-2 mb-0">Your Job Notification</h5>
            </div>
            <div class="col-lg-8 col-md-7 mt-4 mt-sm-0">
                <form>
                    <div class="form-group mb-0">
                        <div class="input-group mb-0">
                            <input name="email" id="email" type="email" class="form-control" placeholder="Your email :" required="" aria-describedby="newssubscribebtn">
                            <div class="input-group-append">
                                <button class="btn btn-primary submitBnt" type="submit" id="newssubscribebtn">Subscribe</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- subscribe end -->
@endsection
@section('script')
@endsection
