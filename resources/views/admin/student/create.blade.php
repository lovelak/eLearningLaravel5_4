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
                    <form action = "{{ url('admin/users/') }}" method = "post" enctype ="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group col-6">
                            <label for="exampleInputEmail1">ระดับชั้น</label>
                           <select name = "level" class="form-control">
                               <option value="มัธยมศึกษาปีที่ 1">มัธยมศึกษาปีที่ 1</option>
                               <option value="มัธยมศึกษาปีที่ 2">มัธยมศึกษาปีที่ 2</option>
                               <option value="มัธยมศึกษาปีที่ 3">มัธยมศึกษาปีที่ 3</option>
                           </select>
                        </div>

                        <div class="form-group col-6">
                            <label for="exampleInputEmail1">รหัสนักเรียน</label>
                            <input type="text" class="form-control" name = "student_code" value="">
                        </div>

                        <div class="form-group col-6">
                            <label for="exampleInputEmail1">ชื่อ - นามสกุล</label>
                            <input type="text" class="form-control" name = "name" value="">
                        </div>
                       
                        <div class="form-group col-6">
                            <label for="exampleInputEmail1">อีเมล์สำหรับใช้เข้าระบบ</label>
                            <input type="text" class="form-control" name = "email" value="">
                        </div>

                        <div class="form-group col-6">
                            <label for="exampleInputEmail1">รหัสผ่าน</label>
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
