<native:list class="w-full h-full">
    @foreach ($groups as $group => $screens)
        <native:list-section :native:key="$group" :header="$group">
            @foreach ($screens as $key => $title)
                <native:list-item
                    :native:key="$key"
                    :headline="$title"
                    trailingIcon="forward"
                    @tap="navigate('{{ \App\Showcase::route($key) }}')"
                />
            @endforeach
        </native:list-section>
    @endforeach
</native:list>
