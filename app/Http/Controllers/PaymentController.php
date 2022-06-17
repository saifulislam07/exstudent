<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Admin;
use App\Models\User;
use App\Models\Payment;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller {

    public function pyament() {
        return view('admin.pages.pyament', get_defined_vars());
    }

    public function list_payment() {

        $userid = auth()->user()->id;
        $allPayments = Payment::where('member_id', $userid)->get();
        return view('admin.pages.allpayment', get_defined_vars());
    }

    public function payment_store(Request $request) {
        $userid = auth()->user()->id;
        $this->validate($request, [
            'date' => 'required',
            'type' => 'required',
            'payment_type' => 'required',
            'from_number' => 'required',
            'to_number' => 'required',
            'amount' => 'required',
            'trnxid' => 'required',
        ]);

        $payment = new Payment();
        $payment->date = date('Y-m-d', strtotime($request->date));
        $payment->type = $request->type;
        $payment->member_id = $userid;
        $payment->payment_type = $request->payment_type;
        $payment->from_number = $request->from_number;
        $payment->to_number = $request->to_number;
        $payment->amount = $request->amount;
        $payment->trnxid = $request->trnxid;
        if (!empty($request->note)) {
            $payment->note = $request->note;
        }else{
            $payment->note = '';
        }


        $payment->save();

        session()->flash('success', 'Your Transaction Done, Please wait For Admin Approval.');
        return redirect('/List-payment');
    }

}
