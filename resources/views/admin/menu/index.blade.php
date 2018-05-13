@extends('layouts.admin')

@section('content')

    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">ตั้งค่าเมนู</li>
            </ol>
            <!-- Example DataTables Card-->
            <div class="card mb-12">
                <div class="card-header">
                    <i class="fa fa-plus"></i> <a href="{{ url('admin/menu/create') }}">เพิ่มเมนู</a></div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>ลำดับ</th>
                                <th>ชื่อเมนู</th>
                               
                                <th>วันที่สร้าง</th>
                                <th>จัดการ</th>


                            </tr>
                            </thead>

                            <tbody>
                            <?php $i = 1 ; ?>
                            @foreach($menus as $menu)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $menu->name }}</td>
                                   
                                    <td>{{ $menu->created_at }}</td>

                                    <td>
                                        @if($menu->slug == "author")
                                            <a href = "{{ url('/admin/menu/listAuthor/'.$menu->id) }}">จัดการ</a>
                                      
                                        @elseif($menu->slug == "download")
                                            <a href = "{{ url('/admin/menu/listDownload/'.$menu->id) }}">จัดการ</a>
                                        @else
                                            <a href = "{{ url('/admin/menu/'.$menu->id.'/edit') }}">จัดการ</a>
                                        @endif
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