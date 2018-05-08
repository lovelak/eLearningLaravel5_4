@extends('layouts.admin')

@section('content')

    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Postests แบบทดสอบหลังเรียน</li>
            </ol>
            <!-- Example DataTables Card-->
            <div class="card mb-12">
                <div class="card-header">
                    <i class="fa fa-plus"></i> <a href="{{ url('admin/posttests/create') }}">เพิ่มข้อสอบ</a></div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>ข้อที่</th>
                                <th>รายการ</th>

                                <th>วันที่สร้าง</th>
                                <th>จัดการ</th>


                            </tr>
                            </thead>

                            <tbody>
                            <?php $i = 1 ; ?>
                            @foreach($posttests as $p)

                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{!! $p->question !!} </td>
                                    <td>{{ $p->created_at }}</td>
                                    <td><a href = "{{ url('admin/posttests/'.$p->id.'/edit') }}"><span class="fi-arrow-thick-bottom"></span> แก้ไข</a></td>
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