<native:bottom-nav label-visibility="labeled">
    <native:bottom-nav-item id="home" label="Home" icon="home" url="/edge-components/bottom-nav-search-item" :active="true" />
    <native:bottom-nav-item id="library" label="Library" icon="book-open" url="/edge-components/bottom-nav-search-item" />
    <native:bottom-nav-item id="profile" label="Profile" icon="person" url="/edge-components/bottom-nav-search-item" />
    <native:bottom-nav-item id="search" label="Search" icon="search" url="/edge-components/bottom-nav-search-item" search search-placeholder="Search" />
</native:bottom-nav>

@include('native.edge-components.partials.inbox')
