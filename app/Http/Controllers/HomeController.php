<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard', [
            'title' => 'Home'
        ]);
    }

    public function showGallery(){
        return view('gallery', [
            'title' => 'Gallery'
        ]);
    }

    public function showAdminIndex()
    {
        return view('dashboard', [
            'title' => 'Home Admin'
        ]);
    }
}
