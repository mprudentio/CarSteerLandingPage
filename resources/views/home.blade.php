@extends('layouts.main')

@section('container')
<div class="bg-success-subtle " style="height: auto" >
    <div class="d-md-flex justify-content-between container " style="padding-bottom: 100px" >
        <div class="pt-md-5 pt-4">
            <p class="fs-1 fw-bold" style="color:#048853">Driving Made Easy: </p>
            <p class="fs-1 fw-bold" style="color:#048853">Where Learning Meets Fun</p>
            <p style="width: 450px;line-height:30px" class="mt-5" style="font-size:20px"><span style='font-weight:bold'>At CarSteer</span>, We're dedicated to providing you with top-notch driving lessons, ensuring you're road-ready with confidence</p>
        </div>
        <div class="mt-md-5" style="max-width:500px;width:100%">
            <img src="img/car.png" alt="" class="img-fluid">
        </div>
    </div>
</div>

<div class="container mt-5" style="padding-bottom: 100px" >
    <div class="">
        <p  class="text-center" style="color: #048853; font-size:38px; font-weight:600">Tailor your schedule to your preferences</p>
        <p class="text-center mt-2" style="font-size: 18px">Whether you're a weekend enthusiast or a weekday devotee, we offer a range of flexible scheduling options to accommodate your needs</p>
        <div class="d-flex justify-content-center align-items-center">
            <a href="/schedules" class="btn btn-outline-success text-center mt-2" style="width:300px">See  Schedules</a>
        </div>
        
    </div>
 </div>

<div class="bg-success-subtle " style="height: auto" >
    <div class="d-md-flex justify-content-between container" style="padding-bottom: 50px" >
        <div class="d-flex justify-content-center align-items-center ">
            <div class="mt-md-4" style="max-width:300px;width:100%;">
                <img src="img/offer.jpg" alt="" class="img-fluid">
            </div>
        </div>

        <div class="mt-md-5 mt-4">
            <p class="fs-1 fw-bold text-end" style="color:#048853">Your Choice, Your Budget </p>
            <p class="fs-2 fw-bold text-end" style="color:#048853">Discover your ideal fit among our packages</p>
            <p style="line-height:30px;font-size:20px" class="mt-5 text-end">And for those seeking the ultimate value, our <span style="color:#048853;font-weight:bold">Gold package</span> shines above the rest</p>
            <div class="d-flex flex-row-reverse">
                <a href="/packages" class="btn btn-outline-success text-center mt-2" style="width:300px">Discover Packages</a>
            </div>
        </div>
        
    </div>
</div>

<div class="container mt-5" style="padding-bottom: 100px" >
    <div class="d-flex justify-content-between ">
        <p  class="" style="color: #048853; font-size:38px; font-weight:600">Explore Your Trainer</p>
    </div>
    <div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($trainers as $trainer)
                <a href="/trainers" class="text-decoration-none" >
                    <div class="col">
                        <div class="card">
                        <img src={{ asset($trainer["image"]) }} class="card-img-top" alt={{ $trainer["name"]}} style="height:300px">
                        <div class="card-body">
                            <h5 class="card-title">{{ $trainer["name"]}}</h5>
                            <p class="card-text">Pengurus: {{ $trainer["pengurus"] }}</p>
                        </div>
                        </div>
                    </div>
                </a>   
            @endforeach
          </div>
    </div>
    <div class="d-flex justify-content-center align-items-center">
        <a href="/trainers" class="btn btn-outline-success text-center mt-4" style="width:200px">See Others</a>
    </div>
</div>

<div class="bg-success-subtle " style="height: auto" >
   <div class="container pt-3" style="padding-bottom: 50px">
    <div class="d-flex justify-content-between">
        <p  class="" style="color: #048853; font-size:38px; font-weight:600" class="mt-4">View Your Favourite Car</p>
        <div class="d-flex justify-content-center align-items-center">
            <a href="/car-types" class="btn btn-outline-success text-center d-none d-md-inline" style="width:200px">View More</a>
        </div>
    </div>
    <div id="myCarousel" class="carousel slide mt-5">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            @foreach ($cars as $car)
                <a href="/car-types" class="text-decoration-none">
                    <div class="carousel-item active">
                        <img src={{ asset($car["image"]) }} class="d-block w-100" alt={{ $car["name"] }} style="height: 500px">
                    </div>
                </a>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      
   </div>
</div>


@endsection


