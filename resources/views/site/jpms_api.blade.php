@extends('layout.site')

@section('stylesheet')
<style>
  .access-container{
    margin-top: 100px;
  }
  .access-heading{
    margin-top: -40px;
  }
</style>
@endsection

@section('content')
  <div class="row container mx-auto access-container ">
    <div class="col-8 mx-auto ">
      <div class="card">
        <div class="card-body">
          <section class="panel px-3">
            <header class="panel-heading access-heading">
              <h2 class="panel-title text-primary border-bottom">API Access</h2>
            </header>
            <div class="panel-body">
              {{-- @if(\App\Helper\CustomHelper::canView('List Of Institute', 'Super Admin|Institute Head'))
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-xl-12 text-right mb-3">
                    <a href="{{ route('admin.institute.head.employee.list') }}" class="brn btn-success btn-sm">List of Employees</a>
                  </div>
                </div>
              @endif --}}
              @if(session()->has('status'))
                {!! session()->get('status') !!}
              @endif

              <form id="show_student" class="form-horizontal toggleForm" enctype="multipart/form-data" action="" method="get">
                @csrf
               
                <div class="row mb-3 justify-content-center">
        
                </div>
                <div class="row mb-3">
                  <div class="col-md-12">
                    <div id="success-message">
                      
                    </div>
                    <div class="form-group">
                      <label for="api_key">API Key<span class="text-danger">*</span></label>
                      <input type="text" required name="api_key" id="api_key" placeholder="Enter API Key" autocomplete="off"
                             class="form-control @error('api_key') is-invalid @enderror" value="{{ old('api_key') }}">
                      <span class="spin"></span>
                      @error('api_key')
                      <strong class="text-danger">{{ $errors->first('api_key') }}</strong>
                      @enderror
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="access_token">API Secret</label>
                      <input type="text" name="access_token" id="access_token" placeholder="Enter API Secret" autocomplete="off"
                             class="form-control @error('access_token') is-invalid @enderror" value="{{ old('access_token') }}">
                      <span class="spin"></span>
                      @error('access_token')
                      <strong class="text-danger">{{ $errors->first('access_token') }}</strong>
                      @enderror
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="access_token">Access Token</label>
                      <input type="text" name="access_token" id="access_token" placeholder="Enter Access Token" autocomplete="off"
                             class="form-control @error('access_token') is-invalid @enderror" value="{{ old('access_token') }}">
                      <span class="spin"></span>
                      @error('access_token')
                      <strong class="text-danger">{{ $errors->first('access_token') }}</strong>
                      @enderror
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="username">Username<span class="text-danger">*</span></label>
                      <input type="text" required name="username" id="username" placeholder="Enter Username" autocomplete="off"
                             class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}">
                      <span class="spin"></span>
                      @error('username')
                      <strong class="text-danger">{{ $errors->first('username') }}</strong>
                      @enderror
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="username">Description<span class="text-danger">*</span></label>
                      <textarea class="form-control" placeholder="Enter Description" name="description" id="" ></textarea>
                      <span class="spin"></span>
                      @error('username')
                      <strong class="text-danger">{{ $errors->first('username') }}</strong>
                      @enderror
                    </div>
                  </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 text-right">
                      <button class="btn btn-danger btn-sm submit" type="submit">Submit</button>
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
<script>

    $(document).ready(function () {
      $('.submit').click(function (e) {
        {
          $('#success-message').append('<div class="alert alert-success alert-dismissible show" role="alert"> Successfully Submitted!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            e.preventDefault();
        }
      })
      $('#image').change(function (e) {
        {
          $('#image_preview').attr('src', window.URL.createObjectURL(e.target.files[0]));
          $('#image_preview').removeClass('d-none');
          $('#preview_text').addClass('d-none');
          console.log("image selected", e.target.files.name);
        }
      })
      // password
      $(document).on('keyup', 'input[name="password"]', function (e) {
        let password = e.target.value;
        // Minimum eight characters, at least one uppercase letter, one lowercase letter, one number and one special character
        const regExp = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
        // console.log('passRegex ', password)

        if (password.match(regExp)) {
          $('#realtime-password-error').addClass('d-none');
        } else {
          $('#realtime-password-error').removeClass('d-none');
        }

      })

      // confirm password event handler
      $('input[name="password_confirmation"]').keyup(function () {
        const confirmPassword = $('input[name="password_confirmation"]').val();
        const password = $('input[name="password"]').val();
        let confirmPasswordError = $('#confirm-password-error');

        if (confirmPassword != password) {
          confirmPasswordError.removeClass('d-none')
        } else {
          confirmPasswordError.addClass('d-none')
        }
      });

    })


  </script>
  <script src="{{ asset('assets/admin/plugins/sweetalert2/sweetalert2.all.min.js') }}"></script>
@endsection
