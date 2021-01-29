<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'name', 'slug', 'email', 'job','city','user_id','image','category','online','presentation','about',
    ];

  public function messages(){

   return $this->hasMany(Message::class);
  }
  public function skills(){

    return $this->hasMany(Skills::class);
   }
   public function experiences(){

    return $this->hasMany(Experience::class)->latest('starData');
   }
   public function educations(){

    return $this->hasMany(Education::class)->latest('endData');
   }
   
}
