<?php

namespace App\Http\Controllers;

use App\Models\STATUS;
use App\Models\Transaction;
use Illuminate\Http\Request;

class AdminTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.transaction', [
            'title' => "Admin Transaction"
        ]);
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit($transaction_id)
    {
        $transaction = Transaction::with('order')->where('id', '=', $transaction_id)->first();
        $status = STATUS::all();

        if ($transaction) {
            return response()->json([
                'status' => true,
                'status_choices' => $status,
                'status_transaction' => $transaction->status_id
            ]);
        } else {
            return response()->json([
                'status' => false,
                'error' => 'Error with the ID'
            ]);
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }

    public function fetchData()
    {
        $transactions = Transaction::all();

        $output = [];

        foreach ($transactions as $value) {
            foreach ($value->order as $order) {
                $output[] = [
                    'user' => $value->user->username." - ".$value->user->name,
                    'transaction_id' => $value->id,
                    'order_id' => $order->id,
                    'tanggal' => $value->created_at->toDateString().", ".$value->created_at->diffForHumans(),
                    'shoe' => $order->shoe->brand." - ".$order->shoe->color,
                    'status' => $value->status->name
                ];
            }
        }

        return response()->json($output);
    }
}
