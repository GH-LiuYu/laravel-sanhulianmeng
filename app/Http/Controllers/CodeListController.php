<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CodeList;
use Illuminate\Http\Request;

class CodeListController extends Controller
{

    //股票列表
    public function getLists(){
        $data = CodeList::get();
        return response()->json(['code'=>200,'data'=>$data]);
    }
}
