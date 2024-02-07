<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- @yield exibe o conteúdo de uma determinada sessão --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>@yield("title")</title>
</head>
<body>
    <header>
        @include("layout.nav")
    </header>
    
    <main>
        <div class="container">
            @yield("content")
        </div>
    </main>

    @include("layout.footer")

</body>
</html>