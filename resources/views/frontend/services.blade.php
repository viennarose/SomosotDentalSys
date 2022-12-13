
@extends('layouts.app')
<style>
    .btnh {
  border: none;
  opacity: 0.8;
  transition: 0.3s;
}

.btnh:hover {opacity: 2}
</style>
@section('title', 'Services')

@section('content')

<livewire:frontend.services>

@endsection


