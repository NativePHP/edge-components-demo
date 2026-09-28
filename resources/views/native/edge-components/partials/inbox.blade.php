@php
    $messages = [
        ['from' => 'Maya Patel', 'initials' => 'MP', 'subject' => 'Design review moved to Thursday', 'time' => '9:41 AM'],
        ['from' => 'Leo Martins', 'initials' => 'LM', 'subject' => 'Re: Q3 roadmap draft', 'time' => '8:15 AM'],
        ['from' => 'Priya Shah', 'initials' => 'PS', 'subject' => 'Photos from the offsite', 'time' => 'Yesterday'],
        ['from' => 'Sam Okafor', 'initials' => 'SO', 'subject' => 'Invoice #1042', 'time' => 'Yesterday'],
        ['from' => 'Hannah Kim', 'initials' => 'HK', 'subject' => 'Welcome to the team!', 'time' => 'Mon'],
        ['from' => 'Diego Alvarez', 'initials' => 'DA', 'subject' => 'Lunch on Friday?', 'time' => 'Sun'],
    ];
@endphp

<native:list class="w-full h-full" separator>
    @foreach ($messages as $message)
        <native:list-item
            :native:key="$message['subject']"
            :headline="$message['from']"
            :supporting="$message['subject']"
            :trailingText="$message['time']"
            :leadingMonogram="$message['initials']"
        />
    @endforeach
</native:list>
