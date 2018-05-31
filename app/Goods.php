<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    protected $table = 'shop_goods';
    protected $pk = 'gid';

    public function cate()
{
    return $this->belongsTo('App\Cate','cid');
}
}
