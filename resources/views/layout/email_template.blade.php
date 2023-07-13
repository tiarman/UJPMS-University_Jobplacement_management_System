<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }} | JPMS</title>
    <link rel="icon" type="image/x-icon" href="{{asset('assets/email/img/touch.png')}}">
    <!-- Font Awesome Css -->
    <link rel="stylesheet" href="{{asset('assets/email/css/plugins/font-awesome/css/all.min.css')}}">
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="{{asset('assets/email/css/plugins/bootstrap/bootstrap.min.css')}}">
    <!-- Magnific Popup Css -->
    <link rel="stylesheet" href="{{asset('assets/email/css/plugins/magnific-popup.css')}}">
    <!-- Animate Css -->
    <link rel="stylesheet" href="{{asset('assets/email/css/plugins/animate.css')}}">
    <!-- Slick-Slide-Css -->
    <link rel="stylesheet" href="{{asset('assets/email/css/plugins/slick-slider/slick.css')}}">
    <!-- Style Css -->
    <link rel="stylesheet" href="{{asset('assets/email/css/style.css')}}">
    <!-- Responsive Css -->
    <link rel="stylesheet" href="{{asset('assets/email/css/responsive.css')}}">
    @yield('styleSheet')
</head>

<body>

<!-- Hero Section -->
@yield('content')
<section class="hero_aria home_3">
    <div class="container custom_container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="hero_content wow fadeInUp" data-wow-delay="0.1s">
                    <span class="sub_title">Job Placement Management System</span>
                    <h2>Welcome to the <span class="color_title">free trial</span> of JPMS</h2>
                    <h5>We hope you enjoy your experience with our platform.</h5>
                    @if(session()->has('status'))
                    {!! session()->get('status') !!}
                  @endif
                    {{-- <p> Hi <strong class="color_title">"{{ request('name') }}"</strong> Thanks for subscribe for the
                        TAS (jpms) System. We will email you with email and password. To Use our TAS (jpms) system
                        Trial version. Thank you !</p> --}}
                        <form action="{{ route('free.trial') }}" method="post">
                            @csrf
                            <div class="row mt-4">
                              <div class="col-sm-6 mb-3">
                                <div class="form-group">
                                  <label class="control-label">Institute Name<span class="text-danger">*</span></label>
                                  <input type="text" name="name" placeholder="Institute Name" autocomplete="off" required
                                         value="{{ old('name') }}"
                                         class="form-control @error('name') is-invalid @enderror">
                                  @error('name')
                                  <strong class="text-danger">{{ $errors->first('name') }}</strong>
                                  @enderror
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <label class="control-label">Email<span class="text-danger">*</span></label>
                                  <input type="text" name="email" placeholder="Email" autocomplete="off" required
                                         value="{{ old('email') }}"
                                         class="form-control @error('email') is-invalid @enderror">
                                  @error('email')
                                  <strong class="text-danger">{{ $errors->first('email') }}</strong>
                                  @enderror
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <label class="control-label">Phone<span class="text-danger">*</span></label>
                                  <input type="text" name="phone" placeholder="phone" autocomplete="off" required
                                         value="{{ old('phone') }}"
                                         class="form-control @error('phone') is-invalid @enderror">
                                  @error('phone')
                                  <strong class="text-danger">{{ $errors->first('phone') }}</strong>
                                  @enderror
                                </div>
                              </div>

                            </div>
                            <div class="row mt-3">
                              <div class="col-sm-12 text-right">
                                <button class="btn btn-danger btn-sm" type="submit">Submit</button>
                              </div>
                            </div>
                          </form>
                    <div class="button_aria">
                        <a href="{{route('home')}}" class="min_btn">Back Home</a>
                        {{--                        <a href="https://www.youtube.com/watch?v=ZrroZ_EiKx4" class="play_btn"><i--}}
                        {{--                                class="fa-solid fa-play"></i></a>--}}
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="section_img" id="scene" style="text-align: center">
                    <img style="width: 80%; text-align: center" data-depth="0.2"
                         src="{{asset('assets/email/img/seo_4.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="shape">
        <img src="{{asset('assets/img/shape/hero.png')}}" alt="" class="one">
        <img src="{{asset('assets/img/shape/hero_2.png')}}" alt="" class="two">
        <img src="{{asset('assets/img/shape/hero_3.png')}}" alt="" class="three">
    </div>
</section>


<!-- jQuery Libraary -->
<script data-cfasync="false"
        src="{{asset('/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script>
<script src="assets/js/jquery.min.js"></script>
<!-- Bootstrap - jS  -->
<script src="{{asset('assets/email/js/bootstrap.min.js')}}"></script>
<!-- Popper - Js For Bootstrap -->
<script src="{{asset('assets/email/js/popper.min.js')}}"></script>
<!-- Counter Up - Js -->
<script src="{{asset('assets/email/js/jquery.counterup.js')}}"></script>
<!-- Waypoints Js For Counter Up -->
<script src="{{asset('assets/email/js/waypoints.min.js')}}"></script>
<!-- Magnific Popup -Js -->
<script src="{{asset('assets/email/js/magnific-popup.min.js')}}"></script>
<!-- Wow - Js -->
<script src="{{asset('assets/email/js/wow.min.js')}}"></script>
<!-- Parallax - Js -->
<script src="{{asset('assets/email/js/parallax.min.js')}}"></script>
<!-- Slick-Slidr-js -->
<script src="{{asset('assets/email/js/slick.min.js')}}"></script>
<!-- Main Js -->
<script src="{{asset('assets/email/js/main.js')}}"></script>
@yield('script')
</body>

</html>
