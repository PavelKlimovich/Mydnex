<?php

namespace App\Http\Controllers\Profil;

use App\Http\Controllers\Controller;
use App\User;
use App\Profil;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
    public function index()
    {
        $idAuth = Auth::user()->id;

        $Profil = Profil::where('user_id', $idAuth)->value('user_id');
        //  dd($Profil);
        if ($idAuth == $Profil) {
            $Profil = Profil::where('user_id', $idAuth)->get();
            $Profilm = Profil::where('user_id', $idAuth)->firstOrFail();
            $skills = $Profilm->skills;
            $educations = $Profilm->educations->sortByDesc('endData')->sortByDesc('today', 1);

            $experiences = $Profilm->experiences->sortByDesc('starData');

            return view('profil.index', ['profil' => $Profil, 'skills' => $skills, 'educations' => $educations, 'experiences' => $experiences]);
        }

        return view('profil.createprofil');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        request()->validate(['image' => ['required', 'image'],
        'name' => 'required',
        'firstname' => 'required',
        'email' => ['required', 'string', 'email'],
        'job' => 'required',
        'city' => 'required',
        'about' => ['required', 'max:100'],
        'category' => 'required',
        'presentation' => ['required', 'max:255'],
        ]);
        $idAuth = Auth::user()->id;

        $dossier = $idAuth;
        $path = request('image')->store("ImagesProfil/Users$dossier", 'public');

        $Profil = Profil::where('slug', Str::slug(request('firstname').request('name'), ''))->value('slug');
        $rr = Str::slug(request('firstname').request('name'), '');

        if ($Profil == $rr) {
            $slug = Str::slug($idAuth.request('firstname').request('name'), '');
        } else {
            $slug = Str::slug(request('firstname').request('name'), '');
        }

        Profil::create([
                'name' => request('name'),
                'firstname' => request('firstname'),
                'user_id' => $idAuth,
                'email' => request('email'),
                'job' => request('job'),
                'category' => request('category'),
                'about' => request('about'),
                'presentation' => request('presentation'),
                'image' => $path,
                'online' => 1,
                'city' => request('city'),
                'slug' => $slug,
            ]);

        return back()->with('success', 'Le Profil a bien été crée');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        request()->validate([
            'image' => ['nullable', 'image'],
        'name' => 'required',
        'firstname' => 'required',
        'email' => ['required', 'string', 'email'],
        'job' => 'required',
        'city' => 'required',
        'about' => ['required', 'max:200'],
        'category' => 'required',
        'presentation' => ['required', 'max:255'],
        ]);

        $idd = Auth::user()->id;
        $dossier = $idd;
        if (!empty(request('image'))) {
            $path = request('image')->store("ImagesProfil/Users$dossier", 'public');

            Profil::where('user_id', $idd)->firstOrFail()->update([
                'name' => request('name'),
                'firstname' => request('firstname'),
                'email' => request('email'),
                'job' => request('job'),
                'category' => request('category'),
                'about' => request('about'),
                'image' => $path,
                'presentation' => request('presentation'),
                'city' => request('city'),
                'slug' => Str::slug(request('firstname').request('name'), '-'),
            ]);
        }

        Profil::where('user_id', $idd)->firstOrFail()->update([
        'name' => request('name'),
        'firstname' => request('firstname'),
        'email' => request('email'),
        'job' => request('job'),
        'category' => request('category'),
        'about' => request('about'),
        'presentation' => request('presentation'),
        'city' => request('city'),
        'slug' => Str::slug(request('firstname').request('name'), '-'),
    ]);

        return back()->with('success', 'Le Profil a bien été modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}
