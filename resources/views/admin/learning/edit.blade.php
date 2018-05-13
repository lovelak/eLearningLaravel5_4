@extends('layouts.admin')

@section('content')

    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ url('admin/menu') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">{{ $unit->name .' '.$unit->title .' > '.$learning->name}}</li>
            </ol>
            <!-- Example DataTables Card-->
            <div class="card mb-12">
                <div class="card-header">
                    <i class="fa fa-plus"></i> <a href=""></a></div>
                <div class="card-body">
                    <form action = "{{ url('admin/learnings/'.$learning->id) }}" method = "post" enctype ="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <input type="hidden" class="form-control" name = "unit_id" value="{{ $learning->unit_id }}" >

                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" name = "name" value="{{ $learning->name }}" >
                        </div>
                        {{-- <div class="form-group">
                            <label for="exampleInputEmail1">Slug</label>
                            <input type="text" class="form-control" name = "slug" value="{{ $learning->slug }}" >
                        </div> --}}
                        <div class="form-group">
                            <label for="exampleInputPassword1">Detail</label>
                            <textarea class="form-control my-editor" rows="5" name = "description" id = "description">{{ $learning->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Vdo</label>
                            @if($learning->vdo_youtube != NULL)
                             ไฟล์เดิม : {{ $learning->vdo_youtube}}
                            @endif
                            <input type="file" class="form-control" name = "vdo_youtube" value="{{ $learning->vdo_youtube }}" >
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

@section('js')
    <script src = "{{ URL::to('sbadmin/js/tinymce/js/tinymce/tinymce.min.js') }}"></script>
    <script>
        var editor_config = {
            path_absolute : "{{ URL::to('/') }}/",
            selector: "textarea.my-editor",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            relative_urls: false,
            file_browser_callback : function(field_name, url, type, win) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
                if (type == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.open({
                    file : cmsURL,
                    title : 'Filemanager',
                    width : x * 0.8,
                    height : y * 0.8,
                    resizable : "yes",
                    close_previous : "no"
                });
            }
        };

        tinymce.init(editor_config);
    </script>
@stop