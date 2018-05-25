<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cate extends Model
{
    protected $table = 'shop_cates';
    protected $pk = 'cid';
    public function goods()
    {
        return $this->hasMany('App\Goods','cid');
    }
}
