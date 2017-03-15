<?php

namespace App\Http\Controllers;

use App\Article;

class ArticlesController extends Controller {

    public function index()
    {
        $articles = Article::paginate(5);
        $articles->setPath('articles/');

        return view('article.index', compact('articles'));
    }

	public function show($slug)
	{
		$article = Article::where('slug', $slug)->orWhere('id', $slug)->first();

        return view('article.view', compact('article'));
	}

}
