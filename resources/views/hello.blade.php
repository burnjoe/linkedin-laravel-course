<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- This uses the App name from assoc array key = 'name' from '/config/app.php' --}}
    {{-- You should use config() and not directly use env() in views --}}
    <title>{{ config('app.name') }}</title>
</head>
<body>
    Hello, World!
</body>
</html>