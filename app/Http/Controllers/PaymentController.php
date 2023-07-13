<?php

namespace App\Http\Controllers;

use App\Helper\RedirectHelper;
use App\Models\Payment;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class PaymentController extends Controller
{

  public function index()
  {
    $data['data'] = Payment::orderby('created_at', 'desc')->get();
    return view('admin.client_payment_information.list', $data);
  }

  public function manage($id = null)
  {
    if ($data['payment'] = Payment::find($id)) {
      return view('admin.client_payment_information.manage', $data);
    }
    return RedirectHelper::routeWarningWithParams('partner.list', '<strong>Sorry!!!</strong> Payment not found');
  }

  public function create()
  {
    return view('admin.client_payment_information.create');
  }

  public function store(Request $request)
  {
    $message = '<strong>Congratulations!!!</strong> Payment Successfully';
    $rules = [
      'transaction_no' => 'required|string',
      'amount' => 'required|numeric',
      'payment_date' => 'required|date',
      'next_due_date' => 'required|date',
      'bill_type' => 'required|string',
      'paymentMethod' => 'required|string',
    ];

    if ($request->has('id')) {
      $payment = Payment::find($request->id);
      $message = $message . ' updated';
    } else {
      $payment = new Payment();
      $message = $message . ' created';
    }
    $request->validate($rules);

    try {
      $payment->transaction_no = $request->transaction_no;
      $payment->amount = $request->amount;
      $payment->payment_date = $request->payment_date;
      $payment->next_due_date = $request->next_due_date;
      $payment->bill_type = $request->bill_type;
      $payment->method = $request->paymentMethod;
      if ($payment->save()) {
        return RedirectHelper::routeSuccessWithParams('admin.payment.list', $message);
      }
      return RedirectHelper::backWithInput();

    } catch (QueryException $e) {
      return RedirectHelper::backWithInputFromException();
    }


  }


  public function destroy(Request $request)
  {
    $id = $request->post('id');
    try {
      $user = Payment::find($id);
      if ($user->delete()) {
        return 'success';
      }
    } catch (\Exception $e) {
    }
  }


  /**
   * @param Request $request
   * @return string|void
   */
  public function ajaxUpdateStatus(Request $request)
  {
    if ($request->isMethod("POST")) {
      $id = $request->post('id');
      $postStatus = $request->post('status');
      $status = strtolower($postStatus);
      $user = Payment::find($id);
      if ($user->update(['status' => $status])) {
        return "success";
      }
    }
  }
}
