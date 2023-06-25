<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Service;
use App\Models\Shoe;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
            'shoes' => Shoe::where('user_id', Auth::getUser()->id)->get(),
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
            'transaction_id' => 'nullable|exists:transactions,id',
            'shoe_id' => 'required|exists:shoes,id',
            'service_id' => 'required|exists:services,id'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'error' => 'Data not valid'
            ]);
        } else {
            $trans = Transaction::create([
                'user_id' => Auth::id()
            ]);

            $validated = $validator->validated();

            $validated["transaction_id"] = $trans->id;

            $or = Order::create($validated);

            return response()->json([
                'status' => true,
                'message' => ($or) ? 'Order queued successfully' : "Failed"
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show( )
    {

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
