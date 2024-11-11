@extends('layouts.frontend')

@section('content')
    <div class="box-wrap">

        <h2 class="heading-main">Voeg Nieuw Project Toe</h2>
        <form action="{{ isset($project) ? route('project.update', $project->id) : route('projects.store') }}" method="POST" class="entry-form">
            @csrf
            @if(isset($project))
                @method('PUT')
            @endif
            <div class="field-block">
                <label for="name" class="label-text">Projectnaam</label>
                <input type="text" id="name" name="name" value="{{ $project->name }}" class="input-basic" required>
            </div>
            <div class="field-block">
                <label for="vak" class="label-text">Vak</label>
                <input type="text" id="vak" name="vak" value="{{ $project->vak }}" class="input-basic" required>
            </div>
            <div class="field-block">
                <label for="description" class="label-text">Beschrijving</label>
                <textarea id="description" name="description" class="textarea-basic" required>
                    {{ $project->description }}
                </textarea>
            </div>
            <button type="submit" class="button-main">Voeg Toe</button>
        </form>
    </div>

@endsection
