<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //2 = students

        $users = User::where('role',2)->orderBy('id')->get();
        return view('admin.student.index',compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $users = new User;
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = bcrypt($request->password);
        $users->level = $request->level;
        $users->role = 2;
        $users->student_code = $request->student_code;
        $users->save();

        Session::flash('success','เพิ่มผู้สอบเรียบร้อยแล้ว');
        return redirect()->route('users.index');


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
        $users = User::findOrFail($id);
        return view('admin.student.edit',compact('users'));
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
        $users = User::findOrFail($id);

        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = bcrypt($request->password);
        $users->level = $request->level;
        $users->role = 2;
        $users->student_code = $request->student_code;
        $users->save();

        Session::flash('success','แก้ไขผู้สอบเรียบร้อยแล้ว');
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::findOrFail($id);
        $users->delete();

        Session::flash('success','ลบผู้สอบเรียบร้อยแล้ว');
        return redirect()->route('users.index');

    }
}
