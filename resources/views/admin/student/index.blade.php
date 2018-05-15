@extends('layouts.admin')

@section('content')

    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
              
                <li class="breadcrumb-item active">จัดการผู้สอบ</li>
            </ol>
            <!-- Example DataTables Card-->
            <div class="card mb-12">
                <div class="card-header">
                    <i class="fa fa-plus"></i> <a href="{{ url('admin/users/create') }}">เพิ่มผู้สอบใหม่</a></div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>ลำดับ</th>
                                <th>รหัสนักเรียน</th>
                                <th>ชื่อ - นามสกุล</th>
                                <th>ชั้น</th>
                                <th>ชื่อเข้าใช้/รหัสผ่าน</th>
                                <th>วันที่สร้าง</th>
                                <th>จัดการ</th>
                            </tr>
                            </thead>

                            <tbody>
                            <?php $i = 1 ; ?>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $user->student_code }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->level }}</td>
                                    <td>{{ $user->email }}<br/>รหัสผ่าน : 123456</td>
                                    <td>{{ $user->created_at }}</td>

                                    <td>
                                        <a href = "{{ url('admin/users/'.$user->id.'/edit') }}"><span class="fa fa-pencil"></span> แก้ไข</a>
                                        <a href = "{{ url('admin/users/destroy/'.$user->id) }}" onclick="return confirm('คุณต้องการลบรายการนี้ใช่หรือไม่ ?');"><span class="fa fa-trash"></span> ลบ</a>
                                    </td>

                                </tr>
                            @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer small text-muted"></div>
            </div>
        </div>
        <!-- /.container-fluid-->
        <!-- /.content-wrapper-->

    </div>


@endsection