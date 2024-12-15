<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    {{-- Things that are preceded with @ is called blade directives --}}
    @if($name === "Joe")
        <h1>Hello Admin!</h1>
    @else
        {{-- Access the passed variable 'name' from route to view --}}
        <h1>Hello {{ $name }}!</h1>
    @endif
</body>

</html>