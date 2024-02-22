@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            @foreach ($cars as $car)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">{{ $car->name}}</div>
                        <div class="card-body">{{ $car->image }}</div>
                        <div class="card-body">
                            @foreach ($car->tags as $tag)
                                {{ $tag->name }}
                            @endforeach
                            <div>
                                <a href="{{ route('admin.cars.show', $car->id) }}">
                                    <button>Dettagli</button>
                                </a>
                            </div>
                           
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection