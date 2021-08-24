<table>
    <tr>
        <th>Name</th>
        <th>diameter</th>
        <th>population</th>
        <th>residents</th>
    </tr>
    @foreach($planets as $planet)
        <tr>
            <th>{{ $planet->name }}</th>
            <th>{{ $planet->diameter}}</th>
            <th>{{ $planet->population }}</th>
            <th>
                @foreach($residents as $resident)
                    @if($resident->planet_id === $planet->id)
                    <a href="/people/{{ $resident->id }}">{{ $resident->name }}</a>,
                    @endif
                @endforeach
            </th>
        </tr>
    @endforeach
</table>
