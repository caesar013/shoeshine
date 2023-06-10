<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard', [
            'title' => 'Home',
            'active' => 'home'
        ]);
    }

    public function gallery(){
        return view('gallery', [
            'title' => 'Gallery',
            'active' => 'gallery'
        ]);
    }

    public function article(){
        return view('article', [
            'title' => 'Articles',
            'active' => 'articles'
        ]);
    }
}
