@extends ('layouts.frontend')

@section('title', 'Homepage')

@section('content')
    <div class="container">
        <h1>Homepage</h1>
        <div class="overmij">
            <div class="foto">
                <img src="{{ asset('img/marouan.jpg') }}" alt="Marouan El Marnissy">
            </div>
            <div class="text-content">
                <h2>Over mij</h2>
                <p>Hallo, mijn naam is Marouan el Marnissy, en ik ben 17 jaar. Ik zit op de school <br> Curio in Roosendaal knipplein 11. Ik zit op de opleiding Software Development. En dit is mijn portfolio website. <br> Op deze website vind je mijn projecten die ik in de afgelopen 2 jaar heb <br> gemaakt. Veel plezier op mijn Portfolio Site!</p>
            </div>
        </div>
        <h1 class="header-title">Recente Projecten</h1>
        <div class="recent-grid">
            @foreach($recentProjects as $project)
                <div class="project-item">
                    <h3 class="project-name">{{ $project->name }}</h3>
                    <p class="project-subject">{{ $project->vak }}</p>
                    <p class="project-summary">{{ Str::limit($project->description, 100) }}</p>
                    <a href="{{ route('project.show', $project->id) }}" class="link-details">Details</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
