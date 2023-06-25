<?php

namespace App\Http\Controllers;


class GuestController extends Controller
{
    public function article(){
        return view('articles.article', [
            'title' => 'Articles'
        ]);
    }

    public function index()
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

    public function showService()
    {
        return view('service', [
            'title' => 'Service'
        ]);
    }
}
