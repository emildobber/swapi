<h1>{{ $species->name }}</h1>
<li>{{ $species->classification}}</li>
<h2>Homeworld</h2>
@if($planet)
    <li><a href="/planets/{{ $planet->id }}">{{ $planet->name }}</a></li>
@endif
