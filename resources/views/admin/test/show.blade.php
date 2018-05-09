@extends('layouts.admin')

@section('content')

    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ url('admin/units') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">แบบทดสอบประจำหน่วยการเรียนรู้ > {{ $unit->name .' '. $unit->title }}</li>
            </ol>
            <!-- Example DataTables Card-->
            <div class="card mb-12">
                <div class="card-header">
                    <i class="fa fa-plus"></i> <a href="{{ url('admin/tests/add/'.$unit_id) }}">เพิ่มข้อสอบ</a></div>
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
                            @if($tests->count() > 0)
                                <?php $i = 1 ; ?>
                                    @foreach($tests as $t)

                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{!! $t->question !!} </td>
                                            <td>{{ $t->created_at }}</td>
                                            <td><a href = "{{ url('admin/tests/'.$t->id.'/edit') }}"><span class="fa fa-edit"></span> แก้ไข</a> |
                                                <a href = "{{ url('admin/tests/destroy/'.$t->id) }}"><span class="fa fa-trash"></span> ลบ</a>
                                            </td>
                                        </tr>
                                    @endforeach

                             @else
                               <tr>
                                   <td colspan="5" class="text-center">ไม่มีข้อมูล...</td>
                               </tr>


                            @endif

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