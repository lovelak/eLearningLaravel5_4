<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Learning;
use App\Unit;
use Session;
class LearningsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $learning = new Learning;
        if($request->hasFile('vdo_youtube')){
            $filename = $request->vdo_youtube;
            $extensionpdf = $filename->getClientOriginalExtension();
            $renamepdf = "vdo_".date('Y-m-d').time().rand(11111, 99999) . '.' . $extensionpdf;
            $filename_new_name = time(). $filename->getClientOriginalName();
            $filename->move('uploads/vdo/',$renamepdf);
            $learning->vdo_youtube = $renamepdf;
        }

        $learning->name = $request->name;
        $learning->slug = $request->slug;
        $learning->description = $request->description;
        $learning->unit_id = $request->unit_id;
        $learning->save();


       // Learning::create($request->all());


        Session::flash('success','เพิ่มหัวข้อย่อยเรียบร้อยแล้ว');
        return redirect()->route('units.index');
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


        $learning = Learning::findOrFail($id);

        $unit = Unit::where('id',$learning->unit_id)->first();


        return view('admin.learning.edit',compact('unit','learning'));
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

        $learning = Learning::findOrFail($id);

        if($request->hasFile('vdo_youtube')){
            if($learning->vdo_youtube != NULL){
                unlink('uploads/vdo/'.$learning->vdo_youtube);
            }
           

            $filename = $request->vdo_youtube;
            $extensionpdf = $filename->getClientOriginalExtension();
            $renamepdf = "vdo_".date('Y-m-d').time().rand(11111, 99999) . '.' . $extensionpdf;
            $filename_new_name = time(). $filename->getClientOriginalName();
            $filename->move('uploads/vdo',$renamepdf);
            $learning->vdo_youtube = $renamepdf;
        }

        $learning->name = $request->name;
        $learning->slug = $request->slug;
        $learning->description = $request->description;
        $learning->unit_id = $request->unit_id;
        $learning->update();

        Session::flash('success','แก้ไขรายการเรียบร้อยแล้ว');
        return redirect()->route('units.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Learning = Learning::findOrFail($id);
        if($Learning->vdo_youtube != NULL) {
            unlink('uploads/vdo/' . $Learning->vdo_youtube);
          
        }

        $Learning->delete();
        Session::flash('success','ลบรายการเรียบร้อยแล้ว');
        return redirect()->route('units.index');
    }
}
