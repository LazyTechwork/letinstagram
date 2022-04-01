<x-layouts.app>
    <h1 class="text-4xl mb-5">Загрузка фотокарточки</h1>
    <form action="{{ route('auth.register') }}" method="POST" class="w-50">
        @csrf
        <input type="file" accept="image/png,image/jpeg" class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-violet-50 file:text-violet-700 hover:file:bg-violet-100"/>
        <label>
            <textarea name="description" rows="5" class="border text-lg rounded-lg px-5 py-2 w-full my-2"></textarea>
        </label>
        <button type="submit" class="border bg-blue-500 text-white text-lg rounded-lg px-5 py-2 my-2 w-full">
            Загрузить
        </button>
    </form>
</x-layouts.app>
