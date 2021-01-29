<?php

namespace App\Http\Controllers\Profil;

use Illuminate\Http\Request;
use App\Experience;
use App\Profil;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class ExperienceController extends Controller
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
        
        
        
        $day;


      if(request('endData')== null){

 $day = 1;
        }else {
            $day = 0;
        }
        request()->validate([
        'society' => 'required',
        'category' => 'required',
        'text' => ['required', 'max:1000',],
        'title'=> 'required',
        'city'=> 'required',
        'starData'=> ['required', 'date',],
        'endData'=> ['required_if:today,!=,today','nullable','date',],
        'category'=> 'required',
        
        
        
        ]);
        
        $idd = Auth::user()->id;
        $id = Profil::where('user_id',$idd)->firstOrFail()->id;

       
        

             Experience::create([
                'society' => request('society'),
                'profil_id'=> $id,
                'text' => request('text'),
                'title' => request('title'),
                'category'=> request('category'),
                'endData'=> request('endData'),
                'starData' => request('starData'),
                'today' => $day,
                'city' => Str::slug(request('city'), ','),
                
            ]);;
            
           
            return back()->with('success', 'Le Profil a bien été crée');
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
    public function update()
    {
        $day;


      if(request('endData')== null){

 $day = 1;
        }else {
            $day = 0;
        }
        request()->validate([
        'society' => 'required',
        'category' => 'required',
        'id' => 'required',
        'text' => ['required', 'max:1000',],
        'title'=> 'required',
        'city'=> 'required',
        'starData'=> ['required', 'date',],
        'endData'=> ['required_if:today,!=,today','nullable','date',],
        'category'=> 'required',
        
        
        
        ]);
        
        $idd = Auth::user()->id;
        $id = Profil::where('user_id',$idd)->firstOrFail()->id;



        Experience::where('id',request('id'))->where('profil_id',$id)->firstOrFail()->update([
                'society' => request('society'),
                'text' => request('text'),
                'title' => request('title'),
                'category'=> request('category'),
                'endData'=> request('endData'),
                'starData' => request('starData'),
                'today' => $day,
                'city' => Str::slug(request('city'), ','),
                
            ]);;
           

       
        

           
                
            
           
            return back()->with('success', 'Le Profil a bien été modifié');
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
            'titledelete' => 'required',
            ]);


            $idd = Auth::user()->id;
      $id = Profil::where('user_id',$idd)->firstOrFail()->id;
        
    
      Experience::where('title',request('titledelete'))->where('profil_id', $id)->delete();
                    
                  
                
                
               
                return back();
    }
    
}
