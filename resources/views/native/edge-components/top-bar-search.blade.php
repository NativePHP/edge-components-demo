@php
    $contacts = collect(['Maya Patel', 'Leo Martins', 'Priya Shah', 'Sam Okafor', 'Hannah Kim', 'Diego Alvarez', 'Ava Thompson', 'Noah Fischer'])
        ->filter(fn ($name) => $query === '' || str_contains(strtolower($name), strtolower($query)));
@endphp

<native:top-bar title="Contacts" search-placeholder="Search contacts" search-on-query="search" />

<native:list class="w-full h-full" separator>
    @foreach ($contacts as $name)
        <native:list-item
            :native:key="$name"
            :headline="$name"
            :leadingMonogram="collect(explode(' ', $name))->map(fn ($part) => $part[0])->join('')"
        />
    @endforeach
</native:list>
