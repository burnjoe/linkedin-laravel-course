{{-- Prefixing it with "x-" lets laravel know that we're using a component from components folder with name "base" --}}
<x-base>
    {{-- Passes this as content of the 'name' slot in base component --}}
    <x-slot name="name">Joe</x-slot>

    {{-- Passes this as content of the 'content' slot in base component --}}
    <x-slot name="content">
        <h1 class="text-4xl font-bold">About</h1>
        <p class="mt-4 text-lg">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque in saepe ea eius ex recusandae impedit earum! Aperiam quibusdam quos voluptate quisquam cum saepe incidunt odio delectus! Eius, obcaecati asperiores.</p>
    </x-slot>
</x-base>