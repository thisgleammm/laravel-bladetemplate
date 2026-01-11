<html>
    <head>

    </head>
    <body>
        <p>
            @if (count($hobies) == 1)
                i have one hobie
            @elseif (count($hobies) > 1)
                i have multiple hobies
            @else
                i don't have any hobies
            @endif
        </p>
    </body>
</html>