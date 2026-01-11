<head>
    <body>
        <p>
            @isset($name)
                Hello, {{ $name }}
            @endisset
        </p>
        <p>
            @empty($hobbies)
                I don't have any hobbies.
            @endempty
        </p>
    </body>
</head>