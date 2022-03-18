@extends('layouts.main')


@section('content')
    @forelse ($trains as $train)
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Company: {{ $train->company }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">Train Code: {{ $train->train_code }}</h6>
                <p class="card-text mb-0"><strong>Departure:</strong>
                    {{ date('F j, Y, g:i a ', strtotime($train->departure_hour)) }}
                </p>
                <p class="card-text"><strong>From:</strong>
                    {{ $train->departure_station }}
                </p>
                <p class="card-text mb-0"><strong>Arrival:</strong>
                    {{ date('F j, Y, g:i a ', strtotime($train->arrive_hour)) }}
                </p>
                <p class="card-text"><strong>To:</strong>
                    {{ $train->arrive_station }}
                </p>
                <h6 class="card-subtitle mb-2">Carriages: {{ $train->carriages }}</h6>
                @if (!$train->cancelled)
                    <h5 class="card-subtitle mb-2 {{ $train->in_time ? 'text-success' : 'text-danger' }}">
                        {{ $train->in_time ? 'In time' : 'late' }}</h5>
                @else
                    <p class="btn btn-danger">Deleted</p>
                @endif
            </div>
        </div>

    @empty
        <h1>Non ci sono treni da visualizzare</h1>
    @endforelse
@endsection
