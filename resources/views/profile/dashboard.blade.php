@extends ('layouts.frontend')

@section('title', 'Dashboard')

@section('content')
    <div class="container-dashboard">
        <div class="min-h-screen flex flex-col">
            <nav class="navbar">
                <div class="navbar-content">
                    <div class="navbar-left">
                        <a href="{{ route('dashboard') }}" class="navbar-link">Dashboard</a>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span>{{ Auth::user()->name }}</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <a class="dropdown-item" href="{{ url('/') }}">Home</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item">Logout</button>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>

            <div class="dashboard-content">
                <h2 class="content-title">Welcome to your Dashboard</h2>
                <h1 class="content-title">Contact Berichten</h1>
                <table class="contact-table">
                    <thead>
                    <tr>
                        <th>Naam</th>
                        <th>Email</th>
                        <th>Onderwerp</th>
                        <th>Bericht</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($contactForms as $conForm)
                        <tr style="color: green; font-family: 'Red Hat Display', sans-serif">
                            <td>{{ $conForm->name }}</td>
                            <td>{{ $conForm->email }}</td>
                            <td>{{ $conForm->onderwerp }}</td>
                            <td>{{ $conForm->bericht }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @if(session('success'))
            <div style="color: green; text-align: center; font-family: 'Red Hat Display', sans-serif" id="success-message">{{ session('success') }}</div>
        @endif
        <script>
            setTimeout(function() {
                var successMessage = document.getElementById('success-message');
                if (successMessage) {
                    successMessage.style.display = 'none';
                }
            }, 10000);
        </script>
        <div class="container mx-auto px-4">
            <a href="{{ route('project.create') }}" class="add-button">Voeg Project Toe</a>
            <h2 class="text-2xl font-bold mb-4">Recente Projecten</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                @foreach($projects as $project)
                    <div class="border-b pb-4">
                        <h3 class="font-semibold text-lg">{{ $project->name }}</h3>
                        <p>{{ $project->description }}</p>
                    </div>
                @endforeach
            </div>
            <h2 class="text-2xl font-bold mb-4">Alle Projecten</h2>
            <h2 class="text-2xl font-bold mt-8 mb-4">Projecten</h2>
            @foreach($projects as $project)
                <div class="border-b pb-4">
                    <h3 class="font-semibold text-lg">{{ $project->name }}</h3>
                    <p>{{ $project->description }}</p>
                </div>
            @endforeach
        </div>
        </div>
    </div>

@endsection
