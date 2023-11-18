<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Cookie;
class ProfileController extends Controller
{
    public function index(Request $request, $id){
        $name='Donald Trump';
        $age="75";
        $data=['id'=>$id,'name'=>$name,'age'=>$age];
        $accessTokenValue = '123-XYZ';
        $minutes = 1;
        $path = '/';
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;
        return response($data,200)->cookie('access_token', $accessTokenValue, $minutes, $path, $domain, $secure, $httpOnly);
    }
}
