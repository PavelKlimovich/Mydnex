<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MessageContact extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'objet', 'name', 'message', 'email', 'see',
    ];
}
