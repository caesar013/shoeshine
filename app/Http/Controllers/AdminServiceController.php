<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.service', [
            'title' => 'Service Admin'
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
            'name' => 'required|string|max:50',
            'price' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'error' => $validator->messages()
            ]);
        } else {
            $serv = Service::create($validator->validated());
            return response()->json([
                'status' => true,
                'message' => ($serv) ? 'Service added successfully' : "Failed"
            ]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::find($id);
        if ($service) {
            return response()->json([
                'status' => true,
                'service' => $service
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Service not Found'
            ]);
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $service_id)
    {
        $rules = [
            'id' => 'required|unique:services,id,'.$service_id,
            'name' => 'required|string|max:50',
            'price' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'error' => $validator->messages()
            ]);
        } else {
            $serv = Service::find($service_id);

            if ($serv) {
                $serv->update($validator->validated());

                return response()->json([
                    'status' => true,
                    'message' => ($serv) ? 'Service updated successfully' : 'Failed'
                ]);
            } else {
                return response()->json([
                    'status' => false,
                    'error' => 'Service not Found'
                ]);
            }

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($service_id)
    {
        $serv = Service::find($service_id);
        if ($serv) {
            $serv->delete();

            return response()->json([
                'status' => true,
                'message' => 'Service Removed'
            ]);
        } else {
            return response()->json([
                'status' => false,
                'error' => 'Service not Found'
            ]);
        }

    }

    public function fetchData(){
        return response()->json([
            'services' => Service::all()
        ]);
    }
}
