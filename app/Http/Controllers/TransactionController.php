<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Service;
use App\Models\Shoe;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('trans', [
            'title' => 'Transactions'
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
    public function showOrder($order_id)
    {
        $order = Order::where('id', '=', $order_id)->first();
        $shoe = Shoe::where('id', '=', $order->shoe_id)->first();
        $service = Service::where('id', '=', $order->service_id)->first();
        return response()->json([
            'shoe' => $shoe->model." - ".$shoe->material,
            'service' => $service->name." - ".$service->price
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        //
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
        $transactions = Transaction::where('user_id', '=', Auth::id())->get();

        $output = [];

        foreach ($transactions as $value) {
            foreach ($value->order as $bar) {
                $output[] = [
                    'transaction_id' => $value->id,
                    'order_id' => $bar->id,
                    'tanggal' => $value->created_at->toDateString().", ".$value->created_at->diffForHumans(),
                    'shoe' => $bar->shoe->brand." - ".$bar->shoe->color,
                    'status' => $value->status->name
                ];
            }
        }

        return response()->json($output);
    }
}
