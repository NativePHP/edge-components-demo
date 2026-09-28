@php
    use Native\Mobile\Edge\Layouts\Builders\NavAction;

    $exportMenu = [
        NavAction::make('export_pdf')->label('Export as PDF')->icon('file')->press("tapped('export_pdf')"),
        NavAction::make('export_csv')->label('Export as CSV')->icon('list')->press("tapped('export_csv')"),
        NavAction::divider(),
        NavAction::make('delete')->label('Delete')->icon('delete')->press("tapped('delete')")->destructive(),
    ];

    $rowMenu = [
        NavAction::make('mark_read')->label('Mark as read')->icon('check')->press("tapped('mark_read')"),
        NavAction::make('mute')->label('Mute')->icon('mute')->press("tapped('mute')"),
        NavAction::divider(),
        NavAction::make('archive')->label('Archive')->icon('folder')->press("tapped('archive')"),
    ];
@endphp

<native:column class="w-full p-4 gap-4 items-start">
    <native:text class="text-base text-theme-on-surface-variant">Quarterly report · 12 pages</native:text>
    <native:button label="Export" :menu="$exportMenu" />
</native:column>

<native:list separator>
    <native:list-item headline="Maya Patel" supporting="Design review moved to Thursday" leadingMonogram="MP" :trailing-menu="$rowMenu" />
    <native:list-item headline="Leo Martins" supporting="Re: Q3 roadmap draft" leadingMonogram="LM" :trailing-menu="$rowMenu" />
</native:list>
