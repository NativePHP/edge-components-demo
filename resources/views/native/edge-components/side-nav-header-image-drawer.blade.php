<native:side-nav-header
    title="Acme"
    subtitle="maya@example.com"
    image-url="images/drawer-header.png"
/>

<native:side-nav-item id="inbox" label="Inbox" icon="email" url="/edge-components/side-nav-header-image" badge="3" :active="true" />
<native:side-nav-item id="starred" label="Starred" icon="star" url="/edge-components/side-nav-header-image" />
<native:side-nav-item id="drafts" label="Drafts" icon="edit" url="/edge-components/side-nav-header-image" />

<native:divider />

<native:side-nav-item id="settings" label="Settings" icon="settings" url="/edge-components/side-nav-header-image" />

<native:divider />

<native:side-nav-item id="showcase" label="All components" icon="dashboard" url="/" />
