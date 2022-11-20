<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    @vite('resources/css/app.css')

</head>
<body>
    {{-- dashboard nav --}}
    <x-dashboard__navbar></x-dashboard__navbar>
    <x-sidebar></x-sidebar>
    <main class="overflow-hidden px-5 sm:px-10 md:px-28 lg:px-32">
        {{ $slot }}
    </main>

    @vite('resources/js/app.js')
</body>
</html>