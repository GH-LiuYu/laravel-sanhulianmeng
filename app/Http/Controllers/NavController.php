<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Nav;
use Illuminate\Http\Request;

class NavController extends Controller
{

    /**
     * 新增导航数据
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function addNav(Request $request){
        $flight = Nav::firstOrCreate(['name' => $request['form']['name'], 'sort' =>$request['form']['sort']]);
        return response()->json(['code'=>200,'data'=>$flight]);
    }

    /**
     * 获取导航列表
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getNavs(Request $request){

        if($request['id']){
            return $this->getNav($request['id']);
        }
        if($request['page']==1){
            $page =0;
        }else{
            $page = ($request['page']-1)*$request['pageSize'];
        }
        $nav =  Nav::offset($page)->limit($request['pageSize'])->get();
        $count = Nav::count();
        return response()->json(['code'=>200,'data'=>$nav,'total'=>$count]);
    }

    private function getNav($id){
        $nav = Nav::find($id);
        return response()->json(['code'=>200,'data'=>$nav]);
    }

    public function postNav(Request $request){

        $nav = Nav::find($request['form']['id']);
        $nav->name = $request['form']['name'];
        $nav->sort = $request['form']['sort'];
        $nav->save();
        return response()->json(['code'=>200,'data'=>'更新成功']);
    }

    public function deleteNav(Request $request){
        $nav = Nav::find($request['id']);
        $nav->delete();
        return response()->json(['code'=>200,'data'=>'删除成功']);
    }
}
