<x-layouts.app>
    <h1 class="text-blue-500 text-4xl font-bold">{{ '@'.$user->username }} <a href="{{route('profile.edit')}}"
                                                                              class="border bg-gray-100 text-gray-700 text-sm rounded-lg px-3 py-1 ml-2">Редактировать
            профиль</a></h1>
    @if($user->information->name)<p class="text-md font-bold">{{ $user->information->name }}</p>@endif
    @if($user->information->bio)<p class="text-md font-bold">{{ $user->information->bio }}</p>@endif
    <section id="posts" class="mt-12">
        @forelse($posts as $post)
            <x-post :post="$post"></x-post>
        @empty
            <h1 class="text-center text-gray-400 text-4xl">Фотокарточек не найдено</h1>
        @endforelse
    </section>
    {{ $posts->links() }}
</x-layouts.app>
