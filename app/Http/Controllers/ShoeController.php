<?php

namespace App\Http\Controllers;

use App\Models\shoe;
use Illuminate\Http\Request;

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
            'active' => 'shoe'
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
    public function edit(shoe $shoe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\shoe  $shoe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, shoe $shoe)
    {
        //
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
}
