<x-print-layout>

    @php
        $position = 1;
    @endphp

    @while ($position < 42)
        <x-product :position="$position"/>

        @php
            $position += 1;
        @endphp
    @endwhile



</x-print-layout>
