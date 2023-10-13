@auth
    <form action="/posts/{{ $post->slug }}/comments" method="POST"
        class="bg-gray-100 p-6 rounded-xl border border-gray-200">
        @csrf
        <header class="flex items-center">
            <img src="https://i.pravatar.cc/60?id{{ auth()->id() }}" width="40" height="40" alt="ProfileAvatar"
                class="rounded-full">

            <h2 class="ml-4">Want to participate?</h2>
        </header>
        <div class="mt-5">
            <textarea required name="body" id="body" class="w-full focus:outline-none focus:ring rounded bg-gray-100"
                rows="5" placeholder="What do you think about this?"></textarea>
            @error('body')
                <p class="text-xs text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex justify-end pt-5 mt-5 border-t border-gray-200">
            <x-submit-button>Post</x-submit-button>

        </div>
    </form>
@else
    <p class="font-semibold"><a class="hover:underline" href="/login">Log in </a> to leave a comment.</p>
@endauth
