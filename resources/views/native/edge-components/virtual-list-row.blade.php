{{-- Row template for virtual-list.blade.php — rendered once per visible index. --}}
<native:list-item
    headline="Item {{ number_format($index + 1) }}"
    supporting="Row {{ $index + 1 }} of 10,000"
    leadingMonogram="{{ ($index + 1) % 100 }}"
/>
