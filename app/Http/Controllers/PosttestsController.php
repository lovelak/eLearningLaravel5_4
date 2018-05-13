<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posttest;
use Session;
class PosttestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posttests = Posttest::orderByRaw("RAND()")->get();
        return view('admin.posttest.index',compact('posttests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posttest.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Posttest::create($request->all());

        Session::flash('success','เพิ่มข้อสอบเรียบร้อยแล้ว');
        return redirect()->route('posttests.index');
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
        $posttests = Posttest::findOrFail($id);
        return view('admin.posttest.edit',compact('posttests'));
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
        $posttests = Posttest::findOrFail($id);
        $posttests->update($request->all());

        Session::flash('success','แก้ไขข้อสอบเรียบร้อยแล้ว');
        return redirect()->route('posttests.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Posttest= Posttest::findOrFail($id);

        $Posttest->delete();

        Session::flash('success','ลบรายการนี้เรียบร้อยแล้ว');
        return redirect()->back();
    }
}
