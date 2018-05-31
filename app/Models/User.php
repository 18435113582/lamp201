<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $table = 'user';
      protected $fillable = [
        'username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
    // public function hasManyArticles()
    // {
    //     return $this->hasMany('App\Models\Article','user_id','id');
    // }
    // public function hasManyComments()
    // {
    //     return $this->hasMany('App\Models\Comment','user_id','id');
    // }

}
