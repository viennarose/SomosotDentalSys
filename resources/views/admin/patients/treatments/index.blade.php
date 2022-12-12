@extends('layouts.admin')

{{-- <link rel="stylesheet" href="{{asset('/plugins')}}/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="{{asset('/plugins')}}/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="{{asset('/plugins')}}/datatables-buttons/css/buttons.bootstrap4.min.css"> --}}

@section('content')
    <livewire:records.treatment.index :patientRecord_id="$id">
@endsection

@section('script')
{{-- <script src="{{asset('/plugins')}}/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('/plugins')}}/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('/plugins')}}/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('/plugins')}}/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{asset('/plugins')}}/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{asset('/plugins')}}/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{asset('/plugins')}}/pdfmake/pdfmake.min.js"></script>
<script src="{{asset('/plugins')}}/pdfmake/vfs_fonts.js"></script>
<script src="{{asset('/plugins')}}/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{asset('/plugins')}}/datatables-buttons/js/buttons.print.min.js"></script> --}}
    <script>
    window.addEventListener('close-modal', event => {
        $('#treatmentModal').modal('hide');
        $('#updatetreatmentModal').modal('hide');
        $('#deletetreatmentModal').modal('hide');
    });
    $(function () {
          $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["pdf", "print"],
            "searching": true,
            "paging": true,
            "info": true,
          }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>
@endsection
