<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pretest;
use App\Posttest;
use Auth;
use App\Result;
use App\Score;
class PagesController extends Controller
{

    //แบบทดสอบก่่อนเรียน
    public function pretests(){

        $pretests = Pretest::orderByRaw("RAND()")->get();
        return view('home.pretest.index',compact('pretests'));
    }

    public function answerPretests(Request $request){

            //loop บันทึกคำตอบที่เลือก
            foreach($request->choice as $index => $value) {
              //  echo "pretestid : ".$index."Value : ".$value."<br/>";
              //  echo "Choice : ".$index." Value :".$value."<br/>";
                $result = new Result;
                $result->choice = $value;
                $result->pretest_id =$index; 
                $result->user_id = Auth::id();
                $result->save();
            
            }

            $pretests = Pretest::get();
            $sum = 0 ;  
            foreach($pretests as $pretest){

                $results = Result::where('user_id',Auth::id())->where('pretest_id',$pretest->id)->get();
                $i = 0;   
                 //loop ตรวจคำตอบ
                foreach($results as $result){
        
                            if($pretest->answer == $result->choice){
                                     $sum = $sum + 1 ;
                            }else{
                                    $sum = $sum +0;
                            }       
                } 

            }

            //บันทึกคะแนน
            $score = new Score;
            $score->total = $sum ; 
            $score->question_name = "pretests";
            $score->user_id = Auth::id();
            $score->save();
           

            return "OK";
           

    }

    //แบบทดสอบหลังเรียน
    public function posttests(){

        $posttests = Posttest::orderByRaw("RAND()")->get();
        return view('home.posttest.index',compact('posttests'));
    }


}
