<native:column class="w-full p-4 gap-3 items-start">
    <native:text class="text-base text-theme-on-surface-variant">Order #1042 · Delivered</native:text>
    <native:button label="View details" @press="$showDetails = true" />

    <native:modal :visible="$showDetails" @dismiss="$showDetails = false">
        <native:column class="w-full h-full p-4 gap-4 safe-area">
            <native:text class="text-2xl font-bold text-theme-on-surface">Order #1042</native:text>
            <native:text class="text-base text-theme-on-surface-variant">Delivered on Monday at 2:15 PM.</native:text>
            <native:divider />
            <native:row class="w-full justify-between">
                <native:text class="text-base text-theme-on-surface">Items</native:text>
                <native:text class="text-base text-theme-on-surface-variant">3</native:text>
            </native:row>
            <native:row class="w-full justify-between">
                <native:text class="text-base text-theme-on-surface">Total</native:text>
                <native:text class="text-base text-theme-on-surface-variant">$48.00</native:text>
            </native:row>
            <native:button label="Close" variant="secondary" @press="$showDetails = false" />
        </native:column>
    </native:modal>
</native:column>
