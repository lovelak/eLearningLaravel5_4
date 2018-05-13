<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Submenu;
use Session;
use File;
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

    public function editAuthor($id,$menu_id)
    {

        $listMenu = Submenu::where('menu_id',$menu_id)->get();
        $menu = Submenu::findOrFail($id);
        return view('admin.menu.editAuthor',compact('menu','listMenu','id'));
    }

    public function editSave(Request $request, $id){
       // dd($request->all());

        $menu = Submenu::findOrFail($id);

        if($request->hasFile('filename')){
            if($menu->filename != NULL){
                unlink('uploads/file/'.$menu->filename);
            }
           

            $filename = $request->filename;
            $extensionpdf = $filename->getClientOriginalExtension();
            $renamepdf = "PDF_".date('Y-m-d').time().rand(11111, 99999) . '.' . $extensionpdf;
            $filename_new_name = time(). $filename->getClientOriginalName();
            $filename->move('uploads/file',$renamepdf);
            $menu->filename = $renamepdf;
        }


        $menu->name = $request->name ;
        $menu->description = $request->description;

        $menu->save();

        Session::flash('success','แก้ไขรายการเรียบร้อยแล้ว');

        return redirect()->back();
    }


     //download
     public function listDownload($id)
     {
         $submenu = Submenu::where('menu_id',$id)->get();
         return view('admin.menu.listDownload',compact('submenu','id'));
     }

    public function editDownload($id,$menu_id)
    {

        $listMenu = Submenu::where('menu_id',$menu_id)->get();
        $menu = Submenu::findOrFail($id);
        return view('admin.menu.editDownload',compact('menu','listMenu','id'));
    }

    public function saveDownload(Request $request){

        $menu = new Submenu;



        if($request->hasFile('filename')){
            $filename = $request->filename;
            $extensionpdf = $filename->getClientOriginalExtension();
            $renamepdf = "PDF_".date('Y-m-d').time().rand(11111, 99999) . '.' . $extensionpdf;
            $filename_new_name = time(). $filename->getClientOriginalName();
            $filename->move('uploads/file',$renamepdf);
            $sliders->filename = $renamepdf;
        }



        Session::flash('success','บันทึกรายการเรียบร้อยแล้ว !!!');
        return redirect()->route('sliders');
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
