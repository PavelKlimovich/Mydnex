<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\MessageContact;
use Illuminate\Support\Facades\DB;
use App\Mail\NewMessage;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
{
    public function sendmessage()
    {
        request()->validate([
             'name' => 'required',
             'profil_email' => ['required', 'email'],
             'objet' => 'required',
             'message' => ['required', 'max:1000'],
        ]);

        $profil_id = DB::table('profils')->where('email', request('profil_email'))->value('id');

        Message::create([
            'profil_id' => $profil_id,
            'name' => request('name'),
            'email' => request('email'),
            'objet' => request('objet'),
            'message' => request('message'),
            'see' => false,
         ]);

        Mail::to(request('profil_email'))->send(new NewMessage());

        return back()->with('success', 'Votre message a bien été envoyé !');
    }

    public function sendmessagetomydnex()
    {
        request()->validate([
                'name' => 'required',
                'email' => ['required', 'email'],
                'objet' => 'required',
                'message' => ['required', 'max:1000'],
           ]);

        MessageContact::create([
            'name' => request('name'),
            'email' => request('email'),
            'objet' => request('objet'),
            'message' => request('message'),
            'see' => false,
         ]);

        return back()->with('success', 'Votre message a bien été envoyé !');
    }
}
