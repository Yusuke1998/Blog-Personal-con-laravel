<?php

namespace App\Http\Controllers;
use App\Article;
use App\Category;
use App\Tag;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function indexAdmin(){
        $now = date('Y-m-d h:m:s');
        // $articles = Article::orderBy('id','DESC')->paginate();
        $articles = Article::orderBy('created_at','DESC')->paginate(6);
        $articles->each(function($articles){
            $articles->user;
            $articles->category;
            $articles->tags;
            $articles->images;
        });
                
        return view('admin.index')->with('articles',$articles);
    }

    public function searchCategory($name){
        $category = Category::SearchCategory($name)->first();
        $articles = $category->articles()->paginate(4);
        $articles->each(function($articles){
        $articles->category;
        $articles->images;
        });

        return view('admin.index')->with('articles',$articles);
    }

    public function searchTag($name){
        $tag = Tag::SearchTag($name)->first();
        $articles = $tag->articles()->paginate(4);
        $articles->each(function($articles){
        $articles->category;
        $articles->images;
        });

        return view('admin.index')->with('articles',$articles);
    }

    public function viewArticle($id){
        $article = Article::find($id);
        $article->each(function($article){
            $article->user;
            $article->category;
            $article->tags;
            $article->images;
        });
        return view('admin.articles.show')->with('article',$article);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
}


