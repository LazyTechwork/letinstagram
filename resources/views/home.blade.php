<x-layouts.app>
    @forelse($posts as $post)
    <x-post :post="$post"></x-post>
    @empty
        <h1 class="text-center text-gray-400 text-4xl">Фотокарточек не найдено</h1>
    @endforelse
    {{ $posts->links() }}
</x-layouts.app>
