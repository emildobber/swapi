<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('People') }}
        </h2>
    </x-slot>
    <table class="m-5">
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
                <td class="border-2 p-2"><a href="/people/{{ $person->id }}">{{ $person->name }}</a></td>
                <td class="border-2 p-2">{{ $person->height}}</td>
                <td class="border-2 p-2">{{ $person->birth_year }}</td>
                <td class="border-2 p-2">{{ $person->gender }}</td>
                <td class="border-2 p-2"><a href="/planets/{{ $person->planet->id ?? "" }}">{{ $person->planet->name ?? ""}}</a></td>
                <td class="border-2 p-2">{{ $person->species->name ?? ""}}</td>
            </tr>
        @endforeach
    </table>
</x-app-layout>
