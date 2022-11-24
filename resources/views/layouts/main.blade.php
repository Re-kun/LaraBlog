<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <style>
      body {
        font-family: monospace;
      }
    </style>
</head>
<body >
    <x-navbar></x-navbar>
    <main class="px-5 overflow-hidden sm:px-10 md:px-28 lg:px-32">
      {{ $slot }}
    </main>
    <x-footer></x-footer>
  @vite('resources/js/app.js')
</body>
</html>