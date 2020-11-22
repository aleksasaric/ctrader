<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function info(Request $request){
        return 'hello world';
    }
}