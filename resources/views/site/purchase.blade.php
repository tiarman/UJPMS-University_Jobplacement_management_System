@extends('layout.site')

@section('stylesheet')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');


        * {
            font-family: 'Poppins', sans-serif;
        }

        /* body{
          display: flex;
          justify-content: center;
          align-items: center;
          min-height: 100vh;
          background: #131313;
        } */

        .container {
            position: relative;
        }

        .container .card {
            position: relative;
            width: 380px;
            height: 420px;
            background: #feffff;
            /* background: #141414; */
            border-radius: 20px;
            overflow: hidden;
        }

        .container .card:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #df146f83;
            clip-path: circle(150px at 80% 20%);
            transition: 0.5s ease-in-out;
        }

        .container .card:hover:before {
            clip-path: circle(300px at 80% -20%);
        }

        .container .card:after {
            content: 'JPMS';
            position: absolute;
            top: 30%;
            left: -20%;
            font-size: 12em;
            font-weight: 800;
            font-style: italic;
            color: rgba(255, 255, 25, 0.05)
        }

        .container .card .imgBx {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 10;
            width: 100%;
            height: 220px;
            transition: 0.5s;
        }

        .container .card:hover .imgBx {
            top: 0%;
            transform: translateY(0%);

        }

        .container .card .imgBx img {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 270px;
        }

        .container .card .contentBx {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 100px;
            text-align: center;
            transition: 1s;
            z-index: 10;
        }

        .container .card:hover .contentBx {
            height: 210px;
        }

        .container .card .contentBx h2 {
            position: relative;
            font-weight: 600;
            letter-spacing: 1px;
            color: #fff;
            margin: 0;
        }

        .container .card .contentBx .size, .container .card .contentBx .color {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 8px 20px;
            transition: 0.5s;
            opacity: 0;
            visibility: hidden;
            padding-top: 0;
            padding-bottom: 0;
        }

        .container .card:hover .contentBx .size {
            opacity: 1;
            visibility: visible;
            transition-delay: 0.5s;
        }

        .container .card:hover .contentBx .color {
            opacity: 1;
            visibility: visible;
            transition-delay: 0.6s;
        }

        .container .card .contentBx .size h3, .container .card .contentBx .color h3 {
            color: #fff;
            font-weight: 300;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-right: 10px;
        }

        .container .card .contentBx .size span {
            width: 26px;
            height: 26px;
            text-align: center;
            line-height: 26px;
            font-size: 14px;
            display: inline-block;
            color: #111;
            background: #fff;
            margin: 0 5px;
            transition: 0.5s;
            color: #111;
            border-radius: 4px;
            cursor: pointer;
        }

        .container .card .contentBx .size span:hover {
            background: #9bdc28;
        }

        .container .card .contentBx .color span {
            width: 20px;
            height: 20px;
            background: #ff0;
            border-radius: 50%;
            margin: 0 5px;
            cursor: pointer;
        }

        .container .card .contentBx .color span:nth-child(2) {
            /* background: #9bdc28; */
        }

        .container .card .contentBx .color span:nth-child(3) {
            background: #03a9f4;
        }

        .container .card .contentBx .color span:nth-child(4) {
            background: #DF146E;
        }

        .container .card .contentBx a {
            display: inline-block;
            padding: 10px 20px;
            background: #fff;
            border-radius: 4px;
            margin-top: 10px;
            text-decoration: none;
            font-weight: 600;
            color: #111;
            opacity: 0;
            transform: translateY(50px);
            transition: 0.5s;
            margin-top: 0;
        }

        .container .card:hover .contentBx a {
            opacity: 1;
            transform: translateY(0px);
            transition-delay: 0.75s;

        }

        /* modal */
        .input-container{
            background-color: #e91e63;
        }
        .btn-confirm{
            background-color: rgb(16,38,74);
            color: white;
        }
        .btn-cancel{
            background-color: #DF146E;
            color: white;
        }
        .input-container-nagad{
            background-color: rgb(247,148,29);
        }
        .payment-header{
            color: rgb(16,38,74);
            text-align: center;
        }
        .payment-border{
            /* text-align: center; */
            /* margi: auto; */
            width: 80px;
            border-bottom: 3px solid rgb(71,178,228);
        }

        .swal-modal{
            z-index: 11111;
        }
    </style>

@endsection

@section('content')



    <section class="mt-5">
        <h3 class="payment-header">Choose Your Preferable Payment</h3>
        <p class="payment-border mx-auto"></p>
    </section>
    <div class="container">
        @if(session()->has('status'))
            {!! session()->get('status') !!}
        @endif
    </div>


    <section class="container">
        <div class="row justify-content-center">

            <div class="col-lg-5">
                <div class="container">
                    <div class="card ms-auto">
                        <div class="imgBx">
                            <img src="{{asset('assets/frontend/images/bkash.png')}}">
                        </div>
                        <div class="contentBx">
                            <h4 class="text-dark">Our Merchant Number</h4>
                            <p>01322919723</p>
                            <button type="button" class="btn btn-cancel" data-bs-toggle="modal" data-bs-target="#bkashmodal">
                                Pay With bkash
                            </button>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-lg-5">
                <div class="container">
                    <div class="card ms-auto">
                        <div class="imgBx">
                            <img src="{{asset('assets/frontend/images/nagad.png')}}">
                        </div>
                        <div class="contentBx">
                            <h2 class="text-dark">Nagad</h2>
                            <p>01913-651485</p>
                            <button type="button" class="btn btn-cancel" data-bs-toggle="modal" data-bs-target="#nagadModal">
                                Pay With Nagad
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Button trigger modal -->


    <!-- bkash Modal -->
    <div class="modal fade" style="z-index: 1111" id="bkashmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="d-flex justify-content-center">
                        <img width="50%" src="{{asset('assets/frontend/images/bkash.png')}}">
                    </div>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('send_purchase_mail')}}" method="post">
                    @csrf
                <div class="modal-body">

                    <div class="d-flex justify-content-between">
                        <div>

                            <p>bkash Payment</p>

                        </div>
                        <div>
                            <p>Touch and Solve</p>
                        </div>
                    </div>
                    <div class="input-container py-3 px-3 text-light">

                            <label for="trx_id">Transaction ID</label>
                            <input type="text" class="form-control promo-code" placeholder="Enter your transaction id" name="trx_id" id="trx_id">
                            <label  for="phone">Your bKash Account number</label>
                            <input class="form-control" placeholder="017XXXXXX" type="number" name="phone" id="phone">

                        <label  for="amount">Amount</label>
                            <input class="form-control" placeholder="Enter amount" type="number" name="amount" id="amount">

                    </div>

                </div>
                <div class="modal-footer">
                    <button id="confirm-button" type="button" class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-confirm">Confirm</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- nagad Modal -->
    <div class="modal fade" style="z-index: 1111" id="nagadModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="d-flex justify-content-center">
                        <img width="80%" src="{{asset('assets/frontend/images/nagad.png')}}">
                    </div>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p>Nagad Payment</p>
                            <p>Touch and Solve</p>
                        </div>
                        <div>
                            <p>Amount: 50000 BDT</p>
                            <p>01913-651485</p>
                        </div>
                    </div>
                    <div class="input-container-nagad py-3 px-3 text-light">
                        <form action="">
                            <label  for="">Promo Code</label>
                            <input class="form-control" placeholder="loveTouch&Solve" type="text" name="" id="nagad-promo-code">
                            <label  for="">Your Nagad Account number</label>
                            <input class="form-control" placeholder="017XXXXXX" type="number" name="" id="">
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
                    <button id="nagad-confirm confirm-button " type="button" class="btn btn-confirm nagad-confirm">Confirm</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('assets/admin/js/bootstrap.bundle.min.js') }}"></script>
    <script>
        $.ajaxSetup({
            beforeSend: function(xhr, type) {
                if (!type.crossDomain) {
                    xhr.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'));
                }
            },
        });
    </script>
    <script>


        $(document).ready(function(){
            let promoArr = [
                'loveTouchAndSolve9', 'loveTouchAndSolve10', 'loveTouchAndSolve11', 'loveTouchAndSolve12', 'loveTouchAndSolve13', 'loveTouchAndSolve14','loveTouchAndSolve15','loveTouchAndSolve16','loveTouchAndSolve20','loveTouchAndSolve23'
            ];
            // promo code - nagad message show
            $('.nagad-confirm').click(function(){
                let getPromo = $('#nagad-promo-code').val();
                let promoIndex = promoArr.indexOf(getPromo);

                if (promoIndex != -1){
                    swal("Good job!", "Promo code used Successfully!", "success");
                }
                else {
                    console.log('index',promoIndex);
                    swal("Sorry!", "Wrong Promo code used!", "error");
                }
            })
            // promo code - bkash message show
            $('.bkash-confirm').click(function(){
                let getPromo = $('#bkash-promo-code').val();
                let promoIndex = promoArr.indexOf(getPromo);

                if (promoIndex != -1){
                    swal("Good job!", "Promo code used Successfully!", "success");
                }
                else {
                    swal("Sorry!", "Wrong Promo code used!", "error");
                }
            })
        })
    </script>
@endsection
