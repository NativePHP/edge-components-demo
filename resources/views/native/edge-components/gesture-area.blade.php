<native:column class="w-full p-4 gap-4">
    <native:text class="text-base text-theme-on-surface-variant">Drag the card up or down.</native:text>

    <native:stack class="w-full h-[240]">
        {{-- Backdrop that fades in as the card is dragged down --}}
        <native:column
            class="w-full h-full rounded-2xl bg-theme-surface-variant"
            :opacity="$drag->interpolate([0, 180], [0.4, 1])"
        />

        <native:gesture-area :pan-y="$drag" a11y-label="Drag card up or down" class="w-full h-full items-center justify-center">
            <native:column
                class="w-[220] h-[120] rounded-2xl items-center justify-center gap-1 bg-theme-primary"
                :translate-y="$drag->clamp(-60, 180)"
                :scale="$drag->interpolate([0, 180], [1, 0.8])"
            >
                <native:text class="text-lg font-bold text-theme-on-primary">Drag me</native:text>
                <native:text class="text-sm text-theme-on-primary">Runs on the UI thread</native:text>
            </native:column>
        </native:gesture-area>
    </native:stack>
</native:column>
