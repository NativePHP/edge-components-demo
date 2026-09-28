<native:side-nav-header
    title="Acme"
    subtitle="maya@example.com"
    icon="person"
/>

<native:side-nav-item id="inbox" label="Inbox" icon="email" url="/edge-components/side-nav" badge="3" :active="true" />
<native:side-nav-item id="starred" label="Starred" icon="star" url="/edge-components/side-nav" />
<native:side-nav-item id="drafts" label="Drafts" icon="edit" url="/edge-components/side-nav" />

<native:side-nav-group heading="Labels" :expanded="true">
    <native:side-nav-item id="work" label="Work" icon="folder" url="/edge-components/side-nav" />
    <native:side-nav-item id="travel" label="Travel" icon="map" url="/edge-components/side-nav" />
</native:side-nav-group>

<native:divider />

<native:side-nav-item id="settings" label="Settings" icon="settings" url="/edge-components/side-nav" />
<native:side-nav-item id="help" label="Help" icon="help" url="/edge-components/side-nav" />
