<h1>{{ $planet->name }}</h1>
<li>{{ $planet->diameter}}</li>
<li>{{ $planet->population }}</li>
<h2>Residents</h2>
@foreach($residents as $resident)
    <li><a href="/people/{{ $resident->id }}">{{ $resident->name }}</a></li>
@endforeach
