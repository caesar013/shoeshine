<?php

namespace App\Http\Controllers;

use App\Models\Shoe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ShoeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('shoe', [
            'title' => 'Shoe',
            'shoes' => Shoe::where(Auth::getUser()->id)->get()
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
        $rules = [
            'material' => 'required|string|max:50',
            'color' => 'required|string|max:50',
            'model' => 'required|string|max:50',
            'brand' => 'required|string|max:50',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'modal_close' => false,
                'message' => 'Data gagal ditambahkan. ' . $validator->errors()->first(),
                'data' => $validator->errors()
            ]);
        } else {
            $transaction_id = DB::table('shoes')->insertGetId([
                'user_id' => Auth::id()
            ]);
            $s = Shoe::create([
                'shoe_id' => $request->input('shoe_id'),
                'service_id' => $request->input('service_id'),
                'transaction_id' => $transaction_id
            ]);

            return response()->json([
                'status' => ($s),
                'modal_close' => false,
                'message' => ($s) ? 'Shoes added successfully' : 'Failed',
                'data' => null
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\shoe  $shoe
     * @return \Illuminate\Http\Response
     */
    public function show(shoe $shoe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\shoe  $shoe
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $shoe = Shoe::find($id);
        if ($shoe) {
            return response()->json([
                'status' => true,
                'shoe' => $shoe
            ]);
        } else {
            return response()->json([
                'status' => false,
                'modal_close' => false,
                'message' => 'Shoes not Found',
                'data' => null
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\shoe  $shoe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'material' => 'required|string|max:50',
            'color' => 'required|string|max:50',
            'model' => 'required|string|max:50',
            'brand' => 'required|string|max:50',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'modal_close' => false,
                'message' => 'Data gagal diedit. ' . $validator->errors()->first(),
                'data' => $validator->errors()
            ]);
        } else {
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\shoe  $shoe
     * @return \Illuminate\Http\Response
     */
    public function destroy(shoe $shoe)
    {
        //
    }

    public function fetchData($user_id)
    {
        $shoes = Shoe::where('user_id', $user_id)->get();
        return response()->json([
            'shoes' => $shoes
        ]);
    }
}
