@extends('layout.admin')

@section('stylesheet')
  <link rel="stylesheet" href="{{ asset('assets/admin/plugins/select2/css/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/admin/plugins/summernote/summernote-bs4.css') }}">
  <style>
      /*.img-input{*/
      /*    text-align: center;*/
      /*}*/
      #inp {
          text-align: center;
          margin: auto;
      }
      .sub-panel-heading .sub-panel-title {
          font-size: 20px;
          font-weight: 400;
          margin-bottom: 26px;
          text-align: left;
      }

      .select2-selection__rendered {
          line-height: 31px !important;
      }
      .select2-container .select2-selection--single {
          height: 40px !important;
      }
      .select2-selection__arrow {
          height: 34px !important;
      }
  </style>
@endsection

@section('content')
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <section class="panel">
            <header class="panel-heading">
              <h2 class="panel-title">Update Profile</h2>
            </header>
            <div class="panel-body">
              @if(\App\Helper\CustomHelper::canView('List Of Student', 'Super Admin'))
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-xl-12 text-right mb-3">
                    {{--                    <a href="{{ route('admin.division.list') }}" class="brn btn-success btn-sm">List of divisions</a>--}}
                  </div>
                </div>
              @endif
              @if(session()->has('status'))
                {!! session()->get('status') !!}
              @endif

              <form action="{{ route('admin.resume.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-sm-6">
                    <div class="img-holder mb-4 d-flex justify-content-center">
                      <img src="{{ asset(auth()->user()->image ?? 'assets/placeholder.png') }}"
                           alt="example placeholder" style="width: 131px; margin-top: 26px;" />
                    </div>
                    <div class="form-group" style="text-align-last: center;">
                      <label class="control-label">Photo (Upload)</label>
                      <input type="file" name="photo"
                             class="form-control @error('photo') is-invalid @enderror">
                      @error('photo')
                      <strong class="text-danger">{{ $errors->first('photo') }}</strong>
                      @enderror
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="row">

                      <div class="col-md-12 mb-3 text-center">
                        <h1 style="font-weight: 600; font-size: 25px; color: #5b175b">{{$institute->name_en ?? ""}}</h1>
                      </div>
                      {{--  <div class="col-md-12">
                        <div class="form-group">
                          <label class="control-label">Full name [English]<span class="text-danger">*</span></label>
                          <input type="text" name="name_en" placeholder="Full name in english" value="{{ old('institute_id', $institute->name_en) }}"
                                 class="form-control @error('name_en') is-invalid @enderror">
                          @error('name_en')
                          <strong class="text-danger">{{ $errors->first('name_en') }}</strong>
                          @enderror
                        </div>
                      </div>  --}}

                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="control-label">Full name [English]<span class="text-danger">*</span></label>
                          <input type="text" name="name_en" placeholder="Full name in english" value="{{ old('name_en', auth()->user()->name_en) }}"
                                 class="form-control @error('name_en') is-invalid @enderror">
                          @error('name_en')
                          <strong class="text-danger">{{ $errors->first('name_en') }}</strong>
                          @enderror
                        </div>
                      </div>

                     


                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="phone">Phone <span class="text-danger">*</span></label>
                          <input type="number" name="phone" id="phone" placeholder="Enter Your Phone Number" autocomplete="off"
                                 class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone', auth()->user()->phone) }}">
                          <span class="spin"></span>
                          @error('phone')
                          <strong class="text-danger">{{ $errors->first('phone') }}</strong>
                          @enderror
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="email">Email <span class="text-danger">*</span></label>
                          <input type="email" name="email" id="email" placeholder="Enter Your E-mail"
                                 class="form-control @error('email') is-invalid @enderror" value="{{ old('email', auth()->user()->email) }}">
                          <span class="spin"></span>
                          @error('email')
                          <strong class="text-danger">{{ $errors->first('email') }}</strong>
                          @enderror
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="control-label" for="address">Address</label>
                          <input type="text" name="address" placeholder="address" autocomplete="off"
                                 value="{{ old('address',auth()->user()->address) }}"
                                 class="form-control @error('address') is-invalid @enderror">
                          @error('address')
                          <strong class="text-danger">{{ $errors->first('address') }}</strong>
                          @enderror
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <header class="sub-panel-heading" style="background-color: #e9eff1">
                  <h2 class="sub-panel-title">Registration Information</h2>
                </header>
                <div  class="row mt-3">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="trade_technology_id">Trade/Technology/Department</label>
                      <select name="trade_technology_id" id="trade_technology_id" class="form-control @error('trade_technology_id') is-invalid @enderror">
                        <option value="">Choose a Trade/Technology</option>
                        @foreach ($trades as $item)
                          <option value="{{ $item->id }}"
                                  @if(old('trade_technology_id',auth()->user()->trade_technology_id) == $item->id) selected @endif>{{ ucfirst($item->name) }}</option>
                        @endforeach
                      </select>
                      @error('trade_technology_id')
                      <strong class="text-danger">{{$error->first('trade_technology_id')}}</strong>
                      @enderror
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="shift_id">Shift</label>
                      <select name="shift_id" id="shift_id" class="form-control @error('shift_id') is-invalid @enderror">
                        <option value="">Choose a Shift</option>
                        @foreach ($shifts as $item)
                          <option value="{{ $item->id }}">{{ $item->name }}</option>
                          <option value="{{ $item->id }}"
                                  @if(old('shift_id',auth()->user()->shift_id) == $item->id) selected @endif>{{ ucfirst($item->name) }}</option>
                        @endforeach
                      </select>
                      @error('shift_id')
                      <strong class="text-danger">{{$error->first('shift_id')}}</strong>
                      @enderror
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="control-label">Semester</label>
                      <select id="semester_id" name="semester_id" class="form-control select-or-disable @error('semester_id') is-invalid @enderror">
                        <option value="">Choose a Semester</option>
                        <option value="1">Semester 1</option>
                        @foreach($semesters as $item)
{{--                          <option value="{{ $item->id }}" @selected($item->id == old('semester_id'))>{{ $item->name }}</option>--}}
                          <option value="{{ $item->id }}"
                                  @if(old('semester_id',auth()->user()->semester_id) == $item->id) selected @endif>{{ ucfirst($item->name) }}</option>
                        @endforeach
                      </select>
                      @error('semester_id')
                      <strong class="text-danger">{{ $errors->first('semester_id') }}</strong>
                      @enderror
                    </div>
                  </div>
                </div>



                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="control-label">Year</label>
                      <select id="year"  name="year" class="form-control select-or-disable @error('year') is-invalid @enderror">
                        <option value="">Choose a Year</option>
                        @foreach(\App\Models\User::$yearArrays as $year)
                          <option value="{{ $year }}"
                                  @if(old('year', auth()->user()->year) == $year) selected @endif>{{ ucfirst($year) }}</option>
                        @endforeach
                      </select>
                      @error('year')
                      <strong class="text-danger">{{ $errors->first('year') }}</strong>
                      @enderror
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="s_session">Session</label>
                      <input type="text" name="s_session" id="s_session" placeholder="2021-2022" autocomplete="off"
                             class="form-control @error('s_session') is-invalid @enderror" value="{{ old('session',auth()->user()->session) }}">
                      <span class="spin"></span>
                      @error('s_session')
                      <strong class="text-danger">{{ $errors->first('s_session') }}</strong>
                      @enderror
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="expected_salary">Expected Salary<span class="text-danger">*</span></label>
                      <input type="number" name="expected_salary" id="expected_salary" placeholder="Ex. 30000" autocomplete="off"
                             class="form-control select-or-disable @error('expected_salary') is-invalid @enderror" value="{{ old('expected_salary',auth()->user()->expected_salary) }}">
                      <span class="spin"></span>
                      @error('expected_salary')
                      <strong class="text-danger">{{ $errors->first('expected_salary') }}</strong>
                      @enderror
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="running_board_roll">Student ID<span class="text-danger">*</span></label>
                      <input type="text" name="running_board_roll" id="running_board_roll" placeholder="Enter Your Fath er Name" autocomplete="off"
                             class="form-control select-or-disable @error('running_board_roll') is-invalid @enderror" value="{{ old('running_board_roll',auth()->user()->running_board_roll)}}">
                      <span class="spin"></span>
                      @error('running_board_roll')
                      <strong class="text-danger">{{ $errors->first('running_board_roll') }}</strong>
                      @enderror
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="admission_year">Admission Year <span class="text-danger">*</span></label>
                      <input type="text" name="admission_year" id="admission_year" placeholder="Enter Admission Year " autocomplete="off"
                             class="form-control @error('admission_year') is-invalid @enderror" value="{{ old('admission_year',auth()->user()->admission_year) }}">
                      <span class="spin"></span>
                      @error('admission_year')
                      <strong class="text-danger">{{ $errors->first('admission_year') }}</strong>
                      @enderror
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="control-label">NID</label>
                      <input id="nid" type="text" name="nid" placeholder="Your NID NO." value="{{ old('nid', auth()->user()->nid) }}"
                             class="form-control select-or-disable @error('nid') is-invalid @enderror">
                      @error('nid')
                      <strong class="text-danger">{{ $errors->first('nid') }}</strong>
                      @enderror
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="control-label">Birth-Certificate<span class="text-danger">*</span></label>
                      <input type="text" id="birth_certificate" name="birth_certificate" placeholder="Your Birth Certificate NO." value="{{ old('birth_certificate',auth()->user()->birth_certificate) }}"
                             class="form-control select-or-disable @error('birth_certificate') is-invalid @enderror">
                      @error('birth_certificate')
                      <strong class="text-danger">{{ $errors->first('birth_certificate') }}</strong>
                      @enderror
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label class="control-label">Employment Status<span class="text-danger">*</span></label>
                      <select name="employment_status" class="form-control @error('employment_status') is-invalid @enderror">
                        <option value="">Choose an Option</option>
                        @foreach(\App\Models\User::$employmentArrays as $employment_status)
                          <option value="{{ $employment_status }}"
                                  @if(old('employment_status', auth()->user()->employment_status) == $employment_status) selected @endif>{{ ucfirst($employment_status) }}</option>
                        @endforeach
                      </select>
                      @error('employment_status')
                      <strong class="text-danger">{{ $errors->first('employment_status') }}</strong>
                      @enderror
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="employing_company">Work For(Optional)</label>
                      <input type="text" name="employing_company" id="employing_company" placeholder="Company Name" autocomplete="off"
                             class="form-control @error('employing_company') is-invalid @enderror" value="{{ old('employing_company',auth()->user()->employing_company) }}">
                      <span class="spin"></span>
                      @error('employing_company')
                      <strong class="text-danger">{{ $errors->first('employing_company') }}</strong>
                      @enderror
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="control-label">Experience<span class="text-danger">*</span></label>
                      <input type="number" id="experience_year" name="experience_year" placeholder="Ex: 4" value="{{ old('experience_year',auth()->user()->experience_year) }}"
                             class="form-control select-or-disable @error('experience_year') is-invalid @enderror">
                      @error('experience_year')
                      <strong class="text-danger">{{ $errors->first('experience_year') }}</strong>
                      @enderror
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="cv">CV(Optional)</label>
                      <input type="file" name="cv" id="cv" placeholder="" autocomplete="off"
                             class="form-control @error('cv') is-invalid @enderror" value="{{ old('cv') }}">
                      <span class="spin"></span>
                      @error('cv')
                      <strong class="text-danger">{{ $errors->first('cv') }}</strong>
                      @enderror
                    </div>
                  </div>

                </div>
                <div class="row mb-5">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="skills_set">Describe Your skills in short <span class="text-danger">*</span></label>
                      <textarea name="skills_set" id="skills_set" placeholder="Short describe your skills ex: php, laravel, react or what you good at" autocomplete="off"
                             class="form-control @error('skills_set') is-invalid @enderror" value="{{ old('skills_set',auth()->user()->skills_set) }}">{{ old('skills_set',auth()->user()->skills_set) }}</textarea>
                      <span class="spin"></span>
                      @error('skills_set')
                      <strong class="text-danger">{{ $errors->first('skills_set') }}</strong>
                      @enderror
                    </div>               
                    </div>               
                </div>

                





                <header class="sub-panel-heading" style="background-color: #e9eff1">
                  <h2 class="sub-panel-title">Personal Information</h2>
                </header>
                <div class="row mt-3">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="father_name">Father Name<span class="text-danger">*</span></label>
                      <input type="text" name="father_name" id="father_name" placeholder="Enter Your Father Name" autocomplete="off"
                             class="form-control select-or-disable @error('father_name') is-invalid @enderror" value="{{ old('father_name',auth()->user()->father_name) }}">
                      <span class="spin"></span>
                      @error('father_name')
                      <strong class="text-danger">{{ $errors->first('father_name') }}</strong>
                      @enderror
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="mother_name">Mother Name<span class="text-danger">*</span></label>
                      <input type="text" name="mother_name" id="mother_name" placeholder="Enter Your Mother Name" autocomplete="off"
                             class="form-control select-or-disable @error('mother_name') is-invalid @enderror" value="{{ old('mother_name',auth()->user()->mother_name) }}">
                      <span class="spin"></span>
                      @error('mother_name')
                      <strong class="text-danger">{{ $errors->first('mother_name') }}</strong>
                      @enderror
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="control-label">Gender</label>
                      <select id="gender"  name="gender" class="form-control select-or-disable @error('gender') is-invalid @enderror">
                        <option value="">Choose a Gender</option>
                        @foreach(\App\Models\User::$genderArrays as $gender)
                          <option value="{{ $gender }}"
                                  @if(old('gender', auth()->user()->gender) == $gender) selected @endif>{{ ucfirst($gender) }}</option>
                        @endforeach
                      </select>
                      @error('gender')
                      <strong class="text-danger">{{ $errors->first('gender') }}</strong>
                      @enderror
                    </div>
                  </div>
                </div>
                <div class="row border-bottom">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="blood_group">Blood Group<span class="text-danger">*</span></label>
                      <input type="text" name="blood_group" id="blood_group" placeholder="Enter Your Fath er Name" autocomplete="off"
                             class="form-control select-or-disable @error('blood_group') is-invalid @enderror" value="{{ old('blood_group',auth()->user()->blood_group)}}">
                      <span class="spin"></span>
                      @error('blood_group')
                      <strong class="text-danger">{{ $errors->first('blood_group') }}</strong>
                      @enderror
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="marital_status">Marital Status <span class="text-danger">*</span></label>
                      <input type="text" name="marital_status" id="marital_status" placeholder="Enter Marital Status " autocomplete="off"
                             class="form-control @error('marital_status') is-invalid @enderror" value="{{ old('marital_status',auth()->user()->marital_status) }}">
                      <span class="spin"></span>
                      @error('marital_status')
                      <strong class="text-danger">{{ $errors->first('marital_status') }}</strong>
                      @enderror
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="control-label">Religion</label>
                      <input id="religion" type="text" name="religion" placeholder="Your Religion" value="{{ old('religion', auth()->user()->religion) }}"
                             class="form-control select-or-disable @error('religion') is-invalid @enderror">
                      @error('religion')
                      <strong class="text-danger">{{ $errors->first('religion') }}</strong>
                      @enderror
                    </div>
                  </div>
                </div>

                <div class="row mb-4">
                  <div class="col-sm-12 text-right">
                    <button class="btn btn-danger btn-sm" type="submit">Update</button>
                  </div>
                </div>
              </form>          
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('script')
  <script src="{{ asset('assets/admin/plugins/select2/js/select2.min.js') }}"></script>
  <script src="{{ asset('assets/admin/plugins/summernote/summernote-bs4.js') }}"></script>
  <script>
    $(document).ready(function () {
      $('.select2').select2()
      $(document).ready(function() {
        $('#job_responsibility').summernote({
          'height': 100,
        });
        $('#additional_requirements').summernote({
          'height': 100,
        });
        $('#job_context').summernote({
          'height': 100,
        });
        $('#educational_requirement').summernote({
          'height': 100,
        });
      });
    });
  </script>
@endsection
