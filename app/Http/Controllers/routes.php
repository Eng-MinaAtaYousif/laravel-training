<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

use App\Models\test ;
class routes extends Controller
{

    public function testpage_fn () {
        return view('testPage') ;
    }


    public function testpage_fn_model () {
        return view('testPage' , [
            'data' => test::all1()
        ]) ;
    }

    public function viewpage (){
        return \response('viewpage') ;
    }
}
