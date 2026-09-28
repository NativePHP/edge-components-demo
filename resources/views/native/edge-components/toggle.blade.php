<native:column class="w-full">
    <native:row class="w-full px-4 py-3 justify-between items-center">
        <native:text class="text-base text-theme-on-surface">Notifications</native:text>
        <native:toggle native:model="notifications" a11y-label="Notifications" />
    </native:row>
    <native:divider />
    <native:row class="w-full px-4 py-3 justify-between items-center">
        <native:text class="text-base text-theme-on-surface">Dark mode</native:text>
        <native:toggle native:model="darkMode" a11y-label="Dark mode" />
    </native:row>
    <native:divider />
    <native:row class="w-full px-4 py-3 justify-between items-center">
        <native:text class="text-base text-theme-on-surface-variant">Location (managed by your organization)</native:text>
        <native:toggle :value="$location" disabled a11y-label="Location" />
    </native:row>
</native:column>
