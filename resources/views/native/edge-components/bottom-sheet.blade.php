<native:column class="w-full p-4 gap-3 items-start">
    <native:text class="text-base text-theme-on-surface-variant">Photo from the offsite · 2.4 MB</native:text>
    <native:button label="Show actions" @press="$showSheet = true" />

    <native:bottom-sheet :visible="$showSheet" @dismiss="$showSheet = false" detents="medium">
        <native:column class="w-full gap-0 pb-8">
            <native:pressable @press="$showSheet = false" class="w-full px-4 py-3">
                <native:row class="gap-3 items-center">
                    <native:icon class="text-theme-on-surface-variant" name="share" :size="24" />
                    <native:text class="text-base text-theme-on-surface">Share</native:text>
                </native:row>
            </native:pressable>
            <native:divider />
            <native:pressable @press="$showSheet = false" class="w-full px-4 py-3">
                <native:row class="gap-3 items-center">
                    <native:icon class="text-theme-on-surface-variant" name="download" :size="24" />
                    <native:text class="text-base text-theme-on-surface">Save to device</native:text>
                </native:row>
            </native:pressable>
            <native:divider />
            <native:pressable @press="$showSheet = false" class="w-full px-4 py-3">
                <native:row class="gap-3 items-center">
                    <native:icon class="text-theme-on-surface-variant" name="edit" :size="24" />
                    <native:text class="text-base text-theme-on-surface">Rename</native:text>
                </native:row>
            </native:pressable>
            <native:divider />
            <native:pressable @press="$showSheet = false" class="w-full px-4 py-3">
                <native:row class="gap-3 items-center">
                    <native:icon class="text-theme-destructive" name="delete" :size="24" />
                    <native:text class="text-base text-theme-destructive">Delete</native:text>
                </native:row>
            </native:pressable>
        </native:column>
    </native:bottom-sheet>
</native:column>
