<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <table class="m-5">
        <tr>
            <th>Name</th>
            <th>Classification</th>
            <th>Homeworld</th>
        </tr>
        @foreach($species as $specie)
            <tr>
                <td class="border-2 p-2"><a href="/species/{{ $specie->id }}">{{ $specie->name }}</a></td>
                <td class="border-2 p-2">{{ $specie->classification }}</td>
                <td class="border-2 p-2"><a href="/planets/{{ $specie->planet->id ?? ""}}">{{ $specie->planet->name ?? ""}}</a></td>
            </tr>
        @endforeach
    </table>
</x-app-layout>
