@extends ('layouts.frontend')

@section('title', 'Contact')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
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
                <h1>Contact</h1>
                <form action="{{ route('contact.store') }}" method="POST">
                    @csrf
                    <label for="name">Naam:</label>
                    <input type="text" name="name" id="name" required>

                    <label for="email">E-mail:</label>
                    <input type="email" name="email" id="email" required>

                    <label for="subject">Onderwerp:</label>
                    <input type="text" name="onderwerp" required>

                    <label for="message">Bericht:</label>
                    <textarea name="bericht" required></textarea>

                    <input type="submit" value="Verzend">
                </form>
            </div>
        </div>
    </div>
@endsection
