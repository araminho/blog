<!-- View stored in resources/views/greeting. blade.php -->
<html>

<body>
    <h1>Hello, {{ $name }}</h1>
</body>

</html>

@for ($i = 0; $i < 10; $i++)
    {{$i}} 
@endfor

<!-- dasdasd -->


{{-- This comment will not be present in the rendered HTML --}}
