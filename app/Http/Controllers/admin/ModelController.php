<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\admin\Model\partsName;
use App\admin\Model\Price;

class ModelController extends Controller
{
    //

    public function oneAdd(Request $req)
    {
    	$price = $req->except('_token','aname');

    	$priceName['aname'] = $req->input('aname');

    	$res = partsName::create($priceName);

    	$id = $res->pid;

    	$partsName = partsName::find($id);

    	$comment = $partsName->Price()->create($price);

    	return redirect('admin/priceIndex');

    }

    public function priceEdit($id)
    {

    	$err = partsName::with('Price')->where('pid',$id)->first();

    	// dd($err);

    	return view('admin.PriceContent.priceEdit',['err'=>$err,'title'=>'价格修改']);

    }

    public function priceUpdate(Request $req,$id)
    {

    	$arr = $req->except('_token','aname');

    	$arrName['aname'] = $req->input('aname');

    	$res = partsName::where('pid',$id)->update($arrName);

    	$partsName = partsName::find($id);

    	$comment = $partsName->Price()->update($arr);

    	return redirect('admin/priceIndex');

    }

    public function priceDelete($id)
    {

    	$info = partsName::find($id);

    	$info->delete();

    	$nameInfo = $info->Price()->delete();

    	return redirect('admin/priceIndex');

    }

    public function priceAjax(Request $req)
    {

        $nrr = $req->get('aname');

        $datas = partsName::with('Price')->where('pid',$nrr)->first();

        // return $datas;
        $datass = $datas['Price'];
        $datass['aname'] = $datas['aname'];

        return $datass;
        
    }

    
}
