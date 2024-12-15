{{-- Imports or extends the base.blade.php content to home.blade.php --}}
@extends('layouts.base')

{{-- Passes the name value to layouts.base --}}
@section('name', 'Joe')

{{-- Anything within the section is rendered within the layout's @yield --}}
@section('content')
    <h1 class="text-4xl font-bold">Home</h1>
    <p class="mt-4 text-lg">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque in saepe ea eius ex recusandae impedit earum! Aperiam quibusdam quos voluptate quisquam cum saepe incidunt odio delectus! Eius, obcaecati asperiores.</p>
@endsection