<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pretest;
use App\Posttest;


class PagesController extends Controller
{

    //แบบทดสอบก่่อนเรียน
    public function pretests(){

        $pretests = Pretest::all();
        return view('home.pretest.index',compact('pretests'));
    }

    public function answerPretests(Request $request){


        $score=0;
        for($i=1;$i<=count($request->id);$i++)
        {

          echo  $ch = $request->choice.$i;
            if( $ch == คำตอบจากฐานข้อมูล)
            {
                $score = $score+1;
            }
        }
       echo "True $score<br>";
    }

    //แบบทดสอบหลังเรียน
    public function posttests(){

        $posttests = Posttest::orderByRaw("RAND()")->get();
        return view('home.posttest.index',compact('posttests'));
    }


}
