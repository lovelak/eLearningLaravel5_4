<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pretest;
use App\Posttest;
use Auth;
use App\ResultPretest;
use App\ResultPosttest;
use App\Score;
use Session;
use App\Tests;
use App\Result_test;
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
                $result = new ResultPretest;
                $result->choice = $value;
                $result->pretest_id =$index; 
                $result->user_id = Auth::id();
                $result->save();
            
            }

            $pretests = Pretest::get();
            $sum = 0 ;  
            foreach($pretests as $pretest){

                $results = ResultPretest::where('user_id',Auth::id())->where('pretest_id',$pretest->id)->get();
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
           
            Session::flash('success','ส่งคำตอบของแบบทดสอบก่อนเรียนเรียบร้อยแล้ว');
            return redirect()->back();
            //return "OK";
           

    }

    //แบบทดสอบหลังเรียน
    public function posttests(){

        $posttests = Posttest::orderByRaw("RAND()")->get();
        return view('home.posttest.index',compact('posttests'));
    }
    public function answerPosttests(Request $request){
        
        //loop บันทึกคำตอบที่เลือก
        foreach($request->choice as $index => $value) {
          //  echo "pretestid : ".$index."Value : ".$value."<br/>";
          //  echo "Choice : ".$index." Value :".$value."<br/>";
            $result = new ResultPosttest;
            $result->choice = $value;
            $result->posttest_id =$index;
            $result->user_id = Auth::id();
            $result->save();
        
        }

        $posttests = Posttest::get();
        $sum = 0 ;  
        foreach($posttests as $posttest){

            $results = ResultPosttest::where('user_id',Auth::id())->where('posttest_id',$posttest->id)->get();
            $i = 0;   
             //loop ตรวจคำตอบ
            foreach($results as $result){
    
                        if($posttest->answer == $result->choice){
                                 $sum = $sum + 1 ;
                        }else{
                                $sum = $sum +0;
                        }       
            } 

        }

        //บันทึกคะแนน
        $score = new Score;
        $score->total = $sum ; 
        $score->question_name = "posttests";
        $score->user_id = Auth::id();
        $score->save();
       

        Session::flash('success','ส่งคำตอบของแบบทดสอบหลังเรียนเรียบร้อยแล้ว');
        return redirect()->back();
        //return "OK";
       

    
    }
      //แบบทดสอบประจำหน่วยเรียนรู้
    public function tests($unit_id){

        $tests = Tests::where('unit_id',$unit_id)->orderByRaw("RAND()")->get();

        return view('home.test.index',compact('tests','unit_id'));
    }
    public function answerTests(Request $request){
        
        //loop บันทึกคำตอบที่เลือก
        foreach($request->choice as $index => $value) {
          //  echo "pretestid : ".$index."Value : ".$value."<br/>";
          //  echo "Choice : ".$index." Value :".$value."<br/>";
            $resultTest = new Result_test;
            $resultTest->choice = $value;
            $resultTest->test_id =$index;
            $resultTest->unit_id =$request->unit_id;
            $resultTest->user_id = Auth::id();
            $resultTest->save();
        
        }

        $tests = Tests::get();
        $sum = 0 ;  
        foreach($tests as $test){

            $results = Result_test::where('user_id',Auth::id())->where('test_id',$test->id)->where('unit_id',$test->unit_id)->get();
            $i = 0;   
             //loop ตรวจคำตอบ
            foreach($results as $result){
    
                        if($test->answer == $result->choice){
                                 $sum = $sum + 1 ;
                        }else{
                                $sum = $sum +0;
                        }       
            } 

        }

        //บันทึกคะแนน
        $score = new Score;
        $score->total = $sum ; 
        $score->question_name = "Unit_".$request->unit_id;
        $score->user_id = Auth::id();
        $score->save();
       

        Session::flash('success','ส่งคำตอบของแบบทดสอบประจำหน่วยการเรียนเรียบร้อยแล้ว');
        return redirect()->back();
        //return "OK";
       

    
    }


}
