<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //指定表名
	protected $table = 'article';
    //指定主键
	protected $primaryKey = 'id';
	public $timestamps = true;

	protected $fillable = ['title','content'];

	protected function getDateFormate()
	{
		return time();
	}
	protected function asDateTime($val)
	{
		return $val;
	}

	public function hasManyComments()
	{
		return $this->hasMany('App\Models\Comment','article_id','id');
	}
	public function users()
	{
		return $this->hasOne('App\Models\User','id','user_id')
		->withDefault(['name'=>'Guest Author',]);
	}
}
