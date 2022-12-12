@extends('layouts.app')
@section('title', 'Appointment Verification')
@section('content')
<div class="row" style="background-image: url('/images/16154.jpg'); background-repeat:no-repeat; background-size: cover;">
    <div class="col-md-5 m-5 mx-auto">
            <div class="card">
                <div class="card-header bg-info">
                    <h3 class="text-center text-white" style="font-family: Garamond">Set Appointment</h3>
                </div>
                <div class="card-body">
                    @csrf
                    @if (session()->has('message'))
                    <h6 class="alert alert-danger text-success">{{ session('message') }}</h6>
                    @endif
                    <h6 class="text-center" style="font-family: Brush Script MT; font-style:italic">Appointment Confirmation</h6>
                    <div class="">
                        <p class="fw-light">
                            Thank you! You finally set your appointment with us. Please check your email and click Set Appointment to confirm your appointment.

                        </p><hr>
                        <p class="fw-bold">This is a one time thing. This is just to verify your email. Thank you!</p>
                    </div>

                    <a href="/set-appointment" class="btn btn-sm btn-info">Set Another Appointment</a>
                    <a href="/services" class="btn btn-sm btn-info">View Services</a>
                </div>
            </div>
    </div>
</div>
@endsection
