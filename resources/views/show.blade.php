<!-- resources/views/universite/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $universite->nom }}</h1>
        <p>Description: {{ $universite->description }}</p>
        <p>Localisation: {{ $universite->localisation }}</p>

        <!-- Afficher les photos de l'université -->
        @if($universite->photos->count() > 0)
            <h2>Photos</h2>
            <div class="row">
                @foreach($universite->photos as $photo)
                    <div class="col-md-4">
                        <img src="{{ asset('storage/' . $photo->url) }}" alt="{{ $photo->nom }}" class="img-fluid">
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
