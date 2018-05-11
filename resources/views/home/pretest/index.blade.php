@extends('layouts.home')

@section('content')

    <div class="row">

        <div class="col-md-12">
            <h2 style="border-bottom: solid 4px;color: #0b2e13;">แบบทดสอบก่อนเรียน</h2>
        </div>

        <div class="col-md-12">

            <form  method="post" action="{{ url('pages/answerPretests') }}">
                {{ csrf_field() }}
                <?php $i = 1;  ;?>
                @foreach($pretests as $pretest)

                    <div class ="thumbnail">
                        <table>
                            <tr>
                                <td>คำถามข้อที่ {{ $i }} )&nbsp; </td>
                                <td>
                                    <h4> {!! $pretest->question !!}
                                        <input type ="hidden" name ="pretest_id[{{ $pretest->id }}]" value ="{{ $pretest->id }}"/> 
                                    </h4>

                                </td>
                            </tr>
                        </table>
                        <ul>
                            <li style="list-style: none;"><input name="choice[{{ $pretest->id }}]" type="radio" value="1"> {!! $pretest->choice1 !!} </li>
                            <li style="list-style: none;"><input name="choice[{{ $pretest->id }}]" type="radio" value="2"> {!! $pretest->choice2 !!} </li>
                            <li style="list-style: none;"><input name="choice[{{ $pretest->id }}]" type="radio" value="3"> {!! $pretest->choice3 !!} </li>
                            <li style="list-style: none;"><input name="choice[{{ $pretest->id }}]" type="radio" value="4"> {!! $pretest->choice4 !!} </li>
                        </ul>
                    </div>
                    <?php $i++ ;?>
                @endforeach
                <div class ="thumbnail">
                    <button type="submit" name="ok" class="btn btn-success">
                        <i class="glyphicon glyphicon-ok-sign"></i>&nbsp;ส่งคำตอบ
                    </button>
                    <a href="{{ url('pages/pretests') }}">
                        <button type="button" class="btn btn-danger"><i class="glyphicon glyphicon-refresh"></i>&nbsp;ล้างข้อมูล
                        </button>
                    </a>
                </div>
            </form>

        </div>
    </div>
@endsection
