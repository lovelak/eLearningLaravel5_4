@extends('layouts.home')

@section('content')

    <div class="row">

        <div class="col-md-12">
            <h2 style="border-bottom: solid 4px;color: #0b2e13;">แบบทดสอบก่อนเรียน</h2>
        </div>

        <div class="col-md-12 thumbnail">
            <?php $i = 1; $row = 1 ;?>
            @foreach($pretests as $pre)

                 <h4>{{ $row }} {!! $pre->question !!}</h4>
                 <input name="id[{{ $i }}]" type="hidden" value=" {{ $pre->id }}">
                <table class="table">

                    <tr>

                        <td colspan="2">
                            <input name="choice{{ $i }}" type="radio" value="1">
                           {{ $pre->choice1 }}
                        </td>
                     <tr/>
                    <tr>
                        <td colspan="2">
                            <input type="radio" name="choice{{ $i }}" value="2">
                            {{ $pre->choice2 }}
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="radio" name="choice{{ $i }}" value="3">
                            {{ $pre->choice3 }}
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="radio" name="choice{{ $i }}" value="4">
                            {{ $pre->choice4 }}
                            <input name="answer" type="hidden" value=" {{ $pre->answer }}">
                        </td>
                    </tr>
                </table>

                <?php $i++ ; $row++?>
            @endforeach
        </div>
    </div>
@endsection