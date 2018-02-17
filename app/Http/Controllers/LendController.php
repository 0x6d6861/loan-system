<?php

namespace App\Http\Controllers;

use App\Lend;
use Illuminate\Http\Request;
use Auth;

class LendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // TODO:: use lends of the currently logged in user
        $lends = Auth::user()->account->lends;
        return view('modules.Lend.index', ['lends' => $lends]);
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
        //
        // TODO: use logedin user and get his lends then inserst
        // TODO: use DB transactions
        $lend = new Lend();
        $lend->amount = $request->input('amount');
        $lend->percentage = $request->input('percentage');
        $lend->status_id = Status::where('default', 1)->first()->id;
        
        Auth::user()->account->lends()->attach($lend); // to Investigate
        
        $transaction = new Transaction();
        $transaction->type = "LEND";
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
        $lend = Lend::findOrFail($id);
        return $lend;
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
        $lend = Lend::findOrFail($id);
        $lend->percentage = $request->input('percentage');
        $lend->amount = $request->input('amount');
        $lend->save();
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
        Lend::findOrFail($id)->destroy();

    }
}
