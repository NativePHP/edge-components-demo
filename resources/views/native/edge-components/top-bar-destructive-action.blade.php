<native:top-bar title="Draft" subtitle="Saved just now">
    <native:top-bar-action id="share" label="Share" icon="share" @tap="tapped('share')" />
    <native:top-bar-action id="delete" label="Delete" icon="delete" destructive @tap="tapped('delete')" />
</native:top-bar>

<native:column class="w-full p-4 gap-3">
    <native:text class="text-2xl font-bold text-theme-on-background">Trip ideas</native:text>
    <native:text class="text-base text-theme-on-surface-variant">
        A long weekend somewhere with good coffee, a short walk to the water and no early alarms.
    </native:text>
</native:column>
