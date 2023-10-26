<x-print-layout>

    @php
        $i = 0;
    @endphp

    @while ($i < 20)
        <x-product></x-product>
        @php
        $i += 1 ;
        @endphp
    @endwhile

</x-print-layout>
