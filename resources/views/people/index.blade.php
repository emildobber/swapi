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
            <th><a href="/people/{{ $person->id }}">{{ $person->name }}</th>
            <th>{{ $person->height}}</th>
            <th>{{ $person->birth_year }}</th>
            <th>{{ $person->gender }}</th>
            <th>{{ $person->planet->name ?? ""}}</th>
            <th>{{ $person->species->name ?? ""}}</th>
        </tr>
    @endforeach
</table>
