<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    function home($id){
        if($id == 1){
            $s['name1']= "md firoj hasan";

        }else{
            $s['name2']= "md shoriful hasan";

        }
        return view('home.home', $s);
    }
}
