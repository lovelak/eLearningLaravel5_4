@extends('layouts.admin')

@section('content')

    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
             
                <li class="breadcrumb-item active">Edit Download</li>
            </ol>
            <div class="row">
                    <div class="col-3">
                            <div class="card mb-12">
                                    <div class="card-body">
                                           <ul>
                                                @foreach($listMenu as $list)
                                                 <li><a href = "{{ url('/admin/menu/editDownload/'.$list->id.'/'.$list->menu_id.'/edit') }}">{{ $list->name }}</a></li>
                                                @endforeach
                                           </ul>
                                    </div>
                            </div>
                    </div>
                    <div class="col-9">
                            <div class="card mb-12">
                                    <div class="card-header">
                                    <div class="card-body">
                                        <form action = "{{ url('admin/menu/editSave/'.$menu->id.'/edit') }}" method = "post" enctype ="multipart/form-data">
                                            {{ csrf_field() }}
                                            {{ method_field('PATCH') }}
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Name</label>
                                                <input type="text" class="form-control" name = "name" value="{{ $menu->name }}">
                                            </div>
                                           
                                            {{-- <div class="form-group">
                                                <label for="exampleInputPassword1">Description</label>
                                                <textarea class="form-control my-editor" rows="30" name = "description" id = "description">{{ $menu->description }}</textarea>
                                            </div> --}}

                                            <div class="form-group">
                                                <label for="featured">ไฟล์</label>
                                                @if($menu->filename != NULL)
                                                         {{ $menu->filename }}
                                                @endif
                                                <input type="file" name="filename" class="form-control border-input"/>
                                            </div>
                    
                                            <button type="submit" class="btn btn-danger">บันทึก</button>
                                        </form>
                                    </div>
                                    <div class="card-footer small text-muted"></div>
                            </div>
                    </div>
                  </div>
        </div>
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