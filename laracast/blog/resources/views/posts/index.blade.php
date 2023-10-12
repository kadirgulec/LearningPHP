<x-layout>

    @include ('posts._header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

        @if ($posts->count())
            <x-post-featured-card :post='$posts[0]' />

            <x-posts-grid :$posts/> {{--shorthand of :posts = "$posts"--}}
        @else
            <p class="text-center">No Posts.</p>
        @endif

    </main>
</x-layout>
