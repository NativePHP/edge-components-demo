<native:column class="w-full p-4 gap-3">
    <native:text class="text-lg font-semibold text-theme-on-surface">Notify me by</native:text>

    <native:checkbox label="Email" native:model="emailNotifications" />
    <native:checkbox label="SMS" native:model="smsNotifications" />
    <native:checkbox label="Push notification" native:model="pushNotifications" />

    <native:text class="text-sm text-theme-on-surface-variant">
        {{ collect([$emailNotifications, $smsNotifications, $pushNotifications])->filter()->count() }} of 3 enabled
    </native:text>
</native:column>
