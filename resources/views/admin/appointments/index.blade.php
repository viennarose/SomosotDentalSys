@extends('layouts.admin')

@section('content')

<link rel="stylesheet" href="{{asset('/plugins')}}/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="{{asset('/plugins')}}/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="{{asset('/plugins')}}/datatables-buttons/css/buttons.bootstrap4.min.css">


<div class="container">
    <livewire:appointment.index>
</div>
@endsection

@section('script')
    <script>
    window.addEventListener('close-modal', event => {
        $('#appointmentModal').modal('hide');
        $('#updateAppointmentModal').modal('hide');
        $('#deleteAppointmentModal').modal('hide');
    });
    </script>

    <script>
        jQuery.datetimepicker.setDateFormatter('moment')
        $('#picker').datetimepicker({
            timepicker: true,
            datepicker:true,
            format: 'YYYY-MM-DD H:mm',
            hours12: false,
            step: 30,
            disabledWeekDays:[6, 0],
            todayBtn: true,
            minTime:'8:00',
            maxTime:'17:00',
            //disableDate:[''],
            //timeHeightInTimePicker: 25,
            minDate: new Date(),
            todayButton:true,
            scrollTime:true,
            minDateTime:true,

        })
        $('#toggle').on('click', function(){
            $('#picker').datetimepicker('toggle')
        })
        $('#picker').on("change.datetimepicker", function (e){
            let date = $(this).data('appointmentdate');
            //console.log(date);
            eval(date).set('schedule', $('#appointmentSched').val());

        })
    </script>
{{--

<script src="{{asset('/plugins')}}/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('/plugins')}}/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('/plugins')}}/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('/plugins')}}/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{asset('/plugins')}}/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{asset('/plugins')}}/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{asset('/plugins')}}/pdfmake/pdfmake.min.js"></script>
<script src="{{asset('/plugins')}}/pdfmake/vfs_fonts.js"></script>
<script src="{{asset('/plugins')}}/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{asset('/plugins')}}/datatables-buttons/js/buttons.print.min.js"></script>

    <script>
        $(function () {
          $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["pdf", "print"],
            "searching": true,
            "paging": false,
            "info": false,

          }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
          $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "buttons": ["pdf", "print"],
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
          }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
          $('#example3').DataTable({
            "paging": true,
            "lengthChange": false,
            "buttons": ["pdf", "print"],
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
          }).buttons().container().appendTo('#example3_wrapper .col-md-6:eq(0)');
        });

      </script> --}}



@endsection
