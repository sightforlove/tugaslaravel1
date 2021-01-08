<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

          @livewireStyles

    </head>
    <body class="antialiased">
        {{$slot}}
        
        @livewireScripts
    </body>
</html>
