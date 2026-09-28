<native:virtual-list
    :count="$total"
    :from="$virtualWindowFrom"
    :to="$virtualWindowTo"
    item="native.edge-components.virtual-list-row"
    on-window-change="setVirtualWindow"
    class="w-full h-full"
/>
