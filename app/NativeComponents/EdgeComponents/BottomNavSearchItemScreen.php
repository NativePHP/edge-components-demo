<?php

declare(strict_types=1);

namespace App\NativeComponents\EdgeComponents;

/**
 * Bottom navigation with a dedicated search tab. The tab presents the
 * platform's native search field; this screen supplies what it searches.
 *
 * `searchItems()` hands over the whole corpus up front (and keeps the search
 * tab visible while this screen is active); `onSearchQuery()` filters it as
 * the user types.
 */
class BottomNavSearchItemScreen extends ShowcaseScreen
{
    /** @var list<array{title: string, subtitle: string}> */
    private const MESSAGES = [
        ['title' => 'Maya Patel', 'subtitle' => 'Design review moved to Thursday'],
        ['title' => 'Leo Martins', 'subtitle' => 'Re: Q3 roadmap draft'],
        ['title' => 'Priya Shah', 'subtitle' => 'Photos from the offsite'],
        ['title' => 'Sam Okafor', 'subtitle' => 'Invoice #1042'],
        ['title' => 'Hannah Kim', 'subtitle' => 'Welcome to the team!'],
        ['title' => 'Diego Alvarez', 'subtitle' => 'Lunch on Friday?'],
    ];

    public function searchItems(): ?array
    {
        return $this->results(self::MESSAGES);
    }

    public function onSearchQuery(string $query): array
    {
        $query = mb_strtolower(trim($query));

        return $this->results(array_filter(
            self::MESSAGES,
            fn (array $message): bool => $query === ''
                || str_contains(mb_strtolower($message['title'].' '.$message['subtitle']), $query),
        ));
    }

    protected function key(): string
    {
        return 'bottom-nav-search-item';
    }

    /**
     * @param  array<array{title: string, subtitle: string}>  $messages
     * @return list<array<string, string>>
     */
    private function results(array $messages): array
    {
        return array_values(array_map(fn (array $message): array => [
            'title' => $message['title'],
            'subtitle' => $message['subtitle'],
            'leading' => 'email',
            'method' => "tapped('".$message['title']."')",
        ], $messages));
    }
}
