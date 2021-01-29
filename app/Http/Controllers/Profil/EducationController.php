<?php

namespace App\Http\Controllers\Profil;

use Illuminate\Http\Request;
use App\Profil;
use App\Education;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class EducationController extends Controller
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
    
        

      if(request('Date')== null){

 $day = 1;
        }else {
            $day = 0;
        }
        $today= request('today');
        request()->validate([
        'degree' => 'required',
        'school' => 'required',
        'text' => ['required','min:0','max:1000',],
        'Date'=> ['nullable','digits:4','integer','min:1900','max:2050',],
        'today' => ['nullable','boolean',],
        ]);
        
        $idd = Auth::user()->id;
        $id = Profil::where('user_id',$idd)->firstOrFail()->id;

       
        

             Education::create([
                'degree' => request('degree'),
                'profil_id'=> $id,
                'text' => request('text'),
                'school' => request('school'),
                'endData'=> request('Date'),
                'today' => $day,
                
               
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
    
        

        if(request('Date')== null){
  
   $day = 1;
          }else {
              $day = 0;
          }
          $today= request('today');
          request()->validate([
          'degree' => 'required',
          'school' => 'required',
          'id' => 'required',
          'text' => ['required','min:0','max:1000',],
          'Date'=> ['nullable','digits:4','integer','min:1900','max:2050',],
          'today' => ['nullable','boolean',],
          ]);
          
          
          $idd = Auth::user()->id;
      $id = Profil::where('user_id',$idd)->firstOrFail()->id;
        
      
  
               Education::where('id',request('id'))->where('profil_id', $id)->firstOrFail()->update([
                  'degree' => request('degree'),
                  'text' => request('text'),
                  'school' => request('school'),
                  'endData'=> request('Date'),
                  'today' => $day,
                  
                 
              ]);;
              
             
              return back()->with('success', 'Le Profil a bien été crée');
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
            'degreedelete' => 'required',
            ]);


            $idd = Auth::user()->id;
      $id = Profil::where('user_id',$idd)->firstOrFail()->id;
        
    
      Education::where('degree',request('degreedelete'))->where('profil_id', $id)->delete();
                    
                  
                
                
               
                return back();
    }
    
}
