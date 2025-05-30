<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="flex flex-col p-1">
    <x-header />
    <div class="flex w-full h-[800px]">
        <x-sidebar />
        <main class="w-6/7 border border-black-900 h-full p-5 overflow-scroll">
            {{ $slot }}
        </main>
    </div>
</body>

</html>