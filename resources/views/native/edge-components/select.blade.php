<native:column class="w-full p-4 gap-5">
    <native:select
        label="Country"
        :options="['Australia', 'Brazil', 'Canada', 'Germany', 'India', 'Japan', 'United Kingdom', 'United States']"
        native:model="country"
    />

    <native:select
        label="Size"
        placeholder="Choose a size"
        :options="['Small', 'Medium', 'Large']"
        native:model="size"
    />
</native:column>
