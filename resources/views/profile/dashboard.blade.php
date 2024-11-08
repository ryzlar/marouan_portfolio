@extends ('layouts.frontend')

@section('title', 'Dashboard')

@section('content')
    <div class="container-dashboard">
        <h1 class="dashboard-title">Dashboard</h1>
        <div class="min-h-screen flex flex-col">
            <nav class="navbar">
                <div class="navbar-content">
                    <div class="navbar-left">
                        <a href="{{ route('dashboard') }}" class="navbar-link">Dashboard</a>
                    </div>

{{--                    <div class="dropdown">--}}
{{--                        <button id="dropdownButton" class="dropdown-button">--}}
{{--                            <span>{{ Auth::user()->name }}</span>--}}
{{--                            <svg xmlns="http://www.w3.org/2000/svg" class="dropdown-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />--}}
{{--                            </svg>--}}
{{--                        </button>--}}

{{--                        <div id="dropdownMenu" class="dropdown-menu hidden">--}}
{{--                            <a href="{{ route('profile.edit') }}" class="dropdown-item">Profile</a>--}}
{{--                            <form method="POST" action="{{ route('logout') }}">--}}
{{--                                @csrf--}}
{{--                                <button type="submit" class="dropdown-item">Logout</button>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <script>

                    </script>

            </nav>

            <div class="dashboard-content">
                <h2 class="content-title">Welcome to your Dashboard</h2>
                <p class="content-description">This is your main control panel. You can manage your settings and view your data.</p>
            </div>
        </div>
    </div>

    <script>
        const dropdownButton = document.getElementById('dropdownButton');
        const dropdownMenu = document.getElementById('dropdownMenu');

        // Toggle dropdown visibility
        dropdownButton.addEventListener('click', () => {
            dropdownMenu.classList.toggle('hidden');
        });

        // Close the dropdown if clicked outside
        document.addEventListener('click', (e) => {
            if (!dropdownButton.contains(e.target) && !dropdownMenu.contains(e.target)) {
                dropdownMenu.classList.add('hidden');
            }
        });
    </script>
@endsection
