@extends('layouts.app')

@section('main-content')
    <section class="container mt-5">

        @forelse($trains as $train)
            <div class="card text-center">
                <div class="card-header">
                    {{ $train->agency }}
                </div>
                <div class="card-body">
                    <h5 class="card-title">stazione di partenza:</h5>
                    <p class="card-text">{{ $train->departure_station }}</p>
                    <h5 class="card-title">stazione di arrivo:</h5>
                    <p class="card-text">{{ $train->arrival_station }}</p>
                    <h5 class="card-title">orario di partenza:</h5>
                    <p class="card-text">{{ $train->departure_time }}</p>
                    <h5 class="card-title">orario di arrivo:</h5>
                    <p class="card-text">{{ $train->arrival_time }}</p>
                </div>
            </div>
        @empty
            <h2>Non ci sono risultati</h2>
        @endforelse
    </section>
@endsection
