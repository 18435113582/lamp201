<?php

namespace App\admin\Model;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    /**
     * 与模型关联的数据表
     *
     * @var string
     */
    protected $table = 'accessories';

    public $timestamps = false;

    protected $primaryKey = 'aid';

    protected $fillable = ['screen','mainboard','fcamera','acamera','cell','plug','usbCable','headset'];

    public function partsName()
    {
    	return $this->belongsTo('App\admin\Model\partsName','aid');
    }
}
