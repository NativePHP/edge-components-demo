<native:column class="w-full h-full">
    <native:tab-row native:model="activeTab">
        <native:tab label="Overview" />
        <native:tab label="Activity" />
        <native:tab label="Members" />
    </native:tab-row>

    <native:column class="w-full p-4 gap-2">
        @if ($activeTab === 0)
            <native:text class="text-lg font-semibold text-theme-on-surface">Overview</native:text>
            <native:text class="text-base text-theme-on-surface-variant">12 open tasks · 3 due this week</native:text>
        @elseif ($activeTab === 1)
            <native:text class="text-lg font-semibold text-theme-on-surface">Activity</native:text>
            <native:text class="text-base text-theme-on-surface-variant">Maya completed "Draft launch email"</native:text>
        @else
            <native:text class="text-lg font-semibold text-theme-on-surface">Members</native:text>
            <native:text class="text-base text-theme-on-surface-variant">Maya, Leo, Priya and 4 others</native:text>
        @endif
    </native:column>
</native:column>
