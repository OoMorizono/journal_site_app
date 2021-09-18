<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // indexページ移動
    public function index()
    {
        //テーブル全件取得
        $articles = Article::all();
        //Articlesディレクトリの中のindexページを指定し､Articlesの連想配列を代入
        return view('articles.index', ['articles' =>$articles]);
    }
    public function show($id)
    {
        $article =Article::find($id);
        return view('articles.show', ['article' => $article]);
    }
}
