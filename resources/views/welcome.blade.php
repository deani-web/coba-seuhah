<!DOCTYPE html>
<html lang="id" class="h-full">
<head>
    @include('component.head')
</head>
<body class="h-full flex flex-col font-sans antialiased text-gray-900 bg-white">

    @include('component.navbar')

    <main class="flex-grow">
        @yield('content')
    </main>

    @include('component.footer')

</body>
</html>
