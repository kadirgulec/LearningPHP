@props(['comment'])
<article class="flex bg-gray-100 p-6 rounded-xl border border-gray-200 space-x-4">
    <div class="flex-shrink-0">
        <img src="https://i.pravatar.cc/60?id{{ $comment->user_id}}" width="60" height="60" alt="ProfileAvatar" class="rounded-xl">
    </div>
    <div>
        <header class="mb-4">
            <h3 class="font-bold">{{$comment->author->name}}</h3>
            <time>{{ $comment->created_at->diffForHumans() }}</time>
        </header>
        <p>
            {{$comment->body}}
        </p>
    </div>
</article>
