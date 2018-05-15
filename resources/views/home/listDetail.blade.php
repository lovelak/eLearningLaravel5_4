@extends('layouts.home')
@section('css')

@stop
@section('content')

    <div class="row">

        <div class="col-md-12">
            <h2 style="border-bottom: solid 4px;color: #0b2e13;">{{ $learning->name }}</h2>
        </div>

        <div class="col-md-12">
                <video width="700" height="500" controls>
                        <source src="{{ asset('uploads/vdo/'.$learning->vdo_youtube) }}" type="video/mp4">
                       
                      Your browser does not support the video tag.
                </video>
                {{-- <video id="my-video" class="video-js" controls preload="auto" width="700" height="500"
                poster="MY_VIDEO_POSTER.jpg" data-setup="{}">
                  <source src="{{ asset('uploads/vdo/'.$learning->vdo_youtube) }}" type='video/mp4'>
                  <source src="MY_VIDEO.webm" type='video/webm'>
                  <p class="vjs-no-js">
                    To view this video please enable JavaScript, and consider upgrading to a web browser that
                    <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                  </p>
                </video> --}}
              
                       
        </div>
    </div>
@endsection
@section('js')


@stop