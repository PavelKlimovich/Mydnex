<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use App\MessageContact;
use Illuminate\Http\Request;

class AdminController extends Controller
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
        return view('authAdmin.admin');
    }

    public function listeUsers()
    {
        $users = User::all();

        return view('authAdmin.users', ['user' => $users]);
    }

    public function messages(Request $request)
    {
        $messages = MessageContact::where('see', 0)->latest()->paginate(1);
        if ($request->ajax()) {
            $view = view('authAdmin.layouts.data', compact('messages'))->render();

            return response()->json(['html' => $view]);
        }

        return view('authAdmin.messages', compact('messages'));
    }

    public function deleteMessageContact(Request $request)
    {
        $messages = MessageContact::where('id', request('id'));
        $messages->delete();

        return back()->with('success', 'Le Message a bien été supprimé');
    }
}
