<x-layout>

    <x-setting heading='Publish New Post'>

        <form action="/admin/posts" method="POST" enctype="multipart/form-data">
            @csrf

            <x-form.input name="title"></x-form.input>
            <x-form.input name="slug"></x-form.input>
            <x-form.input name="thumbnail" type="file"></x-form.input>

            <x-form.textarea name="excerpt"></x-form.textarea>
            <x-form.textarea name="body"></x-form.textarea>



            <div class="mb-6">
                <x-form.label name='category'></x-form.label>

                <?php
                $categories = App\Models\Category::all();
                ?>

                <select name="category_id" id="category_id">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ old('category_id') == $category->id ? 'selected' : '' }}>
                            {{ ucwords($category->name) }}</option>
                    @endforeach
                </select>

                <x-form.error name='category'></x-form.error>
            </div>
            <x-submit-button>Publish</x-submit-button>
        </form>

    </x-setting>


</x-layout>
