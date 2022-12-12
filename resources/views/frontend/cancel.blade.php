@extends('layouts.app')

@section('title', 'Cancellation')

@section('content')
<div class="row" style="background-image: url('/images/16154.jpg'); background-repeat:no-repeat; background-size: cover;">
    <div class="col-md-4 mx-auto m-5" >
            <div class="card">
                <livewire:frontend.cancel-appt>
            </div>
    </div>
</div>
@endsection
@section('script')
    <script>
    jQuery.datetimepicker.setDateFormatter('moment')
    $('#picker').datetimepicker({
        timepicker: true,
        datepicker:true,
        //format:'LL LT',
        format: 'YYYY-MM-DD H:mm',
        hours12: false,
        step: 30,
        disabledWeekDays:[5, 0],
        todayBtn: true,
        minTime:'8:00',
        maxTime:'17:00',
        minDate: new Date(),
        todayButton:true,
        scrollTime:true,
        minDateTime:true,
        //minDateTime:new Time()->addHours(3),
        //defaultDate: moment().add(4,'days'),
        disabledDates : ['2022/12/26'],
        //timeHeightInTimePicker: 25,

        //if halfday
        // onChangeDateTime:logic,
        // onShow:logic

    })
    $('#toggle').on('click', function(){
        $('#picker').datetimepicker('toggle')
    })
    $('#picker').on("change.datetimepicker", function (e){
        let sched = $(this).data('canceldate');
        //console.log(sched);
        eval(sched).set('schedule', $('#cancelSched').val());

    })
    </script>
@endsection
