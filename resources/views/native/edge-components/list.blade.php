<native:list class="w-full h-full">
    <native:list-section header="Favorites">
        <native:list-item headline="Maya Patel" supporting="maya@example.com" leadingMonogram="MP" trailingIcon="forward" @press="tapped('maya')" />
        <native:list-item headline="Leo Martins" supporting="leo@example.com" leadingMonogram="LM" trailingIcon="forward" @press="tapped('leo')" />
    </native:list-section>

    <native:list-section header="Settings">
        <native:list-item headline="Notifications" supporting="Banners, sounds, badges" leadingIcon="notifications" trailingIcon="forward" @press="tapped('notifications')" />
        <native:list-item headline="Privacy" leadingIcon="lock" trailingText="On" @press="tapped('privacy')" />
        <native:list-item headline="Storage" leadingIcon="folder" trailingText="12.4 GB" @press="tapped('storage')" />
        <native:list-item headline="About" leadingIcon="info" trailingIcon="forward" @press="tapped('about')" />
    </native:list-section>
</native:list>
