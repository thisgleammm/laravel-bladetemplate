<html>
    <body>
        <ul>
            @forelse ($hobbies as $hobby)
                <li>{{ $hobby }}</li>
            @empty
                <li>No hobbies</li>
            @endforelse
        </ul>
    </body>
</html>