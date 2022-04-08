<x-layouts.app>
    <h1 class="text-4xl mb-5">Редактирование фотопрофиля</h1>
    <form action="{{ route('profile.update') }}" method="POST" class="w-50">
        @csrf
        <input type="text" name="name" placeholder="Имя" class="border text-lg rounded-lg px-5 py-2 w-full my-2">
        <textarea name="bio" rows="5" placeholder="Биография" class="border text-lg rounded-lg px-5 py-2 w-full my-2"></textarea>
        <input type="date" placeholder="Дата рождения" class="border text-lg rounded-lg px-5 py-2 w-full my-2">
        <button type="submit" class="border bg-blue-500 text-white text-lg rounded-lg px-5 py-2 my-2 w-full">
            Обновить
        </button>
    </form>
</x-layouts.app>
