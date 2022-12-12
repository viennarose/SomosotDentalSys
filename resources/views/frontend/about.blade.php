@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<div>
<div class="bg-info p-5 opacity-75">
    <h1 class="text-center">ABOUT US</h1>
</div>
<div class="card" data-aos="fade-right" data-aos-duration="1500">
    <div class="row m-5">
        <div class="col-md-4">
            <img src="{{url('./images/owner.jpg')}}" style="width: 100%; height: auto;" alt="Owner">
        </div>
        <div class="col-md-8">
            <h1 class="fw-light">THE OWNER</h1>
            <p>{{$webSetting->about}}</p>

        <p> The dental clinic is a place where a dentist performs dental procedures and treatments on patients. Dental clinics can be found in hospitals, schools, government offices, and other health-related establishments. The clinic is usually a single room housing all dental equipment and tools. Often, though not always, low-cost or free treatments are performed.</p>
        <p>A dental office is a business establishment owned and/or run by a dental professional. It has several components and handles not only dental services and treatments, but also clerical and financial concerns. Dr. Gordon’s dental office is a perfect example of such an establishment, with multiple employees and different departments.</p>
        </div>
    </div>
</div>

<div class="card" data-aos="fade-left" data-aos-duration="1500">
    <div class="row m-5">
    <div class="col-md-8">
        <h1 class="fw-light">THE EMPLOYEES</h1>
        <p>Our dental office is equipped with the latest state-of-the-art dental tools and devices necessary to ensure quality and accurate work. We also have several dental hygienists and assistants who work alongside Dr. Gordon to make treatments faster and more precise. If you don’t have a dentist yet, it’s best to choose one who has a dental office. A dentist who has an established business within a well-built office is a reputable and legitimate practitioner you can truly trust.</p>
    <p>Dental clinics also frequently serve an educational purpose. They are often associated with university dental schools. In contrast, private practices or “dental offices” are owned by a dentist or an associated medical institution.</p>
    </div>

    <div class="col-md-4">
        <img src="{{url('./images/employees.jpg')}}" style="width: 100%; height: auto;" alt="Owner">
    </div>
    </div>
</div>
</div>

<div class="card">
    <div class="row m-5">
        <div class="col-md-12">
            <h1 class="fw-light text-center">OUR CLIENTS</h1>
        </div>
        <div class="shadow-lg" style="background-image: url('/images/16154.jpg'); background-repeat:no-repeat; background-size: cover;">
            <div class="container">
                @if($testimonies->count() > 0)
                    <div class="row g-5 mb-5 mt-3">
                    @foreach($testimonies as $test)
                    <div class="col" data-aos="fade-down"
                    data-aos-easing="linear"
                    data-aos-duration="1500">
                        <div class="card m-2 shadow-lg">
                            <img class="float-center shadow-lg rounded-circle w-50 mx-auto" src="{{asset('storage')}}/{{$test->image}}" alt="">
                            <div class="card-body ">
                                <figure class="text-center">
                                    <blockquote class="blockquote">
                                      <p style="font-size: 10px">"{{$test->message}}"</p>
                                    </blockquote>
                                    <figcaption class="blockquote-footer">
                                      <cite title="Source Title">{{$test->name}}</cite>
                                    </figcaption>
                                </figure>
                        </div>
                    </div>
                    </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
@endsection

