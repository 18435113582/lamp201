<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $table = 'comments';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = ['user_id','username','content','art_id'];

    // public function user(){
    // 	return $this->belongsTo('App\Models\User');
    // }
    
    public function getUname(){
        return $this->hasOne('App\Models\User','user_id','id');
    }

    // public function replys(){
    // 	return $this->hasMany('App\Models\Reply');
    // }
}
