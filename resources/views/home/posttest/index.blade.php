@extends('layouts.home')

@section('content')

    <div class="row">

        <div class="col-md-12">
            <h2 style="border-bottom: solid 4px;color: #0b2e13;">แบบทดสอบหลังเรียน</h2>
        </div>

        <div class="col-md-12">

            <form  method="post" action="{{ url('pages/answerPosttests') }}">
                {{ csrf_field() }}
                <?php $i = 1;  ;?>
                @foreach($posttests as $posttest)

                    <div class ="thumbnail">
                        <table>
                            <tr>
                                <td>ข้อที่ {{ $i }} )&nbsp; </td>
                                <td>
                                    <h4> {!! $posttest->question !!}
                                            
                                    </h4>

                                </td>
                            </tr>
                        </table>
                        <ul>
                            <li style="list-style: none;"><input name="choice[{{ $i }}]" type="radio" value="1"> {!! $posttest->choice1 !!} </li>
                            <li style="list-style: none;"><input name="choice[{{ $i }}]" type="radio" value="2"> {!! $posttest->choice2 !!} </li>
                            <li style="list-style: none;"><input name="choice[{{ $i }}]" type="radio" value="3"> {!! $posttest->choice3 !!} </li>
                            <li style="list-style: none;"><input name="choice[{{ $i }}]" type="radio" value="4"> {!! $posttest->choice4 !!} </li>
                        </ul>

                    </div>
                    <?php $i++ ;?>
                @endforeach
                <div class ="thumbnail">
                    <button type="submit" name="ok" class="btn btn-success">
                        <i class="glyphicon glyphicon-ok-sign"></i>&nbsp;ส่งคำตอบ
                    </button>
                <a href="{{ url('pages/posttests') }}">
                        <button type="button" class="btn btn-danger"><i class="glyphicon glyphicon-refresh"></i>&nbsp;ล้างข้อมูล
                        </button>
                    </a>
                </div>
            </form>

        </div>
    </div>
@endsection