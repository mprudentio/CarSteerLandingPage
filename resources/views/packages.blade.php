@extends('layouts.main')

@section('container')
<div class="bg-success-subtle " style="height: auto" >
    <div class="container " style="padding-bottom: 100px" >
        <div class="pt-md-5 pt-4 fs-1 fw-bold" style="color:#048853">
           Choose Your Package
        </div>
        <div class="card-group mt-4">
            @foreach ($packages as $package)
                <div class="card border border-success text-center rounded-2 @if($package['id'] != 3) mt-md-5 @endif" style="@if($package['id'] == 3) height: 400px; background-color:#048853;position:relative;z-index:99 @else height: 300px; @endif" >
                    <div class="card-body @if($package['id'] == 3) mt-5 @else mt-4 @endif">
                        <h5 class="card-title fs-1 fw-bold" style="color:
                        @if($package['name'] === 'Silver')
                            #C0C0C0
                        @elseif($package['name'] === 'Gold')
                            #FFD700
                        @else
                            #E5E4E2
                        @endif">{{ $package["name"] }}</h5>
                        <p class="card-text fs-2 fw-bold @if($package['id'] == 3) mt-5 @else mt-4 @endif">Rp {{ $package["price"] }}</p>
                        <p class="card-text fs-5 fw-bold mt-4">{{ $package["period"] }} Course Period</p>
                        @if($package['id'] == 3)
                            <button type="button" class="btn btn-primary btn-sm" style="position: absolute;top:15px;right:15px">Most Recommended</button>
                        @endif
                    </div>
                </div>
            @endforeach
          </div>
    </div>

</div>

@endsection