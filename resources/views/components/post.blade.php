<div class="w-full border bg-white">
    <img src="https://bipbap.ru/wp-content/uploads/2017/04/0_7c779_5df17311_orig.jpg" class="w-full" alt="">
    <div class="my-4 mx-5">
        <a href="#" class="border bg-red-500 px-5 py-2 text-white">Лайк</a>
        <p class="w-full my-3">
            <x-post-comment author="{{ $post->owner->username }}" text="{{ $post->content }}"/>
        </p>
        <hr>
        <p class="w-full my-3">
            @foreach($comments as $comment)
                <x-post-comment author="{{ $comment->author->username }}" text="{{ $comment->text }}"></x-post-comment>
            @endforeach
        </p>
    </div>
</div>
