<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  @vite('resources/css/app.css')
</head>
<body>
  <nav class="bg-gray-100 px-8 py-4 text-gray-700 flex items-center justify-between">
      <span class="font-bold text-2xl">Brand</span>
      {{-- Placeholder for the slot named "name" --}}
      {{-- $slot is the default content placeholder --}}
      <span>Hello, {{ $name }}</span>
   </nav>
   <section class="p-12 mx-auto max-w-6xl text-gray-800">
      {{-- Placeholder for the slot "content" --}}
      {{ $content }}
    </section>
</body>
</html>