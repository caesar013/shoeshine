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
        return view('articles.article', [
            'title' => 'Articles'
        ]);
    }

    public function showGuestIndex()
    {
        return view('dashboard', [
            'title' => 'Welcome'
        ]);
    }

    public function showTestimony(){
        return view('testimoni', [
            'title' => 'Testimoni'
        ]);
    }

    public function showArticle($id){
        $article = 'articles.article'.$id;
        return view($article, [
            'title' => 'Article '.$id
        ]);
    }

    public function showAdminIndex()
    {
        return view('dashboard', [
            'title' => 'Home Admin'
        ]);
    }
}
