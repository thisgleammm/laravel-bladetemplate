<html>
    <body>
        @switch($name)
            @case("A")
                <p>Memuaskan</p>
            @break
            @case("B")
                <p>Bagus</p>
            @break
            @case("C")
                <p>Cukup</p>
            @break
            @default
                <p>Tidak Lulus</p>
        @endswitch
    </body>
</html>