<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Session;
use App\Pretest;

class PretestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      //  $pretests = Pretest::orderByRaw("RAND()")->get();
        $pretests = Pretest::all();
        return view('admin.pretest.index',compact('pretests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pretest.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pretest::create($request->all());

        Session::flash('success','เพิ่มข้อสอบเรียบร้อยแล้ว');
        return redirect()->route('pretests.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pretests = Pretest::findOrFail($id);
        return view('admin.pretest.edit',compact('pretests'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pretests = Pretest::findOrFail($id);
        $pretests->update($request->all());

        Session::flash('success','แก้ไขข้อสอบเรียบร้อยแล้ว');
        return redirect()->route('pretests.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Pretest= Pretest::findOrFail($id);

        $Pretest->delete();

        Session::flash('success','ลบรายการนี้เรียบร้อยแล้ว');
        return redirect()->back();
    }
}
