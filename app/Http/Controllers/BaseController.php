<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Lending;
use App\Statistic;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    function index(){
        return 'Главная страница';
    }
    function createOrder(Request $request){
        $input=$request->all();
        $id=Lending::where('local_url','=', $input['lending_id'])->first();
        $input['lending_id']=$id['id'];
        var_dump($input);
    }
    function lending($id){
//        return '111';
        $lending=Lending::where('local_url', $id)->first()->toArray();
        $comments =Comment::where('lending_id','=',$lending['id'])->get()->toArray();

//        return $lending;
        if(!empty($lending)){
            return view('layouts.lending-loyout',compact('lending', 'comments'));
        }else{
//            abort(404);
        }
    }
}
