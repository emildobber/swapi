<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $species->name }}
        </h2>
    </x-slot>
    <div class="pl-36 m-4">
        <li>Classification: {{ $species->classification}}</li>
        @if($planet !== null)
            <li>Homeworld: <a href="/planets/{{ $planet->id }}">{{ $planet->name }}</a></li>
        @endif
    </div>
</x-app-layout>
