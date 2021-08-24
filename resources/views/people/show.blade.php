<x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ $person->name }}
            </h2>
        </x-slot>
    <div class="pl-36 m-4">
        <li>Height: {{ $person->height}}</li>
        <li>Birth Year: {{ $person->birth_year }}</li>
        <li>Gender: {{ $person->gender }}</li>
        <li>Planet: {{ $person->planet->name ?? "" }}</li>
        <li>Species: {{ $person->species->name ?? "" }}</li>
    </div>
</x-app-layout>
