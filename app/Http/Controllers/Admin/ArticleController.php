<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Article;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth:admin']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('authAdmin.post_article');
    }

    public function editArticle($slug)
    {
        $article = Article::all()->where('slug', $slug);

        return view('authAdmin.updatearticle', ['article' => $article]);
    }

    public function listeArticles()
    {
        $article = Article::all();

        return view('authAdmin.articles', ['article' => $article]);
    }

    public function post()
    {
        request()->validate(['image' => ['required', 'image'],
        'title' => 'required',
        'content' => 'required',
        'texte' => 'required|min:100',
        ]);

        $path = request('image')->store('Article/images', 'public');

        Article::create([
            'title' => request('title'),
            'content' => request('content'),
            'author' => request('author'),
            'texte' => request('texte'),
            'category' => request('category'),
            'image' => $path,
            'source' => request('source'),
            'link' => request('link'),
            'slug' => Str::slug(request('title'), '-'),
        ]);

        return redirect(route('yoda.articles'))->with('success', 'L\'Article a bien été crée !');
    }

    public function updateArticle(Request $request)
    {
        request()->validate(['image' => ['required', 'image'],
        'title' => 'required',
        'content' => 'required',
        'texte' => 'required|min:100',
        ]);
        $path = request('image')->store('Article/images', 'public');

        Article::where('id', request('id'))->update([
                'title' => request('title'),
                'content' => request('content'),
                'author' => request('author'),
                'texte' => request('texte'),
                'category' => request('category'),
                'image' => $path,
                'source' => request('source'),
                'link' => request('link'),
                'slug' => Str::slug(request('title'), '-'),
            ]);

        return redirect(route('yoda.articles'))->with('success', 'L\'Article a bien été modifiée');
    }

    public function deleteArcicle(Request $request)
    {
        $article = Article::findOrFail(request('id'));
        $article->delete();

        return redirect(route('yoda.articles'))->with('success', 'L\'Article a bien été supprimé');
    }
}
