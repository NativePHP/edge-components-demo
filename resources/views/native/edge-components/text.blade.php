<native:scroll-view class="w-full h-full">
    <native:column class="w-full p-4 gap-3">
        <native:text class="text-3xl font-bold text-theme-on-background">Heading</native:text>
        <native:text class="text-2xl font-semibold text-theme-on-background">Subheading</native:text>
        <native:text class="text-lg text-theme-on-background">Large body text</native:text>
        <native:text class="text-base text-theme-on-background">
            Body text wraps across as many lines as it needs. It uses the platform's default typeface — SF Pro on iOS
            and Roboto on Android — unless you configure another.
        </native:text>
        <native:text class="text-sm text-theme-on-surface-variant">Secondary text in a muted color</native:text>

        <native:divider class="my-2" />

        <native:text class="text-base font-light text-theme-on-background">Light</native:text>
        <native:text class="text-base text-theme-on-background">Regular</native:text>
        <native:text class="text-base font-medium text-theme-on-background">Medium</native:text>
        <native:text class="text-base font-bold text-theme-on-background">Bold</native:text>
        <native:text class="text-base italic text-theme-on-background">Italic</native:text>
        <native:text class="text-base underline text-theme-on-background">Underlined</native:text>
        <native:text class="text-base text-theme-primary">Primary color</native:text>
        <native:text class="text-base text-theme-destructive">Destructive color</native:text>
        <native:text class="text-base text-theme-on-background" :max-lines="1">
            A single line that is far too long to fit and so gets truncated with an ellipsis at the end
        </native:text>
    </native:column>
</native:scroll-view>
