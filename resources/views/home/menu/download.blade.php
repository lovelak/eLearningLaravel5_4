@extends('layouts.home')

@section('content')

    <div class="row">

        <div class="col-md-12">
            <h2 style="border-bottom: solid 4px;color: #0b2e13;">ดาวน์โหลดคู่มือ</h2>
        </div>

        <div class="col-md-12">
               
                <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">ลำดับ</th>
                            <th scope="col">หน่วยเรียนรู้</th>
                            <th scope="col">ไฟล์ดาวน์โหลด</th>

                          </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1 ;?>
                            @foreach($menu as $m)
                          <tr>
                            <th scope="row">{{ $i++ }}</th>
                            <td>{{ $m->name }}</td>
                            <td>
                                @if($m->filename != NULL)
                            <a href = "{{ asset('uploads/file/'.$m->filename) }}" target="_blank"><i class="fa fa-file"></i> คลิกดาวน์โหลด</a>
                                @endif
                            </td>
                          </tr>
                          @endforeach
                          
                        </tbody>
                      </table>
        </div>
    </div>
@endsection
