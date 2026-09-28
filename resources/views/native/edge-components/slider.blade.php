<native:column class="w-full p-4 gap-6">
    <native:column class="w-full gap-2">
        <native:row class="w-full justify-between">
            <native:text class="text-base text-theme-on-surface">Brightness</native:text>
            <native:text class="text-base text-theme-on-surface-variant">{{ (int) $brightness }}%</native:text>
        </native:row>
        <native:slider native:model.live="brightness" :min="0" :max="100" :step="1" a11y-label="Brightness" class="w-full" />
    </native:column>

    <native:column class="w-full gap-2">
        <native:row class="w-full justify-between">
            <native:text class="text-base text-theme-on-surface">Volume</native:text>
            <native:text class="text-base text-theme-on-surface-variant">{{ (int) $volume }}%</native:text>
        </native:row>
        <native:slider native:model.debounce.150ms="volume" :min="0" :max="100" :step="1" a11y-label="Volume" class="w-full" />
    </native:column>
</native:column>
