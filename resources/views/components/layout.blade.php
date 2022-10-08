<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Presto-Shop</title>
{{-- script direttiva vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <x-navbar> </x-navbar>

    <x-header> </x-header>

    <div class=" container-fluid texture min-vh-100">
        {{ $slot }}
    </div>

    <x-footer> </x-footer>


</body>

</html>
