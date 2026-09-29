{{--
    Drawer content for DrawerLayout. A drawer renders any Blade view, so it is
    built from core components: a header, then rows of pressable icon + label.
--}}
<native:column class="w-full pb-6">
    <native:row class="w-full px-6 pt-6 pb-5 gap-4 items-center">
        <native:column class="w-12 h-12 rounded-full items-center justify-center bg-theme-primary">
            <native:icon name="person" :size="24" class="text-theme-on-primary" />
        </native:column>
        <native:column class="gap-1">
            <native:text class="text-lg font-semibold text-theme-on-surface">Maya Patel</native:text>
            <native:text class="text-sm text-theme-on-surface-variant">maya@example.com</native:text>
        </native:column>
    </native:row>

    <native:divider />

    @include('native.edge-components.partials.drawer-items')
</native:column>
