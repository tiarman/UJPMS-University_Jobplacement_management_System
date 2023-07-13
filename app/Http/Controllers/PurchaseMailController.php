<?php

namespace App\Http\Controllers;

use App\Helper\RedirectHelper;
use App\Mail\NotifyPurchase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PurchaseMailController extends Controller
{
    public function send_purchase_mail(Request $request){
        $trx_id = $request->trx_id;
        $phone = $request->phone;
        $amount = $request->amount;
        $mess = " <strong>Congratulations!!!</strong> Your transaction successfully done! We notify you very soon";
        if($request->isMethod('POST')){
            Mail::to(['ceo@touchandsolve.com'])->send(new NotifyPurchase($trx_id,$phone,$amount));
            return RedirectHelper::routeSuccessWithParams('purchase', $mess);
        }

    }
}
