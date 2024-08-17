<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ? $title : 'Contacts APP' }}</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white dark:bg-gray-900">
    <main class="container mx-auto">
        {{ $slot }}
    </main>
</body>
</html>