<?php

namespace App\Http\Controllers;

use App\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $payments = Auth::user()->payments;
        return view('modules.Payment.index', ['payments' => $payments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // TODO: Use this methd instead
        // TODO: use Transactions and update Transaction Model with type PAYMENT
        $user = Auth::user();
        $payment = new Payment();
        $payment->user_id = $user->id; // TODO: To be refactored
        $payment->amount = $request->input('amount');
        $payment->transaction_id = $request->input('transaction_id');
        $payment->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $payment = Payment::findOrFail($id);
        return $payment;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // TODO: use transactions and update transaction table
        $payment = Payment::findOrFail($id);
        //$payment->user_id = $user->id; // TODO: To be refactored
        $payment->amount = $request->input('amount');
        $payment->transaction_id = $request->input('transaction_id');
        $payment->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Payment::findOrFail($id)->destroy();
        return true;
    }
}
