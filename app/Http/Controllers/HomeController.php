<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\Profil;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $id = Auth::user()->id;
        $idd = Profil::where('user_id', $id)->value('id');

        $messages = Message::where('profil_id', $idd)->where('see', 0)->latest()->paginate(1);
        if ($request->ajax()) {
            $view = view('profil.layouts.data', compact('messages'))->render();

            return response()->json(['html' => $view]);
        }

        return view('profil.home', compact('messages'));
    }

    public function deleteMessage(Request $request)
    {
        $id = Auth::user()->id;
        $idd = Profil::where('user_id', $id)->value('id');
        $messages = Message::where('profil_id', $idd)->where('id', request('id'))->firstOrFail();

        $messages->delete();

        return back()->with('success', 'Le Message a bien été supprimé');
    }
}
