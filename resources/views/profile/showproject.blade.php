@extends('layouts.frontend')

@section('content')
    <div class="project-detail-container">
        <h2>{{ $project->name }}</h2>
        <p><strong>Vak:</strong> {{ $project->vak }}</p>
        <p><strong>Beschrijving:</strong> {{ $project->description }}</p>
        <a href="{{ route('project.index') }}" class="back-button">Terug naar Projecten</a>
    </div>
@endsection
