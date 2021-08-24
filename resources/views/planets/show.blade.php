<x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ $planet->name }}
            </h2>
        </x-slot>
    <div class="pl-36 m-4">
        <li>Diamater: {{ $planet->diameter}}</li>
        <li>Population: {{ $planet->population }}</li>
        <h2>Residents</h2>
        @foreach($residents as $resident)
            <li><a href="/people/{{ $resident->id }}">{{ $resident->name }}</a></li>
        @endforeach
    </div>
</x-app-layout>
