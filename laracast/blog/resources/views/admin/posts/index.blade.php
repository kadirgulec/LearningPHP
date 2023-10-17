<x-layout>

    <x-setting heading='Manage Post'>

        <ul role="list" class="divide-y divide-gray-100">

            @foreach ($posts as $post)
                <li class="flex justify-between gap-x-6 py-5">
                    <div class="flex min-w-0 gap-x-4">

                        <div class="min-w-0 flex-auto">
                            <p class="text-sm font-semibold leading-6 text-gray-900">
                               <a href="/posts/{{$post->slug}}">{{$post->title}}</a>
                            </p>
                            <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{$post->author->name}}</p>
                        </div>
                    </div>

                    <div class="flex flex-col text-right">
                        <a href="/admin/posts/{{$post->id}}/edit" class="text-blue-500 hover:text-blue-900 text-sm">Edit</a>
                        {{-- <a href="/admin/posts/{{$post->id}}/edit" class="text-blue-500 hover:text-blue-900 text-sm">Delete</a> --}}
                        <form action="/admin/posts/{{$post->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="text-blue-500 hover:text-blue-900 text-sm mt-5">Delete</button>
                        </form>
                    </div>
                </li>
            @endforeach



        </ul>


    </x-setting>


</x-layout>
