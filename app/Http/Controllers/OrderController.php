<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Service;
use App\Models\Shoe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function indexAdmin()
    {
        return view('admin.order', [
            'title' => 'Order Admin',
            'shoes' => Shoe::with('user')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('order', [
            'title' => 'Order',
            'shoes' => Shoe::where('id', Auth::getUser()->id)->get(),
            'services' => Service::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $rules = [
            'shoe_id' => 'required|exists:shoes,id',
            'service_id' => 'required|exists:services,id'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->route('dashboard.order.create')
            ->withErrors($validator)
            ->withInput();
        } else {
            $transaction_id = DB::table('transactions')->insertGetId([
                'user_id' => Auth::id()
            ]);
            Order::create([
                'shoe_id' => $request->input('shoe_id'),
                'service_id' => $request->input('service_id'),
                'transaction_id' => $transaction_id
            ]);

            return redirect()->route('dashboard.order.index')->with('success', 'Data Order berhasil ditambahkan');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
