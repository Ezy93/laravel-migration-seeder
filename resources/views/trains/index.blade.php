@extends('layouts.main')

@section('title','trains')

@section('main-content')
    <main>
        <div class="container-fluid">
            <div class="row">
                
                    @foreach ($trains as $train)
                        <div class="col-3">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h5 class="card-title"><span>Company:</span>{{' '.$train->company}}</h5>
                                    <h6 class="card-subtitle mb-2 text-muted"><span>Train-code:</span>{{' '.$train->train_code}}</h6>
                                    <p class="card-text"><span>Departure Station:</span>{{' '.$train->departure_station}}</p>
                                    <p class="card-text"><span>Arrival Station:</span>{{' '.$train->arrival_station}}</p>
                                    <p class="card-text"><span>Departure:</span>{{' '.$train->departure_date}}</p>
                                    <p class="card-text"><span>Arrival:</span>{{' '.$train->arrival_date}}</p>
                                    <p class="card-text"><span>Carriages:</span>{{' '.$train->number_of_carriages}}</p>
                                    <p class="card-text">
                                        @if (!$train->isDelete)
                                            @if ($train->isInTime)
                                                <span>Il treno arriverà in orario</span>
                                            @else
                                                <span>Il treno ha subito un leggero ritardo</span>
                                            @endif
                                        @else
                                            <span>Il treno è stato cancellato</span>
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                
            </div>

        </div>
    </main>
@endsection