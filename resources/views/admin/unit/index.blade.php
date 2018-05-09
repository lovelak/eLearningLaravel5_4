@extends('layouts.admin')

@section('content')

    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">หน่วยการเรียนรู้</li>
            </ol>
            <!-- Example DataTables Card-->
            <div class="card mb-12">
                <div class="card-header">
                    <i class="fa fa-plus"></i> <a href="{{ url('admin/units/create') }}">เพิ่มหน่วยการเรียนรู้</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>ลำดับ</th>
                                <th>รายการ</th>
                                <th>จัดการ</th>


                            </tr>
                            </thead>

                            <tbody>
                            <?php $i = 1; ?>
                            @foreach($units as $unit)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>
                                        {{ $unit->name }} {{ $unit->title }}
                                        <i class="fa fa-plus"></i> <a href="{{ url('admin/units/'.$unit->id.'/add') }}">เพิ่มหัวข้อย่อย</a>

                                        <ul class="list-group">
                                            <?php $Ls = DB::table('learnings')->where('unit_id', $unit->id)->orderBy('id')->get(); ?>
                                            @foreach($Ls as $l )
                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    {{ $l->name }}

                                                    <span class="badge badge-pill"><a href = "">แก้ไข</a> | <a href = "">ลบ</a></span>
                                                </li>
                                            @endforeach
                                        </ul>

                                    </td>

                                    <td><a href="{{ url('admin/pretests/'.$unit->id.'/edit') }}"><span
                                                    class="fi-arrow-thick-bottom"></span> แก้ไข</a></td>

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