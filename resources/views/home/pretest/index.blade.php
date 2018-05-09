@extends('layouts.home')

@section('content')

    <div class="row">

        <div class="col-md-12">
            <h2 style="border-bottom: solid 4px;color: #0b2e13;">แบบทดสอบก่อนเรียน</h2>
        </div>

        <div class="col-md-12">

            <form  method="post" action="{{ url('pages/answerPretests') }}">
                {{ csrf_field() }}
                <?php $i = 0;  ;?>
                @foreach($pretests as $pretest)

                    <?php $i++ ;?>

                    <div class ="thumbnail">
                        <table>
                            <tr>
                                <td>คำถามข้อที่ {{ $i }} )&nbsp; </td>
                                <td>
                                    <h4> {!! $pretest->question !!}
                                        <input name="id[<?=$i;?>]" type="hidden" value="{{ $pretest->id }}">
                                    </h4>

                                </td>
                            </tr>
                        </table>

                            <input name="choice{{ $i }}" type="radio" value="1">
                            {!! $pretest->choice1 !!} <br/>

                            <input type="radio" name="choice{{ $i }}" value="2">
                            {!! $pretest->choice2 !!} <br/>

                            <input type="radio" name="choice{{ $i }}" value="3">
                            {!! $pretest->choice3 !!} <br/>

                            <input type="radio" name="choice{{ $i }}" value="4">
                            {!! $pretest->choice4 !!} <br/>

                    </div>

                @endforeach
                <div align="center"><br>
                    <button type="submit" name="ok" class="btn btn-success">
                        <i class="glyphicon glyphicon-ok-sign"></i>&nbsp;ส่งคำตอบ
                    </button>
                    <a href="test_frist.php">
                        <button type="button" class="btn btn-danger"><i class="glyphicon glyphicon-refresh"></i>&nbsp;ล้างข้อมูล
                        </button>
                    </a>
                </div>
            </form>

        </div>
    </div>
@endsection