@extends('layouts.home')
@section('css')

@stop
@section('content')

    <div class="row">

        <div class="col-md-12">
            <h2 style="border-bottom: solid 4px;color: #0b2e13;">{{ $learning->name }}</h2>
        </div>

        <div class="col-md-12">
           
            <iframe width="700" height="480" src="https://www.youtube.com/embed/{{ $learning->vdo_youtube }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    
        </div>
    </div>
@endsection
@section('js')


@stop