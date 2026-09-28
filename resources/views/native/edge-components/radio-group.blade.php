<native:column class="w-full p-4 gap-3">
    <native:radio-group native:model="plan" label="Choose a plan">
        <native:radio value="free" label="Free — $0/mo" />
        <native:radio value="pro" label="Pro — $9/mo" />
        <native:radio value="team" label="Team — $29/mo" />
        <native:radio value="enterprise" label="Enterprise (contact sales)" disabled />
    </native:radio-group>

    <native:text class="text-sm text-theme-on-surface-variant">Current plan: {{ ucfirst($plan) }}</native:text>
</native:column>
