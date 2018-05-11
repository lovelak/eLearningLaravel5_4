<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pretest;
use App\Posttest;
use Auth;
use App\Result;
class PagesController extends Controller
{

    //แบบทดสอบก่่อนเรียน
    public function pretests(){

        $pretests = Pretest::orderByRaw("RAND()")->get();
        return view('home.pretest.index',compact('pretests'));
    }

    public function answerPretests(Request $request){


        // $total = Pretest::all();

        // for($i = 1 ;$i <= count($total) ; $i++){

        //     echo "choice".$i.": ".$request->choice[$i];

        // }
    }

    //แบบทดสอบหลังเรียน
    public function posttests(){

        $posttests = Posttest::orderByRaw("RAND()")->get();
        return view('home.posttest.index',compact('posttests'));
    }


}
