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

    public function gallery(){
        return view('gallery', [
            'title' => 'Gallery'
        ]);
    }

    public function article(){
        return view('article', [
            'title' => 'Articles'
        ]);
    }

    public function showGuestHome()
    {
        return view('welcome', [
            'title' => 'Welcome'
        ]);
    }

    public function showTestimoni(){
        return view('testimoni', [
            'title' => 'Testimoni'
        ]);
    }
}
