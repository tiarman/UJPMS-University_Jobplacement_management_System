@extends('layout.admin')

@section('stylesheet')
@endsection

@section('content')
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <section class="panel">
            <header class="panel-heading">
              <h2 class="panel-title">Add Payment Info</h2>
            </header>
            <div class="panel-body">
              @if(\App\Helper\CustomHelper::canView('List Of Component', 'Super Admin|Payment Info'))
                <div class="row">
                </div>
              @endif
              @if(session()->has('status'))
                {!! session()->get('status') !!}
              @endif

              <form action="{{route('admin.payment.store')}}" method="post">
                @csrf
                <div class="row">
                  <div class="col-sm-6 offset-sm-3">
                    <div class="form-group">
                      <label class="control-label">Transaction No<span class="text-danger">*</span></label>
                      <input type="text" name="transaction_no" placeholder="Transaction No" autocomplete="off" required
                             value="{{ old('transaction_no') }}"
                             class="form-control @error('transaction_no') is-invalid @enderror">
                      @error('transaction_no')
                      <strong class="text-danger">{{ $errors->first('transaction_no') }}</strong>
                      @enderror
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6 offset-sm-3">
                    <div class="form-group">
                      <label class="control-label">Amount<span class="text-danger">*</span></label>
                      <input type="number" name="amount" autocomplete="off" required
                             value="{{ old('amount') }}"
                             class="form-control @error('amount') is-invalid @enderror">
                      @error('amount')
                      <strong class="text-danger">{{ $errors->first('amount') }}</strong>
                      @enderror
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6 offset-sm-3">
                    <div class="form-group">
                      <label class="control-label">Payment date<span class="text-danger">*</span></label>
                      <input type="date" name="payment_date" autocomplete="off" required
                             value="{{ old('payment_date') }}"
                             class="form-control @error('payment_date') is-invalid @enderror">
                      @error('payment_date')
                      <strong class="text-danger">{{ $errors->first('payment_date') }}</strong>
                      @enderror
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6 offset-sm-3">
                    <div class="form-group">
                      <label class="control-label">Payment Due date:<span class="text-danger">*</span></label>
                      <input type="date" name="next_due_date" autocomplete="off" required
                             value="{{ old('next_due_date') }}"
                             class="form-control @error('next_due_date') is-invalid @enderror">
                      @error('next_due_date')
                      <strong class="text-danger">{{ $errors->first('next_due_date') }}</strong>
                      @enderror
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 offset-sm-3">
                  <div class="form-group">
                    <label class="control-label">Bill Type<span class="text-danger">*</span></label>
                    <select name="bill_type" required class="form-control @error('bill_type') is-invalid @enderror">
                      <option value="">Choose a bill type</option>
                      @foreach(\App\Models\Payment::$typesArray as $status)
                        <option value="{{ $status }}"
                                @if(old('bill_type') == $status) selected @endif>{{ ucfirst($status) }}</option>
                      @endforeach
                    </select>
                    @error('bill_type')
                    <strong class="text-danger">{{ $errors->first('bill_type') }}</strong>
                    @enderror
                  </div>
                </div>


                <div class="col-sm-6 offset-sm-3">
                  <div class="form-group">
                    <label class="control-label">Payment By<span class="text-danger">*</span></label>
                    <select name="paymentMethod" required class="form-control @error('paymentMethod') is-invalid @enderror">
                      <option value="">Choose a payment type</option>
                      @foreach(\App\Models\Payment::$methodsArray as $status)
                        <option value="{{ $status }}"
                                @if(old('paymentMethod') == $status) selected @endif>{{ ucfirst($status) }}</option>
                      @endforeach
                    </select>
                    @error('paymentMethod')
                    <strong class="text-danger">{{ $errors->first('paymentMethod') }}</strong>
                    @enderror
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12 text-right">
                    <button class="btn btn-danger btn-sm" type="submit">Submit</button>
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
