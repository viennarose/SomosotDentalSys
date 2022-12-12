@extends('layouts.admin')

@section('content')
    <livewire:records.generateRecord :patientRecord_id="$id">
@endsection
