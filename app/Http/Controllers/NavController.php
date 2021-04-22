<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Nav;
use Illuminate\Http\Request;

class NavController extends Controller
{

    public function add(Request $request){
        $flight = Nav::firstOrCreate(['name' => $request['form']['name'], 'sort' =>$request['form']['sort']]);
        return $flight;
    }
}
