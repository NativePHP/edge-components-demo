<native:top-bar title="Inbox" subtitle="3 unread">
    <native:top-bar-action id="search" label="Search" icon="search" @tap="tapped('search')" />
    <native:top-bar-action id="compose" label="Compose" icon="edit" @tap="tapped('compose')" />
</native:top-bar>

@include('native.edge-components.partials.inbox')
