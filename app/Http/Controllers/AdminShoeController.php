<?php

namespace App\Http\Controllers;

use App\Models\Shoe;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminShoeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.shoe', [
            'title' => 'Admin Shoes',
            'users' => User::all()
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
                'error' => $validator->messages()
            ]);
        } else {
            $s = Shoe::create($validator->validated());
            return response()->json([
                'status' => true,
                'message' =>($s) ? 'Shoes added successfully':'Failed'
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shoe  $shoe
     * @return \Illuminate\Http\Response
     */
    public function show(Shoe $shoe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shoe  $shoe
     * @return \Illuminate\Http\Response
     */
    public function edit($shoe_id)
    {
        $shoe = Shoe::where('id', '=', $shoe_id)->first();
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
     * @param  \App\Models\Shoe  $shoe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user_id)
    {
        $rules = [
            'id' => 'unique:shoes,id,' . $user_id,
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
            $s = Shoe::where('id', '=', $user_id);

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
     * @param  \App\Models\Shoe  $shoe
     * @return \Illuminate\Http\Response
     */
    public function destroy($shoe_id)
    {
        $s = Shoe::where('id', '=', $shoe_id);
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
        $users = User::all();
        $output = [];

        foreach ($users as $user) {
            if ($user->shoe) {
                foreach ($user->shoe as $s) {
                    $output[] = [
                        'user' => $user->username." - ".$user->name,
                        'shoe_brand' => $s->brand,
                        'shoe_color' => $s->color,
                        'shoe_material' => $s->material,
                        'shoe_model' => $s->model,
                        'shoe_id' => $s->id
                    ];
                }
            }
        }
        return response()->json($output);
    }
}
