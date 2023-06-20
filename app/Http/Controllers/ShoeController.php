<?php

namespace App\Http\Controllers;

use App\Models\Shoe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
            'title' => 'Shoe'
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
        $request->merge(['user_id' => Auth::getUser()->id]);
        $rules = [
            'user_id' => 'exists:users,id',
            'material' => 'required|string|max:50',
            'color' => 'required|string|max:50',
            'model' => 'required|string|max:50',
            'brand' => 'required|string|max:50',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->messages()
            ]);
        } else {
            $s = Shoe::create($validator->validated());
            return response()->json([
                'status' => true,
                'shoe' => $validator->validated(),
                'message' =>($s) ? 'Shoes added successfully':'Failed'
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
                'message' => 'Shoes not Found'
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
            'id' => 'unique:shoes,id,' . $id,
            'material' => 'required|string|max:50',
            'color' => 'required|string|max:50',
            'model' => 'required|string|max:50',
            'brand' => 'required|string|max:50',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'error' => $validator->messages()
            ]);
        } else {
            $s = Shoe::find($id);

            if($s){
                $s->update($validator->validated());

                return response()->json([
                    'status' => true,
                    'message' => ($s) ? 'Data updated successfully' : 'Failed'
                ]);
            } else {
                return response()->json([
                    'status' => false,
                    'error' => "Shoes not found"
                ]);
            }

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\shoe  $shoe
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $s = Shoe::where('id','=',$id)->first();
        if ($s) {
            $s->delete();

            return response()->json([
                'status' => true,
                'message' => 'Data removed successfully'
            ]);
        } else {
            return response()->json([
                'status' => false,
                'error' => 'Shoes not Found'
            ]);
        }



    }

    public function fetchData()
    {
        $shoes = Shoe::where('user_id', Auth::getUser()->id)->get();
        return response()->json([
            'shoes' => $shoes
        ]);
    }
}
