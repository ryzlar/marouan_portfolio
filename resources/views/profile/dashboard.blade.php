@extends ('layouts.frontend')

@section('title', 'Dashboard')

@section('content')
    <div class="container-dashboard">
        <div class="min-h-screen flex flex-col">
            <h2 class="content-title">Welcome to your Dashboard</h2>
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
                <h1 class="content-title">Contact Berichten</h1>
                <table class="contact-table">
                    <thead>
                    <tr>
                        <th>Naam</th>
                        <th>Email</th>
                        <th>Onderwerp</th>
                        <th>Bericht</th>
                        <th class="fh-center">Verwijder</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($contactForms as $conForm)
                        <tr style="color: green; font-family: 'Red Hat Display', sans-serif">
                            <td>{{ $conForm->name }}</td>
                            <td>{{ $conForm->email }}</td>
                            <td>{{ $conForm->onderwerp }}</td>
                            <td>{{ $conForm->bericht }}</td>
                            <td>
                                <form action="{{ route('contact.destroy', $conForm->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="add-button-1">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @if(session('success'))
            <div style="color: green; text-align: center; font-family: 'Red Hat Display', sans-serif"
                 id="success-message">{{ session('success') }}</div>
        @endif
        <script>
            setTimeout(function () {
                var successMessage = document.getElementById('success-message');
                if (successMessage) {
                    successMessage.style.display = 'none';
                }
            }, 10000);
        </script>

        <div class="container mx-auto px-4">
            <h1 class="content-title">Alle Projecten</h1>
            <div class="middle-line">
                <span class="middle-line"></span>
            </div>
            @if(session('addproject'))
                <div style="color: green; text-align: center; font-family: 'Red Hat Display', sans-serif"
                     id="success-message">{{ session('addproject') }}</div>
            @endif
            <a href="{{ route('project.create') }}" class="add-button">Voeg Project Toe</a>
            <table class="contact-table">
                @csrf
                <thead>
                <tr>
                    <th>Naam</th>
                    <th>Vak</th>
                    <th>Beschrijving</th>
                    <th>Details</th>
                    <th>Edit</th>
                    <th class="fh-center">Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($projects as $project)
                    <tr>

                        <td>{{ $project['name'] }}</td>
                        <td>{{ $project['vak'] }}</td>
                        <td>{{ $project['description'] }}</td>
                        <td><a href="{{ route('project.show', $project->id) }}" class="add-button-2">Details</a></td>
                        <td><a href="{{ route('project.edit', $project->id) }}" class="add-button-2">Edit</a></td>
                        <td>
                            <form action="{{ route('project.destroy', $project->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="add-button-1">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
