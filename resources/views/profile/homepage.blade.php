@extends ('layouts.frontend')

@section('title', 'Homepage')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Homepage</h1>
                <div class="overmij">
                    <div class="foto">
                        <img src="{{ asset('img/marouan.jpg') }}">
                    </div>
                    <p>hallo, mijn naam is Marouan el Marnissy, en ik ben 17 jaar. Ik zit op de school <br> Curio in Roosendaal knipplein 11. Ik zit op de opleiding Software Development. En dit is mijn portfolio website. <br> Op deze website vind je mijn projecten die ik in de afgelopen 2 jaar heb <br> gemaakt. Veel plezier op mijn Portfolio Site!</p>
                </div>
            </div>
        </div>
    </div>
@endsection
