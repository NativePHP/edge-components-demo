{{-- The navigation rows shared by both drawers. --}}
<native:column class="w-full py-2">
    @include('native.edge-components.partials.drawer-item', ['icon' => 'email', 'label' => 'Inbox', 'action' => 'inbox', 'active' => true, 'badge' => '3'])
    @include('native.edge-components.partials.drawer-item', ['icon' => 'star', 'label' => 'Starred', 'action' => 'starred'])
    @include('native.edge-components.partials.drawer-item', ['icon' => 'edit', 'label' => 'Drafts', 'action' => 'drafts'])
</native:column>

<native:text class="px-7 pt-2 pb-1 text-sm font-semibold text-theme-on-surface-variant">Labels</native:text>

<native:column class="w-full pb-2">
    @include('native.edge-components.partials.drawer-item', ['icon' => 'folder', 'label' => 'Work', 'action' => 'work'])
    @include('native.edge-components.partials.drawer-item', ['icon' => 'map', 'label' => 'Travel', 'action' => 'travel'])
</native:column>

<native:divider />

<native:column class="w-full py-2">
    @include('native.edge-components.partials.drawer-item', ['icon' => 'settings', 'label' => 'Settings', 'action' => 'settings'])

    {{-- Leaves the showcase screen; the drawer closes on its own because the home screen has no drawer. --}}
    <native:pressable @navigate="'/'" class="w-full px-3">
        <native:row class="w-full px-4 py-3 gap-4 items-center">
            <native:icon name="dashboard" :size="22" class="text-theme-on-surface-variant" />
            <native:text class="flex-1 text-base text-theme-on-surface">All components</native:text>
        </native:row>
    </native:pressable>
</native:column>
