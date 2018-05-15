@extends('layouts.admin')

@section('content')

    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ url('admin/menu') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">ตั้งค่าเมนู</li>
            </ol>
            <!-- Example DataTables Card-->
            <div class="card mb-12">
                <div class="card-header">
                    <i class="fa fa-plus"></i> <a href=""></a></div>
                <div class="card-body">
                    <form action = "{{ url('admin/users/'.$users->id) }}" method = "post" enctype ="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <div class="form-group col-6">
                            <label for="">ระดับชั้น</label>

                           <select name = "level" class="form-control">
                               <option value="มัธยมศึกษาปีที่ 1" 
                                    @if($users->level == "มัธยมศึกษาปีที่ 1")
                                        selected
                                    @endif>มัธยมศึกษาปีที่ 1
                                </option>
                               <option value="มัธยมศึกษาปีที่ 2" 
                                    @if($users->level == "มัธยมศึกษาปีที่ 2")
                                    selected
                                    @endif>มัธยมศึกษาปีที่ 2
                                </option>
                               <option value="มัธยมศึกษาปีที่ 3"
                                    @if($users->level == "มัธยมศึกษาปีที่ 3")
                                    selected
                                    @endif>มัธยมศึกษาปีที่ 3
                                </option>

                           </select>
                        </div>

                        <div class="form-group col-6">
                            <label for="">รหัสนักเรียน</label>
                            <input type="text" class="form-control" name = "student_code" value="{{ $users->student_code }}">
                        </div>

                        <div class="form-group col-6">
                            <label for="">ชื่อ - นามสกุล</label>
                            <input type="text" class="form-control" name = "name" value="{{ $users->name }}">
                        </div>
                       
                        <div class="form-group col-6">
                            <label for="">อีเมล์สำหรับใช้เข้าระบบ</label>
                            <input type="text" class="form-control" name = "email" value="{{ $users->email }}">
                        </div>

                        <div class="form-group col-6">
                            <label for="">รหัสผ่าน</label>
                            <input type="text" class="form-control" name = "password" value="">
                        </div>
                      
                        <button type="submit" class="btn btn-danger">บันทึก</button>
                    </form>
                </div>
                <div class="card-footer small text-muted"></div>
            </div>
        </div>
        <!-- /.container-fluid-->
        <!-- /.content-wrapper-->

    </div>


@endsection
