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
                    <h4 class="text-uppercase title mb-4">About Us</h4>
                    <ul class="page-next d-inline-block mb-0">
                        <li><a href="index.html" class="text-uppercase font-weight-bold">Home</a></li>
                        <li><a href="#" class="text-uppercase font-weight-bold">Pages</a></li> 
                        <li>
                            <span class="text-uppercase text-white font-weight-bold">About</span> 
                        </li> 
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end home -->

<!-- ABOUT US START -->
<section class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-4">
                <img src="{{asset('assets/frontend/images/about.jpg')}}" class="img-fluid rounded shadow" alt="">
            </div>

            <div class="col-lg-7 col-md-8">
                <div class="about-desc ml-lg-4">
                    <h4 class="text-dark">About us</h4>

                    <p style="margin-top:100px; margin-bottom: 100px " class="text-muted">UniJobs is a Job Placement Management System where institute and industry can post jobs and student can apply those jobs. We have developed this Job Placement Management System (UniJobs) in a way where student, industry and university are connected together. 
                    </p>

                

                    <a href="javascript:void(0)" class="btn btn-primary">Apply now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ABOUT US END -->

<!-- COUNTER START -->
<section class="section bg-light">
    <div class="container">
        <div class="blog-post-counter">
            <div class="row" id="counter">
                <div class="col-md-3 col-6 border-right">
                    <div class="p-4">
                        <div class="blog-post counter-content text-center">
                            <h1 class="counter-value font-weight-light text-dark mb-2" data-count="{{$numberofjobs ?? '0'}}">{{$numberofjobs ?? '0'}}">0</h1>
                            <p class="counter-name text-muted f-15 text-uppercase mb-2">Jobs</p>
                            <i class="mdi mdi-account-multiple h3 text-muted"></i>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-6 border-right">
                    <div class="p-4">
                        <div class="blog-post counter-content text-center">
                            <h1 class="counter-value font-weight-light text-dark mb-2" data-count="{{$numberoffair ?? '0'}}">{{$numberoffair ?? '0'}}">0</h1>
                            <p class="counter-name text-muted f-15 text-uppercase mb-2">Job Fair Organized</p>
                            <i class="mdi mdi-file h3 text-muted"></i>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-6 border-right">
                    <div class="p-4">
                        <div class="blog-post counter-content text-center">
                            <h1 class="counter-value font-weight-light text-dark mb-2" data-count="{{$numberofindustries ?? '0'}}">{{$numberofindustries ?? '0'}}">0</h1>
                            <p class="counter-name text-muted f-15 text-uppercase mb-2">Companies</p>
                            <i class="mdi mdi-bank h3 text-muted"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="p-4">
                        <div class="blog-post counter-content text-center">
                            <h1 class="counter-value font-weight-light text-dark mb-2" data-count="{{$numberofstudents ?? '0'}}">{{$numberofstudents ?? '0'}}+">0</h1>
                            <p class="counter-name text-muted f-15 text-uppercase mb-2">Students</p>
                            <i class="mdi mdi-account-group h3 text-muted"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- COUNTER END -->

<!-- COMPANY TESTIMONIAL START -->
<section class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <h4 class="text-dark font-weight-">Why we develop UniJobs?</h4>
                <div class="blog-post-border mt-3 mb-3"></div>
                <h5 class="text-muted mb-1">University Job Placement Management System</h5>
                <ul>
                    <li>Our goal at the UniJobs project is to establish a strong connection between students, universities, and the industry.     This connection aims to facilitate an easier path for students and graduates to secure their desired jobs.                    </li>
                    <li>After graduating, a significant number of students find themselves without the necessary skills to secure employment  in any industry.                    </li>
                    <li>Many students constantly switch their skill focus, leading to a lack of fulfillment and causing frustration, which often prompts them to change their academic direction.
                    </li>
                    <li>While studying in university, maximum student have no idea about industry jobs. As a result, after completing graduation they applies their desire jobs and have to face a lot of difficulties to get a job. Some of graduates are not getting proper     job. Some are not getting jobs at all.
                    </li>
                    <li>The higher education landscape in Bangladesh has witnessed significant growth in recent years. According to the University Grants Commission (UGC), the number of students in the country's universities reached 44,41,717 in 2021 [2] UGC  Annual Report, 2021). This growth is indicative of the expanding pool of university graduates entering the job market.
                    </li>
                    <li>Multiple studies and reports highlight the gravity of graduate unemployment in Bangladesh. An Economist Intelligence  Unit (EIU) report in 2014 revealed that 47 percent of university graduates in the country were unemployed, illustrating    the stark challenges facing recent graduates (The Daily Star, 2014). Subsequently, a 2017 report by the Bangladesh Institute of Development Studies (BIDS) painted an even more concerning picture, reporting a 66 percent unemployment rate among graduates.
                    </li>
                </ul>
                

                <ul class="list-inline pt-4 border-top mb-4">
                    <li class="list-inline-item">
                        <a href="{{route('home')}}" class="btn btn-primary-outline">Visit Now</a>
                    </li>
                    <li class="list-inline-item float-right mt-2">
                        <ul class="list-inline bolg-post-icon mb-0">
                            @if ($facebook)
                            <li class="list-inline-item f-20"><a href="{{$facebook->value}}" class=""><i class="mdi mdi-facebook"></i></a></li>
                            @endif
                            @if ($twitter)
                            <li class="list-inline-item f-20"><a href="{{$twitter->value}}" class=""><i class="mdi mdi-twitter"></i></a></li>
                            @endif
                            @if ($linkedin)
                            <li class="list-inline-item f-20"><a href="{{$linkedin->value}}" class=""><i class="mdi mdi-linkedin"></i></a></li>
                            @endif
                        </ul>
                    </li>
                </ul>
            </div>

            
        </div>
    </div>
</section>
<!-- COMPANY TESTIMONIAL START -->



<!-- ABOUT CLIENTS START -->
<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title title-line pb-5">Our Client's</h4>
                    <p class="text-muted para-desc mx-auto mb-1">Chose your job and apply now</p>
                </div>
            </div>
        </div>

     
            <div style="text-align: center">
               <h5>Clients info Comming soon</h5>
            </div><!--end col-->
        
   
    </div>
</section>
<!-- ABOUT CLIENTS END -->


@endsection
@section('script')
@endsection