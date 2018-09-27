<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\articlesRequest;


use App\Article;
use App\Category;
use App\Tag;
use App\User;
use App\Image;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $article = Article::Search($request->search)->orderBy('id','DESC')->paginate(10);
        $article->each(function($article){
            $article->user;
            $article->category;
            $article->tags;
        });
        // dd($article);
        return view('admin.articles.index')->with('article',$article);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.articles.create')
        ->with('categories', $categories)
        ->with('tags', $tags);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(articlesRequest $request)
    {
        if ($request->file('image')) {
            $file = $request->file('image');
            $nameImage = 'blog_personal'.time().'.'.$file->getClientOriginalExtension();
            $path = public_path().'\img\articles';
            $file->move($path,$nameImage);
        }

        $article = new Article;
        $article->title = $request->title;
        $article->content = $request->content;
        $article->user_id = \Auth::user()->id;
        $article->category_id = $request->category;
        $article->save();

        $article->tags()->sync($request->tags);


        $image = new Image;
        $image->name = $nameImage;
        $image->article()->associate($article);
        $image->save();
        return back()->with('info','Se ha creado el articulo de manera exitosa!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tags= Tag::all();
        $categories= Category::all();
        $article= Article::find($id);
        // $my_tags = $article->tags()->lists('id');
        // dd($my_tags);


        return view('admin.articles.edit')
        ->with('article',$article)
        ->with('categories',$categories)
        ->with('tags',$tags);
        // ->with('my_tags',$my_tags);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $article= Article::find($id);
        $article->fill($request->all());
        $article->tags()->sync($request->tags);
        $article->save();

        return back()->with('info','Articulo actualizado con exito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();
        return back()->with('info','El articulo fue eliminado con exito');
    }
}
