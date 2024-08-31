<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mostafizur Rahman</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="flex flex-col min-h-screen">
    @include('partials.header')
    <main class="flex-grow container mx-auto px-6 py-8">
        @yield('content')
    </main>


</body>
</html>
