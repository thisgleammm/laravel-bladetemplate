@isset($title)
    <h1>{{ $title }}</h1>
@else
    <h1>Default Title</h1>
@endisset

@isset($description)
    <p>{{ $description }}</p>
@endisset
