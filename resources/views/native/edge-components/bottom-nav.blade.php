<native:bottom-nav label-visibility="labeled">
    <native:bottom-nav-item id="home" label="Home" icon="home" url="/edge-components/bottom-nav" :active="true" />
    <native:bottom-nav-item id="messages" label="Messages" icon="chat" url="/edge-components/bottom-nav" badge="3" />
    <native:bottom-nav-item id="activity" label="Activity" icon="notifications" url="/edge-components/bottom-nav" :news="true" />
    <native:bottom-nav-item id="profile" label="Profile" icon="person" url="/edge-components/bottom-nav" />
</native:bottom-nav>

@include('native.edge-components.partials.inbox')
