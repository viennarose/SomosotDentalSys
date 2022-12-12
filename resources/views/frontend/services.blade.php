
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
{{-- <livewire:frontend.appointment-frontend :serviceId="$id"> --}}
<livewire:frontend.services>
{{-- <div>
    <div class="bg-info p-1 opacity-75">
        <h1 class="text-center p-4">SERVICES</h1>
        <p class="fw-light text-center">Choose the service you like and click to set an appointment</p>
    </div>
    <div class="shadow-lg" style="background-image: url('/images/16154.jpg'); background-repeat:no-repeat; background-size: cover;">
        <div class="container">
            @if($images->count() > 0)
                <div class="row g-5 ">
                @foreach($images as $img)
                <div class="col" data-aos="zoom-in-up"><a href="{{url('/set-appointment')}}" class="text-decoration-none text-dark">
                    <div class="card m-2 shadow-lg btnh" style="width: 300px; height:300px">
                        <img class="card-img-top" src="{{asset('storage')}}/{{$img->image}}" alt="">
                    <div class="card-body">
                    <h4 class="card-title mt-2">{{$img->service_type}}</h3>
                    <p class="" style="font-size: 10px; text-align: justify;">{{$img->description}}</p>
                    </div>
                </div></a>

                </div>
                @endforeach
            @endif
        </div>
    </div>
</div> --}}
@endsection


