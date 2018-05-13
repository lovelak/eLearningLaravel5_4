@extends('layouts.home')

@section('content')

    <div class="row">

        <div class="col-md-12">
            <h2 style="border-bottom: solid 4px;color: #0b2e13;">{{ $menu->name }}</h2>
        </div>

        <div class="col-md-12">
               
                {!! $menu->description !!}
        </div>
    </div>
@endsection
