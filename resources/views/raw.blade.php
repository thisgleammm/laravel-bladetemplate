<html>
    <body>
        @php
            class Person {
                public string $name;
                public int $age;

                public function __construct(string $name, int $age) {
                    $this->name = $name;
                    $this->age = $age;
                }
            }

            $person = new Person("Gleam", 20);
        @endphp
        <p>{{ $person->name }}</p>
        <p>{{ $person->age }}</p>
    </body>
</html>