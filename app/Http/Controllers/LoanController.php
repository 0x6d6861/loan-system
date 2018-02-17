<?php

namespace App\Http\Controllers;

use App\Loan;
use App\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // TODO:: use loans of the currently logged in user
        $loans = Auth::user()->account->loans;
        return view('modules.Loan.index', ['loans' => $loans]);
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
        // TODO: use logedin user and get his loans then inserst
        // TODO: use DB transactions
        // TODO: Form validations and if the date for paying is not in the past
        $loan = new Loan();
        $loan->amount = $request->input('amount');
        $loan->message = $request->input('message');
        $loan->reason = $request->input('reason');
        $loan->percentage = $request->input('percentage');
        $load->status_id = Status::where('default', 1)->first()->id;
        
        
        // $loan->account_id = Auth::user()->account->id;
        // $loan->save();
        
        Auth::user()->account->loans()->attach($loan); // to Investigate
        
        $transaction = new Transaction();
        $transaction->type = "LOAN";
        $transaction->amount = $loan->amount;
        $transaction->account_id = Auth::user()->account->id;
        
        $transaction->save();
        
        return redirect()->back();
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
        $loan = Loan::findOrFail($id);
        return $loan;
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
        //
        $loan = Loan::findOrFail($id);
        $loan->percentage = $request->input('percentage');
        $loan->amount = $request->input('amount');
        $loan->save();
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
        Loan::findOrFail($id)->destroy();
    }
}
