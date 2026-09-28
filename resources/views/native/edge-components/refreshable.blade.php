@php
    $posts = [
        ['title' => 'Release notes: v2.4', 'excerpt' => 'Faster sync, a new share sheet and a handful of fixes.'],
        ['title' => 'Team offsite recap', 'excerpt' => 'Three days, two hikes and one very long whiteboard session.'],
        ['title' => 'Hiring: mobile engineer', 'excerpt' => 'Join us to build the next version of the app.'],
    ];
@endphp

<native:refreshable @refresh="refresh">
    <native:column class="w-full gap-3 p-4">
        <native:text class="text-sm text-theme-on-surface-variant">
            {{ $lastRefreshed ? "Updated at {$lastRefreshed}" : 'Pull down to refresh' }}
        </native:text>

        @foreach ($posts as $post)
            <native:column :native:key="$post['title']" class="w-full p-4 gap-2 rounded-lg bg-theme-surface">
                <native:text class="text-lg font-semibold text-theme-on-surface">{{ $post['title'] }}</native:text>
                <native:text class="text-base text-theme-on-surface-variant">{{ $post['excerpt'] }}</native:text>
            </native:column>
        @endforeach
    </native:column>
</native:refreshable>
