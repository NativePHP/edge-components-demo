{{--
    One drawer row, built from core components.
    @param string $icon, string $label, string $action, bool $active = false, ?string $badge = null
--}}
@php $active ??= false; $badge ??= null; @endphp

<native:pressable @press="tapped('{{ $action }}')" class="w-full px-3">
    <native:row class="w-full px-4 py-3 gap-4 items-center rounded-full {{ $active ? 'bg-theme-primary/15' : '' }}">
        <native:icon name="{{ $icon }}" :size="22" class="{{ $active ? 'text-theme-primary' : 'text-theme-on-surface-variant' }}" />
        <native:text class="flex-1 text-base {{ $active ? 'font-semibold text-theme-primary' : 'text-theme-on-surface' }}">{{ $label }}</native:text>
        @if ($badge)
            <native:text class="text-sm text-theme-on-surface-variant">{{ $badge }}</native:text>
        @endif
    </native:row>
</native:pressable>
