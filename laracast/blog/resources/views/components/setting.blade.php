@props(['heading'])

<section class="px-6 py-8 flex justify-evenly">
    <div>
        <h1 class="text-lg font-bold mb-4 text-center border-b pb-4">
            {{ $heading }}
        </h1>

        <div class="flex">
            <aside class="w-48 flex-shrink-0">
                <h4 class="font-semibold mb-5">Links</h4>
                <ul>
                    <li>

                        <a href="/admin/posts" class = "{{ request()->is('admin/posts') ? 'text-blue-500' : '' }}">All
                            Posts</a>
                    </li>
                    <li>

                        <a href="/admin/posts/create"
                            class = "{{ request()->is('admin/posts/create') ? 'text-blue-500' : '' }}">New Post</a>
                    </li>
                </ul>
            </aside>

            <main class="flex-1">
                <x-panel class="mx-auto" style="width: 40vw">
                    {{ $slot }}
                </x-panel>
            </main>
        </div>
    </div>


</section>
