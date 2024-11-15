@extends ('layouts.frontend')

@section('title', 'Projects')

@section('content')
    <div class="main-container">
        <div class="container mx-auto px-4">
            <h1 class="content-title">Alle Projecten</h1>
            <div class="middle-line">
                <span class="middle-line"></span>
            </div>
            @if(session('addproject'))
                <div style="color: green; text-align: center; font-family: 'Red Hat Display', sans-serif"
                     id="success-message">{{ session('addproject') }}</div>
            @endif
            <table class="contact-table">
                @csrf
                <thead>
                <tr>
                    <th>Naam</th>
                    <th>Vak</th>
                    <th>Beschrijving</th>
                    <th>Details</th>
                </tr>
                </thead>
                <tbody>
                @foreach($projects as $project)
                    <tr>

                        <td>{{ $project['name'] }}</td>
                        <td>{{ $project['vak'] }}</td>
                        <td>{{ $project['description'] }}</td>
                        <td><a href="{{ route('project.show', $project->id) }}" class="add-button-2">Details</a></td>
                    </tr>
                    <tr>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
