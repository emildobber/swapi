<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <table class="m-5">
        <tr>
            <th>Name</th>
            <th>diameter</th>
            <th>population</th>
            <th>residents</th>
        </tr>
        @foreach($planets as $planet)
            <tr>
                <td class="border-2 p-2"><a href="/planets/{{ $planet->id }}">{{ $planet->name }}</a></td>
                <td class="border-2 p-2">{{ $planet->diameter}}</td>
                <td class="border-2 p-2">{{ $planet->population }}</td>
                <td class="border-2 p-2">
                    @foreach($residents as $resident)
                        @if($resident->planet_id === $planet->id)
                        <a href="/people/{{ $resident->id }}">{{ $resident->name }}</a>,
                        @endif
                    @endforeach
                </td>
            </tr>
        @endforeach
    </table>
</x-app-layout>
