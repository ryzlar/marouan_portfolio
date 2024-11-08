@extends('layouts.frontend')

@section('content')
    <div class="container mx-auto px-4">

        <h2 class="text-2xl font-bold mb-4">Nieuw Project Toevoegen</h2>
        <form action="{{ route('projects.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="name" class="block font-semibold">Naam</label>
                <input type="text" id="name" name="name" class="w-full border p-2 rounded" required>
            </div>
            <div>
                <label for="vak" class="block font-semibold">Vak</label>
                <input type="text" id="vak" name="vak" class="w-full border p-2 rounded" required>
            </div>
            <div>
                <label for="description" class="block font-semibold">Beschrijving</label>
                <textarea id="description" name="description" class="w-full border p-2 rounded" required></textarea>
            </div>
            <button type="submit" class="btn bg-blue-500 text-white py-2 px-4 rounded-lg shadow-md hover:bg-blue-600">
                Project Toevoegen
            </button>
        </form>
    </div>
@endsection
