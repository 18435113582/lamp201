<?php

namespace App\admin\Model;

use Illuminate\Database\Eloquent\Model;

class partsName extends Model
{
    /**
     * 与模型关联的数据表
     *
     * @var string
     */
    protected $table = 'price_name';

    public $timestamps = false;

    protected $primaryKey = 'pid';

    protected $fillable = ['aname'];

    /**
    * 获取与名字相关的价格详情
    */

    public function Price()
    {

    	return $this->hasOne('App\admin\Model\Price','aid');

    }

}
