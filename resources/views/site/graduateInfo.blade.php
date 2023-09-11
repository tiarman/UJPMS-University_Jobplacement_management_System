@extends('layout.site')

@section('stylesheet')
  <style>
      .panel{
          padding: 0px 0px !important;
      }
      .panel-heading{
          padding: 10px 0px;
          background-color: rgb(16,38,74);
          color: white;
          border-radius: 5px;
      }
      .btn-job-list{
          background-color: rgb(16,38,74);
          color: white;
      }
      .btn-job-list:hover{
          background-color: #0D6EFD;
          color: white;
      }
      .center {
          display: block;
          margin-left: auto;
          margin-right: auto;
          width: 30%;
      }
      .imginfo {
          max-width: 100%;
          height: auto;
      }

      .graduate-img {
          width: 120px;
          min-height: 120px;
          /*max-height: auto;*/
          float: left;
          margin: 3px;
          padding: 3px;
      }
  </style>
@endsection

@section('content')
<!-- Start home -->
<section class="bg-half page-next-level" style="height: 100px"> 
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="text-center text-white">
                    <h4 class="text-uppercase title mb-4">Students Info</h4>
                    <ul class="page-next d-inline-block mb-0">
                        <li><a href="index.html" class="text-uppercase font-weight-bold">Home</a></li>
                        <li><a href="#" class="text-uppercase font-weight-bold">Jobs</a></li> 
                        <li>
                            <span class="text-uppercase text-white font-weight-bold">Students Info</span> 
                        </li> 
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end home -->

  <div class="container">
    <div class="row " style="margin-top:50px; ">
      <div class="col-12">
        <div class="card" style="border: none">
          <div class="card-body mt-0">
            <section class="panel">
              <header class="panel-heading border-bottom mb-4 text-center">
                <h2 class="panel-title">{{ $graduate->title ?? ''}}</h2>
              </header>
              <div class="panel-body">
                <div class="card">
                  <div class="card-header ">
                    <div class="row mb-4" >
                      <div class="col-md-6">
                        <div class="mo-mb-2 center">
                          <img class="imginfo" src="{{ asset($graduate->image ?? 'assets/placeholder.png') }}" alt=""
                               class="img-fluid mx-auto d-block">
                        </div>
                      </div>
                      <div class="col-md-6 " style="align-content: right">
                        <strong style="font-size: x-large;">{{ $graduate->name_en ?? ''}}</strong><br>
                        <strong style="font-size: medium;">{{ $graduate->name_bn ?? ''}} </strong><br>
                        <strong><span style="color: #013f7c">Email :</span> <Span>{{ $graduate->email ?? ''}}</Span></strong>&nbsp;<br>
                        @if(auth()->user())
                          <strong>Phone No : {{ $graduate->phone ?? ''}}</strong><br>
                        @else
                          <strong>Phone No : 01*********</strong><br>
                        @endif
{{--                        <strong>Phone No : {{ $graduate->phone ?? ''}}</strong><br>--}}
                        <strong style="font-size: medium;">Address : {{ $graduate->address ?? ''}}</strong><br>
                      </div>
                    </div>

                    <div class="row" >
                      <div class="col-md-12">
                        <div class="row">
                          <div class="col-md-6" style="border: #002752;">
                            <h5 style="background-color: #46b2e554; padding: 5px"> Personal Info</h5>
                            <strong>Father Name : {{ $graduate->father_name ?? ''}}</strong><br>
                            <strong>Mother Name : {{ $graduate->mother_name ?? ''}}</strong><br>
                            <strong>Gender : {{ $graduate->gender ?? ''}}</strong><br>
                            <strong>Blood Group : {{ $graduate->blood_group ?? ''}}</strong><br>
                            <strong>Marital Status : {{ $graduate->marital_status ?? ''}}</strong><br>
                            <strong>Religion : {{ $graduate->religion ?? ''}}</strong><br>
                          </div>
                          <div class="col-md-6" style="border: #002752;">
                            <h5 style="background-color: #46b2e554; padding: 5px"> Educational/Professional Info</h5>

                            <strong>Institute : {{ $institute_info->name_en ?? ''}}</strong><br>
                            <strong>Passing Year : {{ $graduate?->passing_year ?? '2022'}}</strong><br>
                            <strong>Trade/Technology/Department : {{ $graduate->trade_technology ?? ''}}</strong><br>
                            <strong>Student ID : {{ $graduate->running_board_roll ?? ''}}</strong><br>
                            <strong>Experience : {{ $graduate->experience_year ?? ''}} Years</strong><br>
                            <strong>Employment Company : {{ $graduate->employing_company ?? ''}}</strong><br>
                            <strong>Designation: {{ $graduate->designation ?? ''}}</strong><br>
                            <strong>Employment Status : {{ $graduate->employment_status ?? ''}}</strong><br>
                            <strong>Admission Year : {{ $graduate->admission_year ?? ''}}</strong><br>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row mt-5 mb-4">
                      <div class="col-md-6">
                        <h5 style="background-color: #46b2e554; padding: 5px"> Skills</h5>
                      <div class="col-md-12">
                        @if ($graduate)
                        <strong>{{ $graduate->skills_set ?? ''}}</strong><br>                  
                        @endif
                        
                      </div>
                      </div>
                      
                    </div>
                    {{--                    <h4 class="">Job Fair title</h4>--}}

                    {{-- <p>.........................</p> --}}
                  </div>
                  <div class="card-body mx-auto">
                    <p>{{ $graduate->details ?? ''}}</p>
                    <div class="row">
                    </div>
                  </div>
                </div>
                
              </div>
            </section>
            
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
