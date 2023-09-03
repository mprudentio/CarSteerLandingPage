@extends('layouts.main')

@section('container')
    <div class="container mt-4" style="padding-bottom: 50px">
        <h1>Trainers</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4 mt-4" >
            @foreach ($trainers as $trainer)
                    <div class="col">
                        <div class="card">
                        <img src={{ asset($trainer["image"]) }} class="card-img-top" alt={{ $trainer["name"]}} style="height:300px">
                        <div class="card-body">
                            <h5 class="card-title">{{ $trainer["name"]}}</h5>
                            <p class="card-text">Pengurus: {{ $trainer["pengurus"] }}</p>
                        </div>
                        </div>
                    </div>
            @endforeach
        </div>
        <div class="mt-4">
            {{ $trainers->links() }}
        </div>
        
    </div>
    

@endsection