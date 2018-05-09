<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pretest;
use App\Posttest;


class PagesController extends Controller
{

    //แบบทดสอบก่่อนเรียน
    public function pretests(){

        $pretests = Pretest::orderByRaw("RAND()")->get();
        return view('home.pretest.index',compact('pretests'));
    }

    //แบบทดสอบหลังเรียน
    public function posttests(){

        $posttests = Posttest::orderByRaw("RAND()")->get();
        return view('home.posttest.index',compact('posttests'));
    }


}
