@extends('layouts.admin')

@section('content')

    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ url('admin/menu') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">ประวัติผู้จัดทำ</li>
            </ol>
            <div class="row">
                    <div class="col-12">
                            <div class="card mb-12">
                                 
                                    <div class="card-body">
                                            <form action = "{{ url('admin/menu/save') }}" method = "post" enctype ="multipart/form-data">
                                                {{ csrf_field() }}
                                                  
                                                    <div class="form-group mx-sm-3 mb-2">
                                                      <label for="inputPassword2" class="sr-only">Password</label>
                                                      <input type="text" class="form-control" id="name" name = "name" placeholder="">
                                                      <input type="hidden" class="form-control" id="" name = "menu_id" placeholder="" value="{{ $id }}">
                                                    </div>
                                                    <div class="form-group mx-sm-3 mb-2">
                                                    <button type="submit" class="btn btn-primary mb-2">เพิ่ม</button>
                                                    </div>
                                                  </form>
                                    </div>
                                    <hr/>
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
                                            @foreach($submenu as $menu)
                                                <tr>
                                                    <td>{{ $i++ }}</td>
                                                    <td>{{ $menu->name }}</td>
                                                    <td>{{ $menu->created_at }}</td>
                
                                                    <td>
                                                     
                                                            <a href = "{{ url('/admin/menu/editAuthor/'.$menu->id.'/'.$id.'/edit') }}">แก้ไข</a>
                                                            <a href = "{{ url('/admin/menu/del/'.$menu->id) }}" onclick="return confirm('คุณต้องการลบรายการนี้ใช่หรือไม่ ?');">ลบ</a>
                                                    </td>
                
                                                </tr>
                                            @endforeach
                
                
                                            </tbody>
                                        </table>
                            </div>
                    </div>
                  

            
        </div>

    </div>


@endsection