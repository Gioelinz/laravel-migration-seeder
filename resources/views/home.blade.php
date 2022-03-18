@extends('layouts.main')


@section('content')
    @forelse ($trains as $train)
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Company: {{ $train->company }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">Train Code: {{ $train->train_code }}</h6>
                <p class="card-text"><strong>Departure:</strong>
                    {{ date('F j, Y, g:i a ', strtotime($train->departure_hour)) }}
                </p>
                <p class="card-text"><strong>Arrival:</strong>
                    {{ date('F j, Y, g:i a ', strtotime($train->arrive_hour)) }}
                </p>
                <h6 class="card-subtitle mb-2">Carriages: {{ $train->carriages }}</h6>
                <h6 class="card-subtitle mb-2 {{ $train->in_time ? 'text-success' : 'text-danger' }}">
                    {{ $train->in_time ? 'In orario' : 'In ritardo' }}</h6>

            </div>
        </div>

    @empty
        <h1>Non ci sono treni da visualizzare</h1>
    @endforelse
@endsection
