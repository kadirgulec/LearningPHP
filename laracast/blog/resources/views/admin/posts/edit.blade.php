<x-layout>

    <x-setting :heading="'Edit Post: ' . $post->title">

        <form action="/admin/posts/{{$post->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <x-form.input name="title" :value="old('title', $post->title)"></x-form.input>
            <x-form.input name="slug" :value="old('slug', $post->slug)"></x-form.input>
            <div class="flex mt-5 space-x-5 justify-between">
                <x-form.input name="thumbnail" type="file" :value="old('thumbnail', $post->thumbnail)"></x-form.input>
                <img src="{{asset('storage/' . $post->thumbnail)}}" alt="thumbnail pic" class="rounded" width="150">
            </div>
            <x-form.textarea name="excerpt">{{ old('excerpt', $post->excerpt) }}</x-form.textarea>
            <x-form.textarea name="body">{{ old('body', $post->body) }}</x-form.textarea>



            <div class="mb-6">
                <x-form.label name='category'></x-form.label>

                <?php
                $categories = App\Models\Category::all();
                ?>

                <select name="category_id" id="category_id">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}>
                            {{ ucwords($category->name) }}</option>
                    @endforeach
                </select>

                <x-form.error name='category'></x-form.error>
            </div>
            <x-submit-button>Update</x-submit-button>
        </form>

    </x-setting>


</x-layout>
