@extends('layouts.main')

@section('container')
<div class="container" style="padding-bottom: 50px">
    <h1 class="mt-4">Cars</h1>
    <div class="row" id="ads" style="">
        <!-- Category Card -->
        @foreach ($cartypes as $cartype)
            <div class="col-md-4" style="margin-top: 50px">
                <div class="card rounded">
                    <div class="card-image">
                        <span class="card-notify-badge" style=' 
                            position: absolute;
                            left: -10px;
                            top: -20px;
                            background: #f2d900;
                            text-align: center;
                            border-radius: 30px 30px 30px 30px; 
                            color: #000;
                            padding: 5px 10px;
                            font-size: 14px;'>
                            {{ $cartype["type"] }}
                        </span>
                        <span class="card-notify-year" style="position: absolute;
                            right: -10px;
                            top: -20px;
                            background: #ff4444;
                            border-radius: 50%;
                            text-align: center;
                            color: #fff;      
                            font-size: 14px;      
                            width: 50px;
                            height: 50px;    
                            padding: 15px 0 0 0;">
                            {{ $cartype["year"] }}
                        </span>
                        <img class="card-img-top" src={{ asset($cartype["image"]) }} alt="Alternate Text" style="height:300px" />
                    </div>
                    <div class="card-body text-center">
                        <div class="ad-title m-auto">
                            <h5>{{ $cartype["name"] }}</h5>
                        </div>
                        <p class="ad-btn" style="text-transform: uppercase;
                            width: 150px;
                            height: 40px;
                            border-radius: 80px;
                            font-size: 16px;
                            line-height: 35px;
                            text-align: center;
                            display: block;
                            text-decoration: none;
                            margin: 20px auto 1px auto;
                            overflow: hidden;        
                            position: relative;
                            @if($cartype['color'] == 'Silver'|| $cartype['color'] == 'White')
                                background-color: silver;
                                border: 3px solid silver;
                                color: #fff;
                            @elseif($cartype['color'] == 'Green')
                                background-color: green;
                                border: 3px solid green;
                                color: #fff;
                            @elseif($cartype['color'] == 'Blue')
                                background-color: blue;
                                border: 3px solid blue;
                                color: #fff;
                            @elseif($cartype['color'] == 'Black')
                                background-color: black;
                                border: 3px solid black;
                                color: #fff;
                            @endif">
                        {{ $cartype["color"] }}
                    </a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
    <div class="mt-4">
        {{ $cartypes->links() }}
    </div>
    
</div>    


@endsection