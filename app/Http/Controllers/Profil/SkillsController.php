<?php

namespace App\Http\Controllers\Profil;

use Illuminate\Http\Request;
use App\Skills;
use App\Profil;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        request()->validate([
        'skill' => 'required',
        
        
        
        ]);
        $idd = Auth::user()->id;
  $id = Profil::where('user_id',$idd)->firstOrFail()->id;
    

             Skills::create([
                'skill' => request('skill'),
                'profil_id' => $id ,
              
            ]);;
            
           
            return back()->with('success', 'Et une compétence de plus!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        request()->validate([
            'skill' => 'required',
            ]);


            $idd = Auth::user()->id;
      $id = Profil::where('user_id',$idd)->firstOrFail()->id;
        
    
                 Skills::where('skill',request('skill'))->where('profil_id', $id)->delete();
                    
                  
                
                
               
                return back();
    }
}
