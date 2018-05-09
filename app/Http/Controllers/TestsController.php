<?php

namespace App\Http\Controllers;

use App\Unit;
use Illuminate\Http\Request;
use App\Tests;
use Session;

class TestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "index";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add($id)
    {

        $unit_id = $id;
        $unit = Unit::whereRaw('id = ?',[$id])->first();

        return view('admin.test.add',compact('unit_id','unit'));
    }

    public function create(){

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tests::create($request->all());

        Session::flash('success','เพิ่มข้อสอบเรียบร้อยแล้ว');
        return redirect('admin/tests/show/'.$request->unit_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

            $unit_id = $id ;
            $tests = Tests::whereRaw('unit_id = ?',[$id])->get();

            $unit = Unit::whereRaw('id = ?',[$id])->first();

            return view('admin.test.show',compact('tests','unit_id','unit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $test = Tests::findOrFail($id);

       // $unit = Unit::whereRaw('id = ?',[$id])->first();

        return view('admin.test.edit',compact('test','unit'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $test = Tests::findOrFail($id);

        $test->delete();

        Session::flash('success','ลบรายการนี้เรียบร้อยแล้ว');
        return redirect()->back();
    }
}
