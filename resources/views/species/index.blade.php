<table>
    <tr>
        <th>Name</th>
        <th>Classification</th>
        <th>Homeworld</th>
    </tr>
    @foreach($species as $specie)
        <tr>
            <th><a href="/species/{{ $specie->id }}">{{ $specie->name }}</a></th>
            <th>{{ $specie->classification }}</th>
            <th>{{ $specie->planet->name ?? ""}}</th>
        </tr>
    @endforeach
</table>
