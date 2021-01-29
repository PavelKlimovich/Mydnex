<?php

namespace App\Http\Controllers;

use App\Article;
use App\Profil;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $navIndex = 'active';

        return view('pages.index', ['navIndex' => $navIndex]);
    }

    public function about()
    {
        $navAbout = 'active';

        return view('pages/about', ['navAbout' => $navAbout]);
    }

    public function causes()
    {
        $navCauses = 'active';
        $Profils = Profil::where('online', 1)->paginate(1);

        return view('pages.causes', ['navCauses' => $navCauses, 'profils' => $Profils]);
    }

    public function rebelle($slug)
    {
        $Profil = Profil::where('slug', $slug)->get();
        $Profilm = Profil::where('slug', $slug)->firstOrFail();
        $messages = $Profilm->messages;
        $skills = $Profilm->skills;
        $educations = $Profilm->educations->sortByDesc('endData')->sortByDesc('today', 1);

        $experiences = $Profilm->experiences;

        return view('pages.rebelle', ['profils' => $Profil, 'messages' => $messages, 'skills' => $skills, 'educations' => $educations, 'experiences' => $experiences]);
    }

    public function contact()
    {
        $navContact = 'active';

        return view('pages.contact', ['navContact' => $navContact]);
    }

    public function blog(Request $request)
    {
        $navBlog = 'active';
        $articles = Article::latest()->paginate(2);
        if ($request->ajax()) {
            $view = view('pages.data', compact('articles'))->render();

            return response()->json(['html' => $view]);
        }

        return view('pages.blog', ['navBlog' => $navBlog], compact('articles'));
    }

    public function new(Request $request)
    {
        $navBlog = 'active';
        $articles = Article::where('category', 1)->paginate(2);
        if ($request->ajax()) {
            $view = view('pages.data', compact('articles'))->render();

            return response()->json(['html' => $view]);
        }

        return view('pages.news', ['navBlog' => $navBlog], compact('articles'));
    }

    public function NosConseils(Request $request)
    {
        $navBlog = 'active';
        $articles = Article::where('category', 5)->paginate(2);
        if ($request->ajax()) {
            $view = view('pages.data', compact('articles'))->render();

            return response()->json(['html' => $view]);
        }

        return view('pages.Nos_conseils', ['navBlog' => $navBlog], compact('articles'));
    }

    public function Economie21th(Request $request)
    {
        $navBlog = 'active';
        $articles = Article::where('category', 2)->paginate(2);
        if ($request->ajax()) {
            $view = view('pages.data', compact('articles'))->render();

            return response()->json(['html' => $view]);
        }

        return view('pages.Économie_21th', ['navBlog' => $navBlog], compact('articles'));
    }

    public function LentretienDembauche(Request $request)
    {
        $navBlog = 'active';
        $articles = Article::where('category', 4)->paginate(2);
        if ($request->ajax()) {
            $view = view('pages.data', compact('articles'))->render();

            return response()->json(['html' => $view]);
        }

        return view('pages.Lentretien_dembauche', ['navBlog' => $navBlog], compact('articles'));
    }

    public function CvModeDemplois(Request $request)
    {
        $navBlog = 'active';
        $articles = Article::where('category', 3)->paginate(2);
        if ($request->ajax()) {
            $view = view('pages.data', compact('articles'))->render();

            return response()->json(['html' => $view]);
        }

        return view('pages.CV_Mode_Demplois', ['navBlog' => $navBlog], compact('articles'));
    }

    public function LesSitesDeRechercheDemploi(Request $request)
    {
        $navBlog = 'active';
        $articles = Article::where('category', 6)->paginate(2);
        if ($request->ajax()) {
            $view = view('pages.data', compact('articles'))->render();

            return response()->json(['html' => $view]);
        }

        return view('pages.Les_sites_de_recherche_demploi', ['navBlog' => $navBlog], compact('articles'));
    }

    public function article($slug)
    {
        $navBlog = 'active';
        $article = Article::all()->where('slug', $slug);

        return view('pages.blog-single', ['navBlog' => $navBlog, 'article' => $article]);
    }
}
