<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Submenu;
use Session;
class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus  = Menu::all();
        return view('admin.menu.index',compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.menu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Menu::create($request->all());

        Session::flash('success','บันทึกรายการเรียบร้อยแล้ว');
        return redirect()->route('menu.index');
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
        $menu = Menu::findOrFail($id);
        return view('admin.menu.edit',compact('menu'));
    }


    //รายการประวัติผู้จัดทำ
    public function listAuthor($id)
    {
        $submenu = Submenu::where('menu_id',$id)->get();
        return view('admin.menu.listAuthor',compact('submenu','id'));
    }

    public function save(Request $request)
    {
       
        Submenu::create($request->all());

        Session::flash('success','บันทึกรายการเรียบร้อยแล้ว');
        return redirect()->back();
    }

    public function del($id){
        $submenu = Submenu::findOrFail($id);

        $submenu->delete();

        Session::flash('success','ลบรายการนี้เรียบร้อยแล้ว');

        return redirect()->back();
    }

    public function editAuthor($id)
    {

        $listMenu = Submenu::all();
        $menu = Submenu::findOrFail($id);
        return view('admin.menu.editAuthor',compact('menu','listMenu','id'));
    }

    public function editSave(Request $request, $id){
       // dd($request->all());

        $menu = Submenu::findOrFail($id);

        $menu->name = $request->name ;
        $menu->description = $request->description;

        $menu->save();

        Session::flash('success','แก้ไขรายการเรียบร้อยแล้ว');

        return redirect()->back();
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
        $menu = Menu::findOrFail($id);

        $menu->name = $request->name ;
        $menu->slug = $request->slug;
        $menu->description = $request->description;

        $menu->save();

        Session::flash('success','แก้ไขรายการเรียบร้อยแล้ว');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
