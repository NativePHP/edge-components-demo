<native:top-bar>
    <native:top-bar-title>
        <native:row class="gap-2 items-center">
            <native:image src="images/logo.png" class="w-7 h-7" />
            <native:text class="text-lg font-semibold text-theme-on-background">Acme</native:text>
        </native:row>
    </native:top-bar-title>
    <native:top-bar-action id="notifications" label="Notifications" icon="notifications" @tap="tapped('notifications')" />
    <native:top-bar-action id="account" label="Account" icon="person" @tap="tapped('account')" />
</native:top-bar>

@include('native.edge-components.partials.inbox')
