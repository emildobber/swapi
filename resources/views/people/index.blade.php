<table>
    <tr>
        <th>Name</th>
        <th>Height</th>
        <th>Birth Year</th>
        <th>Gender</th>
        <th>Homeworld</th>
        <th>Species</th>
    </tr>
    @foreach($people as $person)
        <tr>
            <th><a href="/people/{{ $person->id }}">{{ $person->name }}</a></th>
            <th>{{ $person->height}}</th>
            <th>{{ $person->birth_year }}</th>
            <th>{{ $person->gender }}</th>
            <th><a href="/planets/{{ $person->planet->id ?? "" }}">{{ $person->planet->name ?? ""}}</a></th>
            <th>{{ $person->species->name ?? ""}}</th>
        </tr>
    @endforeach
</table>
