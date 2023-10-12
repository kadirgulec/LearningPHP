<x-dropdown>

    <x-slot name="trigger">
        <button class="py-2 pl-3 pr-9 text-sm lg:w-32 font-semibold text-left inline-flex w-full">

            @isset($currentCategory)
                {{ ucwords($currentCategory->name) }}
            @else
                Categories
            @endisset

            {{-- arrow --}}
            <x-icon name="down-arrow" class="absolute pointer-events-none" style="right: 12px;"></x-icon>
        </button>
    </x-slot>
    @isset($currentCategory)
        <x-dropdown-item href="/">All</x-dropdown-item>
    @else
    @endisset
    @foreach ($categories as $category)
        <x-dropdown-item href="/?category={{ $category->slug }}" :active="isset($currentCategory) && $currentCategory->is($category)">{{ ucwords($category->name) }}
        </x-dropdown-item>
    @endforeach
</x-dropdown>
